<?php

class LinkAction extends UserAction
{
    public $where;
    public $modules;
    public function _initialize()
    {
        parent::_initialize();
        $this->where = array('token' => $this->token);
        $this->modules = array('Home' => '首页', 'Classify' => '网站分类', 'Img' => '图文回复', 'Company' => 'LBS信息', 'Adma' => 'DIY宣传页', 'Photo' => '相册', 'Selfform' => '万能表单', 'Host' => '商家订单', 'Groupon' => '团购', 'Shop' => '商城', 'Dining' => '订餐', 'Wedding' => '婚庆喜帖', 'Vote' => '投票', 'Panorama' => '全景', 'Lottery' => '大转盘', 'Guajiang' => '刮刮卡', 'Coupon' => '优惠券', 'MemberCard' => '会员卡', 'Estate' => '微房产');
    }
    public function insert()
    {
        $modules = $this->modules();
        $this->assign('modules', $modules);
        $this->display();
    }
    public function modules()
    {
        return array(array('module' => 'Home', 'linkcode' => ('{siteUrl}/index.php?g=Wap&m=Index&a=index&token=' . $this->token) . '&wecha_id={wechat_id}', 'name' => '微网站首页', 'sub' => 0, 'canselected' => 1, 'linkurl' => '', 'keyword' => $this->modules['Home'], 'askeyword' => 1), array('module' => 'Classify', 'linkcode' => ('{siteUrl}/index.php?g=Wap&m=Index&a=lists&token=' . $this->token) . '&wecha_id={wechat_id}', 'name' => $this->modules['Classify'], 'sub' => 1, 'canselected' => 0, 'linkurl' => '', 'keyword' => '', 'askeyword' => 0), array('module' => 'Img', 'linkcode' => ('{siteUrl}/index.php?g=Wap&m=Index&a=content&token=' . $this->token) . '&wecha_id={wechat_id}', 'name' => $this->modules['Img'], 'sub' => 1, 'canselected' => 0, 'linkurl' => '', 'keyword' => '', 'askeyword' => 1), array('module' => 'Company', 'linkcode' => ('{siteUrl}/index.php?g=Wap&m=Company&a=map&token=' . $this->token) . '&wecha_id={wechat_id}', 'name' => $this->modules['Company'], 'sub' => 1, 'canselected' => 1, 'linkurl' => '', 'keyword' => '地图', 'askeyword' => 1), array('module' => 'Adma', 'linkcode' => '{siteUrl}/index.php/show/' . $this->token, 'name' => $this->modules['Adma'], 'sub' => 0, 'canselected' => 1, 'linkurl' => '', 'keyword' => '', 'askeyword' => 0), array('module' => 'Photo', 'linkcode' => ('{siteUrl}/index.php?g=Wap&m=Photo&a=index&token=' . $this->token) . '&wecha_id={wechat_id}', 'name' => $this->modules['Photo'], 'sub' => 1, 'canselected' => 1, 'linkurl' => '', 'keyword' => '相册', 'askeyword' => 1), array('module' => 'Selfform', 'linkcode' => ('{siteUrl}/index.php?g=Wap&m=Selfform&a=index&token=' . $this->token) . '&wecha_id={wechat_id}', 'name' => $this->modules['Selfform'], 'sub' => 1, 'canselected' => 0, 'linkurl' => '', 'keyword' => '', 'askeyword' => 1), array('module' => 'Host', 'linkcode' => ('{siteUrl}/index.php?g=Wap&m=Host&a=detail&token=' . $this->token) . '&wecha_id={wechat_id}', 'name' => $this->modules['Host'], 'sub' => 1, 'canselected' => 0, 'linkurl' => '', 'keyword' => '', 'askeyword' => 1), array('module' => 'Groupon', 'linkcode' => ('{siteUrl}/index.php?g=Wap&m=Groupon&a=grouponIndex&token=' . $this->token) . '&wecha_id={wechat_id}', 'name' => $this->modules['Groupon'], 'sub' => 0, 'canselected' => 1, 'linkurl' => '', 'keyword' => '团购', 'askeyword' => 1), array('module' => 'Shop', 'linkcode' => ('{siteUrl}/index.php?g=Wap&m=Product&a=index&token=' . $this->token) . '&wecha_id={wechat_id}', 'name' => $this->modules['Shop'], 'sub' => 0, 'canselected' => 1, 'linkurl' => '', 'keyword' => '商城', 'askeyword' => 1), array('module' => 'Dining', 'linkcode' => ('{siteUrl}/index.php?g=Wap&m=Product&a=dining&dining=1&token=' . $this->token) . '&wecha_id={wechat_id}', 'name' => $this->modules['Dining'], 'sub' => 0, 'canselected' => 1, 'linkurl' => '', 'keyword' => '订餐', 'askeyword' => 1), array('module' => 'Wedding', 'linkcode' => ('{siteUrl}/index.php?g=Wap&m=Wedding&a=index&token=' . $this->token) . '&wecha_id={wechat_id}', 'name' => $this->modules['Wedding'], 'sub' => 1, 'canselected' => 0, 'linkurl' => '', 'keyword' => '', 'askeyword' => 1), array('module' => 'Vote', 'linkcode' => ('{siteUrl}/index.php?g=Wap&m=Vote&a=index&token=' . $this->token) . '&wecha_id={wechat_id}', 'name' => $this->modules['Vote'], 'sub' => 1, 'canselected' => 0, 'linkurl' => '', 'keyword' => '', 'askeyword' => 1), array('module' => 'Panorama', 'linkcode' => ('{siteUrl}/index.php?g=Wap&m=Panorama&a=index&token=' . $this->token) . '&wecha_id={wechat_id}', 'name' => $this->modules['Panorama'], 'sub' => 1, 'canselected' => 1, 'linkurl' => '', 'keyword' => $this->modules['Panorama'], 'askeyword' => 1), array('module' => 'Lottery', 'linkcode' => '', 'name' => $this->modules['Lottery'], 'sub' => 1, 'canselected' => 0, 'linkurl' => '', 'keyword' => '', 'askeyword' => 1), array('module' => 'Guajiang', 'linkcode' => '', 'name' => $this->modules['Guajiang'], 'sub' => 1, 'canselected' => 0, 'linkurl' => '', 'keyword' => '', 'askeyword' => 1), array('module' => 'Coupon', 'linkcode' => '', 'name' => $this->modules['Coupon'], 'sub' => 1, 'canselected' => 0, 'linkurl' => '', 'keyword' => '', 'askeyword' => 1), array('module' => 'MemberCard', 'linkcode' => ('{siteUrl}/index.php?g=Wap&m=Card&a=index&token=' . $this->token) . '&wecha_id={wechat_id}', 'name' => $this->modules['MemberCard'], 'sub' => 0, 'canselected' => 1, 'linkurl' => '', 'keyword' => '会员卡', 'askeyword' => 1), array('module' => 'Estate', 'linkcode' => ('{siteUrl}/index.php?g=Wap&m=Estate&a=index&token=' . $this->token) . '&wecha_id={wechat_id}&sgssz=mp.weixin.qq.com', 'name' => $this->modules['Estate'], 'sub' => 1, 'canselected' => 1, 'linkurl' => '', 'keyword' => '微房产', 'askeyword' => 1));
    }
    public function Classify()
    {
        $this->assign('moduleName', $this->modules['Classify']);
        $db = M('Classify');
        $where = $this->where;
        $count = $db->where($where)->count();
        $Page = new Page($count, 5);
        $show = $Page->show();
        $list = $db->where($where)->limit(($Page->firstRow . ',') . $Page->listRows)->order('id DESC')->select();
        $items = array();
        if ($list) {
            foreach ($list as $item) {
                array_push($items, array('id' => $item['id'], 'name' => $item['name'], 'linkcode' => (('{siteUrl}/index.php?g=Wap&m=Index&a=lists&token=' . $this->token) . '&wecha_id={wechat_id}&classid=') . $item['id'], 'linkurl' => '', 'keyword' => $item['keyword']));
            }
        }
        $this->assign('list', $items);
        $this->assign('page', $show);
        $this->display('detail');
    }
    public function Img()
    {
        $this->assign('moduleName', $this->modules['Img']);
        $db = M('Img');
        $where = $this->where;
        $count = $db->where($where)->count();
        $Page = new Page($count, 5);
        $show = $Page->show();
        $list = $db->where($where)->limit(($Page->firstRow . ',') . $Page->listRows)->order('id DESC')->select();
        $items = array();
        if ($list) {
            foreach ($list as $item) {
                array_push($items, array('id' => $item['id'], 'name' => $item['title'], 'linkcode' => (('{siteUrl}/index.php?g=Wap&m=Index&a=content&token=' . $this->token) . '&wecha_id={wechat_id}&id=') . $item['id'], 'linkurl' => '', 'keyword' => $item['keyword']));
            }
        }
        $this->assign('list', $items);
        $this->assign('page', $show);
        $this->display('detail');
    }
    public function Company()
    {
        $this->assign('moduleName', $this->modules['Company']);
        $db = M('Company');
        $where = $this->where;
        $count = $db->where($where)->count();
        $Page = new Page($count, 5);
        $show = $Page->show();
        $list = $db->where($where)->limit(($Page->firstRow . ',') . $Page->listRows)->order('id DESC')->select();
        $items = array();
        if ($list) {
            foreach ($list as $item) {
                array_push($items, array('id' => $item['id'], 'name' => $item['name'], 'linkcode' => (('{siteUrl}/index.php?g=Wap&m=Company&a=map&token=' . $this->token) . '&wecha_id={wechat_id}&companyid=') . $item['id'], 'linkurl' => '', 'keyword' => '地图'));
            }
        }
        $this->assign('list', $items);
        $this->assign('page', $show);
        $this->display('detail');
    }
    public function Photo()
    {
        $this->assign('moduleName', $this->modules['Photo']);
        $db = M('Photo');
        $where = $this->where;
        $count = $db->where($where)->count();
        $Page = new Page($count, 5);
        $show = $Page->show();
        $list = $db->where($where)->limit(($Page->firstRow . ',') . $Page->listRows)->order('id DESC')->select();
        $items = array();
        if ($list) {
            foreach ($list as $item) {
                array_push($items, array('id' => $item['id'], 'name' => $item['title'], 'linkcode' => (('{siteUrl}/index.php?g=Wap&m=Photo&a=plist&token=' . $this->token) . '&wecha_id={wechat_id}&id=') . $item['id'], 'linkurl' => '', 'keyword' => $item['keyword']));
            }
        }
        $this->assign('list', $items);
        $this->assign('page', $show);
        $this->display('detail');
    }
    public function Selfform()
    {
        $this->assign('moduleName', $this->modules['Selfform']);
        $db = M('Selfform');
        $where = $this->where;
        $count = $db->where($where)->count();
        $Page = new Page($count, 5);
        $show = $Page->show();
        $list = $db->where($where)->limit(($Page->firstRow . ',') . $Page->listRows)->order('id DESC')->select();
        $items = array();
        if ($list) {
            foreach ($list as $item) {
                array_push($items, array('id' => $item['id'], 'name' => $item['name'], 'linkcode' => (('{siteUrl}/index.php?g=Wap&m=Selfform&a=index&token=' . $this->token) . '&wecha_id={wechat_id}&id=') . $item['id'], 'linkurl' => '', 'keyword' => $item['keyword']));
            }
        }
        $this->assign('list', $items);
        $this->assign('page', $show);
        $this->display('detail');
    }
    public function Host()
    {
        $moduleName = 'Host';
        $this->assign('moduleName', $this->modules[$moduleName]);
        $db = M($moduleName);
        $where = $this->where;
        $count = $db->where($where)->count();
        $Page = new Page($count, 5);
        $show = $Page->show();
        $list = $db->where($where)->limit(($Page->firstRow . ',') . $Page->listRows)->order('id DESC')->select();
        $items = array();
        if ($list) {
            foreach ($list as $item) {
                array_push($items, array('id' => $item['id'], 'name' => $item['name'], 'linkcode' => (('{siteUrl}/index.php?g=Wap&m=Host&a=index&token=' . $this->token) . '&wecha_id={wechat_id}&hid=') . $item['id'], 'linkurl' => '', 'keyword' => $item['keyword']));
            }
        }
        $this->assign('list', $items);
        $this->assign('page', $show);
        $this->display('detail');
    }
    public function Panorama()
    {
        $this->assign('moduleName', $this->modules['Panorama']);
        $db = M('Panorama');
        $where = $this->where;
        $count = $db->where($where)->count();
        $Page = new Page($count, 5);
        $show = $Page->show();
        $list = $db->where($where)->limit(($Page->firstRow . ',') . $Page->listRows)->order('time DESC')->select();
        $items = array();
        if ($list) {
            foreach ($list as $item) {
                array_push($items, array('id' => $item['id'], 'name' => $item['name'], 'linkcode' => (('{siteUrl}/index.php?g=Wap&m=Panorama&a=item&token=' . $this->token) . '&wecha_id={wechat_id}&id=') . $item['id'], 'linkurl' => '', 'keyword' => $item['keyword']));
            }
        }
        $this->assign('list', $items);
        $this->assign('page', $show);
        $this->display('detail');
    }
    public function Wedding()
    {
        $moduleName = 'Wedding';
        $this->assign('moduleName', $this->modules[$moduleName]);
        $db = M($moduleName);
        $where = $this->where;
        $count = $db->where($where)->count();
        $Page = new Page($count, 5);
        $show = $Page->show();
        $list = $db->where($where)->limit(($Page->firstRow . ',') . $Page->listRows)->order('id DESC')->select();
        $items = array();
        if ($list) {
            foreach ($list as $item) {
                array_push($items, array('id' => $item['id'], 'name' => $item['title'], 'linkcode' => (('{siteUrl}/index.php?g=Wap&m=Wedding&a=index&token=' . $this->token) . '&wecha_id={wechat_id}&id=') . $item['id'], 'linkurl' => '', 'keyword' => $item['keyword']));
            }
        }
        $this->assign('list', $items);
        $this->assign('page', $show);
        $this->display('detail');
    }
    public function Lottery()
    {
        $moduleName = 'Lottery';
        $this->assign('moduleName', $this->modules[$moduleName]);
        $db = M($moduleName);
        $where = $this->where;
        $where['type'] = 1;
        $count = $db->where($where)->count();
        $Page = new Page($count, 5);
        $show = $Page->show();
        $list = $db->where($where)->limit(($Page->firstRow . ',') . $Page->listRows)->order('id DESC')->select();
        $items = array();
        if ($list) {
            foreach ($list as $item) {
                array_push($items, array('id' => $item['id'], 'name' => $item['title'], 'linkcode' => (('{siteUrl}/index.php?g=Wap&m=Lottery&a=index&token=' . $this->token) . '&wecha_id={wechat_id}&id=') . $item['id'], 'linkurl' => '', 'keyword' => $item['keyword']));
            }
        }
        $this->assign('list', $items);
        $this->assign('page', $show);
        $this->display('detail');
    }
    public function Guajiang()
    {
        $moduleName = 'Guajiang';
        $this->assign('moduleName', $this->modules[$moduleName]);
        $db = M('Lottery');
        $where = $this->where;
        $where['type'] = 2;
        $count = $db->where($where)->count();
        $Page = new Page($count, 5);
        $show = $Page->show();
        $list = $db->where($where)->limit(($Page->firstRow . ',') . $Page->listRows)->order('id DESC')->select();
        $items = array();
        if ($list) {
            foreach ($list as $item) {
                array_push($items, array('id' => $item['id'], 'name' => $item['title'], 'linkcode' => (('{siteUrl}/index.php?g=Wap&m=Guajiang&a=index&token=' . $this->token) . '&wecha_id={wechat_id}&id=') . $item['id'], 'linkurl' => '', 'keyword' => $item['keyword']));
            }
        }
        $this->assign('list', $items);
        $this->assign('page', $show);
        $this->display('detail');
    }
    public function Coupon()
    {
        $moduleName = 'Coupon';
        $this->assign('moduleName', $this->modules[$moduleName]);
        $db = M('Lottery');
        $where = $this->where;
        $where['type'] = 3;
        $count = $db->where($where)->count();
        $Page = new Page($count, 5);
        $show = $Page->show();
        $list = $db->where($where)->limit(($Page->firstRow . ',') . $Page->listRows)->order('id DESC')->select();
        $items = array();
        if ($list) {
            foreach ($list as $item) {
                array_push($items, array('id' => $item['id'], 'name' => $item['title'], 'linkcode' => (('{siteUrl}/index.php?g=Wap&m=Coupon&a=index&token=' . $this->token) . '&wecha_id={wechat_id}&id=') . $item['id'], 'linkurl' => '', 'keyword' => $item['keyword']));
            }
        }
        $this->assign('list', $items);
        $this->assign('page', $show);
        $this->display('detail');
    }
    public function Vote()
    {
        $moduleName = 'Vote';
        $this->assign('moduleName', $this->modules[$moduleName]);
        $db = M($moduleName);
        $where = $this->where;
        $count = $db->where($where)->count();
        $Page = new Page($count, 5);
        $show = $Page->show();
        $list = $db->where($where)->limit(($Page->firstRow . ',') . $Page->listRows)->order('id DESC')->select();
        $items = array();
        if ($list) {
            foreach ($list as $item) {
                array_push($items, array('id' => $item['id'], 'name' => $item['title'], 'linkcode' => (('{siteUrl}/index.php?g=Wap&m=Vote&a=index&token=' . $this->token) . '&wecha_id={wechat_id}&id=') . $item['id'], 'linkurl' => '', 'keyword' => $item['keyword']));
            }
        }
        $this->assign('list', $items);
        $this->assign('page', $show);
        $this->display('detail');
    }
    public function Estate()
    {
        $moduleName = 'Estate';
        $this->assign('moduleName', $this->modules[$moduleName]);
        $items = array();
        array_push($items, array('id' => 1, 'name' => '楼盘介绍', 'linkcode' => ('{siteUrl}/index.php?g=Wap&m=Estate&a=index&token=' . $this->token) . '&wecha_id={wechat_id}&sgssz=mp.weixin.qq.com', 'linkurl' => '', 'keyword' => '微房产'));
        array_push($items, array('id' => 2, 'name' => '楼盘相册', 'linkcode' => ('{siteUrl}/index.php?g=Wap&m=Estate&a=album&token=' . $this->token) . '&wecha_id={wechat_id}&sgssz=mp.weixin.qq.com', 'linkurl' => '', 'keyword' => '微房产'));
        array_push($items, array('id' => 3, 'name' => '户型全景', 'linkcode' => ('{siteUrl}/index.php?g=Wap&m=Estate&a=housetype&token=' . $this->token) . '&wecha_id={wechat_id}&sgssz=mp.weixin.qq.com', 'linkurl' => '', 'keyword' => '微房产'));
        array_push($items, array('id' => 4, 'name' => '专家点评', 'linkcode' => ('{siteUrl}/index.php?g=Wap&m=Estate&a=impress&token=' . $this->token) . '&wecha_id={wechat_id}&sgssz=mp.weixin.qq.com', 'linkurl' => '', 'keyword' => '微房产'));
        $Estate = M('Estate')->where(array('token' => $this->token))->find();
        $rt = M('Reservation')->where(array('id' => $Estate['res_id']))->find();
        array_push($items, array('id' => 5, 'name' => '看房预约', 'linkcode' => ((('{siteUrl}/index.php?g=Wap&m=Reservation&a=index&rid=' . $Estate['res_id']) . '&token=') . $this->token) . '&wecha_id={wechat_id}&sgssz=mp.weixin.qq.com', 'linkurl' => '', 'keyword' => $rt['keyword']));
        $this->assign('list', $items);
        $this->display('detail');
    }
}
?>