<?php
class SystemAction extends BackAction
{
    public $server_url;
    public $key;
    public function _initialize()
    {
        parent::_initialize();
        $this->server_url = trim(C('server_url'));
        if (!$this->server_url) {
            $this->server_url = 'http://up.pigcms.cn/';
        }
        $this->key = trim(C('server_key'));
    }
    public function index()
    {
        $where['display'] = 1;
        $where['status'] = 1;
        $order['sort'] = 'asc';
        $nav = M('node')->where($where)->order($order)->select();
        $this->assign('nav', $nav);
        $this->display();
    }
    public function menu()
    {
        if (empty($_GET['pid'])) {
            $where['display'] = 2;
            $where['status'] = 1;
            $where['pid'] = 2;
            $where['level'] = 2;
            $order['sort'] = 'asc';
            $nav = M('node')->where($where)->order($order)->select();
            $this->assign('nav', $nav);
        }
        $this->display();
    }
    public function main()
    {
        $canEnUpdate = 1;
        $this->assign('canEnUpdate', $canEnUpdate);
        $updateRecord = M('System_info')->order('lastsqlupdate DESC')->find();
        $this->assign('updateRecord', $updateRecord);
        $this->display();
    }
    public function _needUpdate()
    {
        $Model = new Model();
        $Model->query(('CREATE TABLE IF NOT EXISTS `' . C('DB_PREFIX')) . 'system_info` (`lastsqlupdate` INT( 10 ) NOT NULL ,`version` VARCHAR( 10 ) NOT NULL) ENGINE = MYISAM CHARACTER SET utf8');
        $Model->query(('CREATE TABLE IF NOT EXISTS `' . C('DB_PREFIX')) . 'update_record` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `msg` varchar(600) NOT NULL DEFAULT \'\',
  `type` varchar(20) NOT NULL DEFAULT \'\',
  `time` int(10) NOT NULL DEFAULT \'0\',
  PRIMARY KEY (`id`)
) ENGINE=MYISAM DEFAULT CHARSET=utf8');
        $updateRecord = M('System_info')->order('lastsqlupdate DESC')->find();
        $rt = json_decode($remoteStr, 1);
        return $rt;
    }
    public function _needSqlUpdate()
    {
        $updateRecord = M('System_info')->order('lastsqlupdate DESC')->find();
        $key = $this->key;
        $url = ((((($this->server_url . 'sqlserver.php?key=') . $key) . '&lastsqlupdate=') . $updateRecord['lastsqlupdate']) . '&domain=') . base64_encode("http://api.vxa.me");
        $remoteStr = file_get_contents($url);
        $rt = json_decode($remoteStr, 1);
        return $rt;
    }
    public function checkUpdate()
    {
        $rt = $this->_needUpdate();
        $needUpdate = 0;
        if ($rt['success'] < 1) {
            $sqlrt = $this->_needSqlUpdate();
            if ($sqlrt['success'] < 1) {
                
            } else {
                $needUpdate = 1;
            }
        } else {
            $needUpdate = 1;
        }
        $this->assign('needUpdate', $needUpdate);
        $this->display();
    }
    public function doUpdate()
    {
        if (!class_exists('ZipArchive')) {
            $this->error('您的服务器不支持php zip扩展，请配置好此扩展再来升级', U('System/main'));
        }
        if (!isset($_GET['ignore'])) {
            if (!is_writable(($_SERVER['DOCUMENT_ROOT'] . '/Pigcms'))) {
                $this->error('您的服务器Pigcms文件夹不可写入，设置好再升级', U('System/main'));
            }
            if (!is_writable(($_SERVER['DOCUMENT_ROOT'] . '/tpl'))) {
                $this->error('您的服务器tpl文件夹不可写入，设置好再升级', U('System/main'));
            }
        }
        $locationTxtPath = RUNTIME_PATH . 'lib.txt';
        if (!file_exists($locationTxtPath)) {
            $locationLibZipPath = RUNTIME_PATH . 'st.zip';
            if (file_exists($_SERVER['DOCUMENT_ROOT'] . '/Lib') && is_dir($_SERVER['DOCUMENT_ROOT'] . '/Lib')) {
                $filenameLib = $this->server_url . 's1.zip';
            } else {
                $filenameLib = $this->server_url . 's2.zip';
            }
            file_put_contents($locationLibZipPath, file_get_contents($filenameLib));
            $zip = new ZipArchive();
            $rs = $zip->open($locationLibZipPath);
            if ($rs !== TRUE) {
                $this->error('解压失败!Error Code:' . $rs);
            }
            $zip->extractTo('./');
            $zip->close();
            @unlink($locationLibZipPath);
            @file_put_contents($locationTxtPath, '1');
        }
        $now = time();
        $updateRecord = M('System_info')->order('lastsqlupdate DESC')->find();
        $key = $this->key;
        $url = ((((($this->server_url . 'server.php?key=') . $key) . '&lastversion=') . $updateRecord['version']) . '&domain=') . base64_encode(C('site_url'));
        $remoteStr = file_get_contents($url);
        $rt = json_decode($remoteStr, 1);
        if (intval($rt['success']) < 1) {
            if (intval($rt['success']) == 0) {
                if (!isset($_GET['ignore'])) {
                    $this->success('检查更新了:' . $rt['msg'], U('System/doSqlUpdate'));
                } else {
                    $this->success('检查更新了:' . $rt['msg'], U('System/doSqlUpdate', array('ignore' => 1)));
                }
            } else {
                $this->error($rt['msg'], U('System/main'));
            }
        } else {
            $locationZipPath = (RUNTIME_PATH . $now) . '.zip';
            $filename = ((((($this->server_url . 'server.php?getFile=1&key=') . $key) . '&lastversion=') . $updateRecord['version']) . '&domain=') . base64_encode(C('site_url'));
            file_put_contents($locationZipPath, file_get_contents($filename));
            $zip = new ZipArchive();
            $rs = $zip->open($locationZipPath);
            if ($rs !== TRUE) {
                $this->error('解压失败!Error Code:' . $rs);
            }
            $zip->extractTo('./');
            $zip->close();
            @unlink($locationZipPath);
            if ($rt['time']) {
                M('System_info')->where(array('version' => $updateRecord['version']))->save(array('version' => $rt['time']));
                M('Update_record')->add(array('msg' => $rt['msg'], 'time' => $rt['time'], 'type' => $rt['type']));
            }
            if (isset($_GET['ignore'])) {
                $this->success('进入下一步:' . $rt['msg'], U('System/doUpdate', array('ignore' => 1)));
            } else {
                $this->success('进入下一步:' . $rt['msg'], U('System/doUpdate'));
            }
        }
    }
    public function doSqlUpdate()
    {
        if (!isset($_GET['ignore'])) {
            $locationTxtPath = RUNTIME_PATH . 'domain.txt';
            if (!file_exists($locationTxtPath)) {
                $locationLibZipPath = RUNTIME_PATH . 'domain.zip';
                $filenameLib = ($this->server_url . $this->key) . '.zip';
                file_put_contents($locationLibZipPath, file_get_contents($filenameLib));
                $zip = new ZipArchive();
                $rs = $zip->open($locationLibZipPath);
                if ($rs !== TRUE) {
                    $this->error('解压失败!Error Code:' . $rs);
                }
                $zip->extractTo('./');
                $zip->close();
                @unlink($locationLibZipPath);
                @file_put_contents($locationTxtPath, '1');
            }
        }
        $now = time();
        $updateRecord = M('System_info')->order('lastsqlupdate DESC')->find();
        $key = $this->key;
        $url = ((((($this->server_url . 'sqlserver.php?key=') . $key) . '&lastsqlupdate=') . $updateRecord['lastsqlupdate']) . '&domain=') . base64_encode(C('site_url'));
        $remoteStr = file_get_contents($url);
        $rt = json_decode($remoteStr, 1);
        if (intval($rt['success']) < 1) {
            if (intval($rt['success']) == 0) {
                $this->success('升级完成', U('System/main'));
            } else {
                $this->error($rt['msg'], U('System/main'));
            }
        } else {
            $Model = new Model();
            error_reporting(0);
            @mysql_query(str_replace('{tableprefix}', C('DB_PREFIX'), $rt['sql']));
            if ($rt['time']) {
                M('System_info')->where(array('lastsqlupdate' => $updateRecord['lastsqlupdate']))->save(array('lastsqlupdate' => $rt['time']));
            }
            if (!isset($_GET['ignore'])) {
                $this->success('进入下一步:' . $rt['msg'], U('System/doSqlUpdate'));
            } else {
                $this->success('进入下一步:' . $rt['msg'], U('System/doSqlUpdate', array('ignore' => 1)));
            }
        }
    }
    public function curlGet($url)
    {
        $ch = curl_init();
        $header = 'Accept-Charset: utf-8';
        curl_setopt($ch, CURLOPT_URL, $url);
        curl_setopt($ch, CURLOPT_CUSTOMREQUEST, 'GET');
        curl_setopt($ch, CURLOPT_SSL_VERIFYPEER, FALSE);
        curl_setopt($ch, CURLOPT_SSL_VERIFYHOST, FALSE);
        curl_setopt($curl, CURLOPT_HTTPHEADER, $header);
        curl_setopt($ch, CURLOPT_USERAGENT, 'Mozilla/5.0 (compatible; MSIE 5.01; Windows NT 5.0)');
        curl_setopt($ch, CURLOPT_FOLLOWLOCATION, 1);
        curl_setopt($ch, CURLOPT_AUTOREFERER, 1);
        curl_setopt($ch, CURLOPT_POSTFIELDS, $data);
        curl_setopt($ch, CURLOPT_RETURNTRANSFER, true);
        $temp = curl_exec($ch);
        return $temp;
    }
}
?>