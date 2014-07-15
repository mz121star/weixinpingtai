<?php
class LotteryAction extends LotteryBaseAction{
	public function _initialize() {
		parent::_initialize();
		$function=M('Function')->where(array('funname'=>'lottery'))->find();
		if (intval($this->user['gid'])<intval($function['gid'])){
			$this->error('您还开启该模块的使用权,请到功能模块中添加',U('Function/index',array('token'=>$this->token)));
		}
	}
	public function cheat(){
		parent::cheat();
		$this->display();
	}
	public function index(){
		parent::index(1);
		$this->display();
	
	}
	public function sn(){
		parent::sn(1);
		$this->display();
	}
	public function add(){
		parent::add(1);
	}
	
	public function edit(){
		parent::edit(1);
	}
}


?>