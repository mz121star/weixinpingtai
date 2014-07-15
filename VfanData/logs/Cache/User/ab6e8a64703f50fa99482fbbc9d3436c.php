<?php if (!defined('THINK_PATH')) exit();?><!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd"><html xmlns="http://www.w3.org/1999/xhtml"><head><meta http-equiv="Content-Type" content="text/html; charset=utf-8" /><title><?php echo C('site_title'); echo C('site_name');?></title><meta name="keywords" content="<?php echo C('keyword');?>" /><meta name="description" content="<?php echo C('content');?>" /><meta http-equiv="MSThemeCompatible" content="Yes" /><script>var SITEURL='';</script><link rel="stylesheet" type="text/css" href="<?php echo RES;?>/css/style_2_common.css?BPm" /><script src="<?php echo RES;?>/js/common.js" type="text/javascript"></script></head><body id="nv_member" class="pg_CURMODULE"><div class="topbg"><div class="top"><div class="toplink"><style>
/*header*/
.header{ width:1170px; margin:0px auto; height:90px;}
.header-left{height:90px; float:left; overflow:hidden;min-width:422px;}
.header-left a.logoh{ float:left; display:block;}
.header dl{float:left;margin-left:15px; color:#777777;  margin-top:30px;}
.header dd{padding-left:15px; border-left:1px solid #ccc;}
.header .logo-text{line-height:26px; font-size:16px; font-family:微软雅黑;}
.header .tel-whole{font-weight: 600;font-size:14px;}
/*.header-left:hover .logo-text{ color:#396;}*/

/*导航栏*/
.navbar{ float:right;  height:100%;}
.navbar ul li{ float:left; width:85px; height:90px; text-align:center; line-height:90px; background:url(../images/xt_06.png) right center no-repeat; position:relative; overflow:hidden;}
.navbar ul li div.animal{ width:85px; height:90px; background:#35af28; position:relative; top:-100%; z-index:0; }
.navbar ul li a{ color:#333; font-size:16px; width:85px; height:90px; position:absolute; top:0; left:0;	 z-index:999;}
.navbar ul li.nav-none{ background:none;}
.navbar ul li.nav-style a{ color:#FFF;}
.login{ display:block; margin-top:33px; float:right; font-size:16px; margin-left:20px}
a.a_upload,a.a_choose{border:1px solid #3d810c;box-shadow:0 1px #CCCCCC;-moz-box-shadow:0 1px #CCCCCC;-webkit-box-shadow:0 1px #CCCCCC;cursor:pointer;display:inline-block;text-align:center;vertical-align:bottom;overflow:visible;border-radius:3px;-moz-border-radius:3px;-webkit-border-radius:3px;vertical-align:middle;background-color:#f1f1f1;background-image: -webkit-linear-gradient(bottom, #CCC 0%, #E5E5E5 3%, #FFF 97%, #FFF 100%); background-image: -moz-linear-gradient(bottom, #CCC 0%, #E5E5E5 3%, #FFF 97%, #FFF 100%); background-image: -ms-linear-gradient(bottom, #CCC 0%, #E5E5E5 3%, #FFF 97%, #FFF 100%); color:#000;border:1px solid #AAA;padding:2px 8px 2px 8px;text-shadow: 0 1px #FFFFFF;font-size: 14px;line-height: 1.5;
}
</style><body id="nv_member" class="pg_CURMODULE"><div class="header"><div class="header-left"><a href="/" class="logoh"><img src="<?php echo RES;?>/images/logo-vfancms.png" /></a><dl><dd class="logo-text">最专业的企业微信营销平台</dd><dd class="tel-whole">全国招商热线：400-XXX-XXXX</dd></dl></div><div class="login"><?php if($_SESSION[uid]==false): ?>你好&nbsp;&nbsp;<span class="f_red">游客</span>&nbsp;&nbsp;
			<a href="<?php echo U('Index/login');?>">登录</a>&nbsp;&nbsp;|&nbsp;&nbsp;
			<a href="<?php echo U('Index/login');?>">注册</a><?php else: ?>
			你好，<a href="/#" hidefocus="true"  ><span style="color:red"><?php echo (session('uname')); ?></span></a>（uid:<?php echo (session('uid')); ?>）
			<a href="<?php echo U('Admin/Admin/logout');?>" >退出</a><?php endif; ?></div><div class="navbar"><ul><li><a href="/">首页 </a></li><li><a href="<?php echo U('Home/Index/about');?>">关于我们</a></li><li><a href="<?php echo U('User/Index/index');?>">管理中心</a></li><li><a href="<?php echo U('Home/Index/help');?>">帮助中心</a></li><li><a href="http://wpa.qq.com/msgrd?v=3&uin=<?php echo C('site_qq');?>&site=qq&menu=yes" target="_blank">在线咨询</a></li></ul></div></div><div id="aaa"></div><div id="wp" class="wp"><link href="<?php echo RES;?>/css/style.css?id=100" rel="stylesheet" type="text/css" /><!--中间内容--><script src="<?php echo STATICS;?>/jquery-1.4.2.min.js" type="text/javascript"></script><div class="contentmanage"><div class="developer"><div class="appTitle normalTitle2"><div class="vipuser"><div class="logo"><img src="<?php echo ($wecha["headerpic"]); ?>" width="100" height="100"></div><div id="nickname"><strong><?php echo ($wecha["wxname"]); ?></strong><a href="#" target="_blank" class="vipimg vip-icon<?php echo $userinfo['id']-1; ?>" title=""></a></div><div id="weixinid">微信号:<?php echo ($wecha["weixin"]); ?></div></div><div class="accountInfo"><table class="vipInfo" width="100%" border="0" cellpadding="0" cellspacing="0"><tr><td><strong>VIP有效期：</strong><?php if($_SESSION['viptime'] != 0): echo (date("Y-m-d",$thisUser["viptime"])); else: ?>vip0不限时间<?php endif; ?></td><td><strong>图文自定义：</strong><?php echo ($thisUser["diynum"]); ?>/<?php echo ($userinfo["diynum"]); ?></td><td><strong>活动创建数：</strong><?php echo ($thisUser["activitynum"]); ?>/<?php echo ($userinfo["activitynum"]); ?></td><td><strong>请求数：</strong><?php echo ($thisUser["connectnum"]); ?>/<?php echo ($userinfo["connectnum"]); ?></td></tr><tr><td><strong>请求数剩余：</strong><?php echo ($userinfo['connectnum']-$_SESSION['connectnum']); ?></td><td><strong>已使用：</strong><?php echo $_SESSION['diynum']; ?></td><td><strong>当月赠送请求数：</strong><?php echo ($userinfo["connectnum"]); ?></td><td><strong>当月剩余请求数：</strong><?php echo $userinfo['connectnum']-$_SESSION['connectnum']; ?></td></tr></table></div><div class="clr"></div></div><!--左侧功能菜单--><style type="text/css">
#sideBar{
border-right: 0px solid #D3D3D3 !important;
float: left;
padding: 0 0 10px 0;
width: 170px;
}
.tableContent {
background: none repeat scroll 0 0 #f5f6f7;
padding: 0;
}
.tableContent .content {
border-left: 1px solid #D7DDE6 !important;
}
ul#menu, ul#menu ul {
  list-style-type:none;
  margin: 0;
  padding: 0;
}

ul#menu a {
  display: block;
  text-decoration: none;	
}

ul#menu li {
  margin: 1px;
}
ul#menu li ul li{
  margin: 1px 0;
}
ul#menu li a {
  background: #EBEEF1;
  color: #464D6A;	
  padding: 0.5em;
}
ul#menu li .nav-header{
font-size:14px;
border-bottom: 1px solid #D7DDE6;
}
ul#menu li .nav-header:hover {
  background: #DDE4EB;
}

ul#menu li ul li a {
  background: #FCFCFC;
  color: #8288A4;
  padding-left: 20px;
}
ul#menu li ul li:last-child {
    border-bottom: 1px solid #D7DDE6;
}
ul#menu li ul li a:hover {
  background: #fff;
  border-left: 5px #4A98E0 solid;
 
}
ul#menu li.selected a{
  background: #fff;
  border-left: 5px #4A98E0 solid;
  padding-left: 15px;
  color: #4A98E0;
}
.code { border: 1px solid #ccc; list-style-type: decimal-leading-zero; padding: 5px; margin: 0; }
.code code { display: block; padding: 3px; margin-bottom: 0; }
.code li { background: #ddd; border: 1px solid #ccc; margin: 0 0 2px 2.2em; }
.indent1 { padding-left: 1em; }
.indent2 { padding-left: 2em; }
.tableContent .content{min-height: 1328px;}
</style><div class="tableContent"><!--左侧功能菜单--><div  class="sideBar" id="sideBar"><div class="catalogList"><ul id="menu"><a class="nav-header">基础设置</a><ul class="ckit"><li <?php if(MODULE_NAME == 'Function'): ?>class="selected" <?php else: ?> class="subCatalogList"<?php endif; ?>><a href="<?php echo U('Function/index',array('token'=>$token,'id'=>session('wxid')));?>">功能管理</a></li><li <?php if(MODULE_NAME == 'Areply'): ?>class="selected" <?php else: ?>class="subCatalogList"<?php endif; ?>><a href="<?php echo U('Areply/index',array('token'=>$token));?>">关注时回复与帮助</a></li><li <?php if(MODULE_NAME == 'Text'): ?>class="selected" <?php else: ?>class="subCatalogList"<?php endif; ?>><a href="<?php echo U('Text/index',array('token'=>$token));?>">微信－文本回复</a></li><li <?php if(MODULE_NAME == 'Img'): ?>class="selected" <?php else: ?> class="subCatalogList"<?php endif; ?>><a href="<?php echo U('Img/index',array('token'=>$token));?>">微信－图文回复</a></li><li   <?php if(MODULE_NAME == 'Voiceresponse'): ?>class="selected" <?php else: ?>class="subCatalogList"<?php endif; ?>><a href="<?php echo U('Voiceresponse/index',array('token'=>$token));?>">微信－语音回复</a></li><li   <?php if(MODULE_NAME == 'Company'): ?>class="selected" <?php else: ?>class="subCatalogList"<?php endif; ?>><a href="<?php echo U('Company/index',array('token'=>$token));?>">自定义LBS回复</a><span class="new"></span></li><li <?php if(MODULE_NAME == 'Other'): ?>class="selected" <?php else: ?>class="subCatalogList"<?php endif; ?>><a href="<?php echo U('Other/index',array('token'=>$token));?>">回答不上来的配置</a><span class="new"></span></li></ul><a class="nav-header">3G网站设置</a><ul class="ckit"><li <?php if(ACTION_NAME == 'set'): ?>class="selected" <?php else: ?>class="subCatalogList"<?php endif; ?>><a href="<?php echo U('Home/set',array('token'=>$token));?>">首页回复配置</a></li><li <?php if(MODULE_NAME == 'Classify'): ?>class="selected" <?php else: ?>class="subCatalogList"<?php endif; ?>><a href="<?php echo U('Classify/index',array('token'=>$token));?>">分类管理</a></li><li <?php if(ACTION_NAME == 'plugmenu'): ?>class="selected" <?php else: ?>class="subCatalogList"<?php endif; ?>><a href="<?php echo U('Home/plugmenu',array('token'=>$token));?>">一键拨号与版权</a><span class="new"></span></li><li   <?php if(MODULE_NAME == 'Tmpls'): ?>class="selected" <?php else: ?>class="subCatalogList"<?php endif; ?>><a href="<?php echo U('Tmpls/index',array('token'=>$token));?>">模板管理</a><span class="new"></span></li><?php
 if (is_dir($_SERVER['DOCUMENT_ROOT'].'/cms')&&!strpos($_SERVER['HTTP_HOST'],'pigcms')){ echo '<li class="subCatalogList"><a href="/cms/manage/index.php">高级模板</a><span class="new"></span></li>'; } ?><li   <?php if(MODULE_NAME == 'Flash'): ?>class="selected" <?php else: ?>class="subCatalogList"<?php endif; ?>><a href="<?php echo U('Flash/index',array('token'=>$token));?>">首页幻灯片<span class="new"></span></a></li><li   <?php if(MODULE_NAME == 'Diymen'): ?>class="selected" <?php else: ?>class="subCatalogList"<?php endif; ?>><a href="<?php echo U('Diymen/index',array('token'=>$token));?>">自定义菜单<span class="new"></span></a></li></ul><a class="nav-header">行业应用</a><ul class="ckit"><li   <?php if(ACTION_NAME == 'orders'): ?>class="selected"<?php else: ?>class="subCatalogList"<?php endif; ?> ><a href="<?php echo U('Product/orders',array('token'=>$token,'dining'=>1));?>">无线订餐（网络打印）</a><span class="new"></span></li><li   <?php if(MODULE_NAME == 'Panorama'): ?>class="selected" <?php else: ?>class="subCatalogList"<?php endif; ?>><a href="<?php echo U('Panorama/index',array('token'=>$token));?>">360°全景<span class="new"></span></a></li><li  
		<?php if(MODULE_NAME == 'Wedding'): ?>class="selected" <?php else: ?>class="subCatalogList"<?php endif; ?>><a href="<?php echo U('Wedding/index',array('token'=>$token));?>">婚庆喜帖<span class="new"></span></a></li><li  
		<?php if(MODULE_NAME == 'Vote'): ?>class="selected" <?php else: ?>class="subCatalogList"<?php endif; ?>><a href="<?php echo U('Vote/index',array('token'=>$token));?>">3G微投票<span class="new"></span></a></li><li   <?php if(ACTION_NAME == 'Estate'): ?>class="selected" <?php else: ?>class="subCatalogList"<?php endif; ?> ><a href="<?php echo U('Estate/index',array('token'=>$token));?>">楼盘房产</a><span class="new"></span></li><li   <?php if(MODULE_NAME == 'Selfform'): ?>class="selected"<?php else: ?>class="subCatalogList"<?php endif; ?>><a href="<?php echo U('Selfform/index',array('token'=>$token));?>">万能表单,报名,留言,预约</a></li><li   <?php if(MODULE_NAME == 'Host'): ?>class="selected"<?php else: ?>class="subCatalogList"<?php endif; ?> ><a href="<?php echo U('Host/index',array('token'=>$token));?>">通用订单(酒店,KTV)</a><span class="new"></span></li></ul><a class="nav-header">电商系统</a><ul class="ckit" style="display:none"><li   <?php if((MODULE_NAME == 'Product') and (ACTION_NAME == 'index')): ?>class="selected"<?php else: ?>class="subCatalogList"<?php endif; ?> ><a href="<?php echo U('Groupon/index',array('token'=>$token));?>">微信团购系统</a><span class="new"></span></li><li   <?php if((MODULE_NAME == 'Product') and (ACTION_NAME == 'index')): ?>class="selected"<?php else: ?>class="subCatalogList"<?php endif; ?> ><a href="<?php echo U('Product/index',array('token'=>$token));?>">微信商城系统</a><span class="new"></span></li><li   <?php if(MODULE_NAME == 'Alipay_config'): ?>class="selected" <?php else: ?>class="subCatalogList"<?php endif; ?>><a href="<?php echo U('Alipay_config/index',array('token'=>$token));?>">支付宝设置</a></li><li   <?php if(MODULE_NAME == 'Taobao'): ?>class="selected" <?php else: ?>class="subCatalogList"<?php endif; ?>><a href="<?php echo U('Taobao/index',array('token'=>$token));?>">淘宝天猫店铺配置</a></li><li   <?php if(MODULE_NAME == 'apilist'): ?>class="selected"<?php else: ?>class="subCatalogList"<?php endif; ?> ><a href="<?php echo U('Api/index',array('token'=>$token));?>">融合第三方</a><span class="new"></span></li><li   <?php if(MODULE_NAME == 'Adma'): ?>class="selected"<?php else: ?>class="subCatalogList"<?php endif; ?> ><a href="<?php echo U('Adma/index',array('token'=>$token));?>">DIY宣传页</a></li><li   <?php if(MODULE_NAME == 'Photo'): ?>class="selected"<?php else: ?>class="subCatalogList"<?php endif; ?> ><a href="<?php echo U('Photo/index',array('token'=>$token));?>">3G图集(相册)</a><span class="new"></span></li></ul><a class="nav-header">微用户管理开发中</a><ul class="ckit" style="display:none"><li   <?php if(MODULE_NAME == 'wechat_grout'): ?>class="selected" <?php else: ?>class="subCatalogList"<?php endif; ?> ><a href="javascript:alert('开发中，感谢关注')">分组管理－新增</a><span class="new"></span></li><li   <?php if(MODULE_NAME == 'wechat_grout'): ?>class="selected" <?php else: ?>class="subCatalogList"<?php endif; ?> ><a href="javascript:alert('开发中，感谢关注')">微信群发－新增</a><span class="new"></span></li><li   <?php if(MODULE_NAME == 'wechat_grout'): ?>class="selected" <?php else: ?>class="subCatalogList"<?php endif; ?> ><a href="javascript:alert('开发中，感谢关注')">人工客服－新增</a><span class="new"></span></li></ul><a class="nav-header">推广活动</a><ul class="ckit" style="display:none"><li   <?php if(MODULE_NAME == 'Lottery'): ?>class="selected" <?php else: ?>class="subCatalogList"<?php endif; ?> ><a href="<?php echo U('Lottery/index',array('token'=>$token));?>">幸运大转盘</a><span class="new"></span></li><li   <?php if(MODULE_NAME == 'Coupon'): ?>class="selected" <?php else: ?>class="subCatalogList"<?php endif; ?> ><a href="<?php echo U('Coupon/index',array('token'=>$token));?>">优惠券</a></li><li   <?php if(MODULE_NAME == 'Guajiang'): ?>class="selected" <?php else: ?>class="subCatalogList"<?php endif; ?> ><a href="<?php echo U('Guajiang/index',array('token'=>$token));?>">刮刮卡</a></li></ul><a class="nav-header">会员卡</a><ul class="ckit" style="display:none"><li <?php if(MODULE_NAME == 'Member_card'): ?>class="selected" <?php else: ?>class="subCatalogList"<?php endif; ?>><a href="<?php echo U('Member_card/index',array('token'=>$token));?>">会员卡</a></li><li <?php if((MODULE_NAME == 'Member_card') and (ACTION_NAME == 'replyInfoSet')): ?>class="selected" <?php else: ?>class="subCatalogList"<?php endif; ?>><a href="<?php echo U('Member_card/replyInfoSet',array('token'=>$token));?>">回复设置</a></li></ul><a class="nav-header">统计分析</a><ul class="ckit" style="display:none"><li   <?php if(MODULE_NAME == 'index'): ?>class="selected" <?php else: ?>class="subCatalogList"<?php endif; ?> ><a href="<?php echo U('Requerydata/index',array('token'=>$token));?>">请求数详情</a></li></ul></ul></div></div><style>
a.nav-header{background:url(/tpl/static/images/arrow_click.png) center right no-repeat;cursor:pointer}
a.nav-header-current{background:url(/tpl/static/images/arrow_unclick.png) center right no-repeat;}
</style><script type="text/javascript">
$(document).ready(function(){
	$(".nav-header").mouseover(function(){
		$(this).css('background-color','#126CA9');
	}).mouseout(function(){
		$(this).css('background-color','#2f8bc9');
	}).click(function(){
		$(this).toggleClass('nav-header-current');
		$(this).next('.ckit').slideToggle();
	})
});
</script><script src="/tpl/static/artDialog/jquery.artDialog.js?skin=default"></script><script src="/tpl/static/artDialog/plugins/iframeTools.js"></script><script src="<?php echo RES;?>/js/date/WdatePicker.js"></script><form class="form" method="post" action=""  target="_top" enctype="multipart/form-data" ><div class="content"><!--活动开始--><div class="cLineB"><h4>编辑优惠券活动开始内容</h4><a href="javascript:history.go(-1);" class="right btnGrayS vm" style="margin-top:-27px">返回</a></div><div class="msgWrap bgfc"><table class="userinfoArea" style=" margin:0;" border="0" cellspacing="0" cellpadding="0" width="100%"><tbody><tr><th valign="top"><span class="red">*</span>关键词：</th><td><input type="input" class="px" id="keyword" value="<?php echo ($vo["keyword"]); ?>" name="keyword" style="width:400px"><br><span class="red">只能写一个关键词</span>，用户输入此关键词将会触发此活动。</td><td rowspan="7" valign="top"><div style="margin-left:20px"><img id="pic2_src" src="<?php if($vo['starpicurl'] == ''): echo C('site_url');?>/tpl/Wap/default/common/css/guajiang/images/activity-coupon-start.jpg<?php else: echo ($vo["starpicurl"]); endif; ?>" width="373px"><br><input class="px" name="starpicurl" value="<?php if($vo['starpicurl'] == ''): echo C('site_url');?>/tpl/Wap/default/common/css/guajiang/images/activity-coupon-start.jpg<?php else: echo ($vo["starpicurl"]); endif; ?>" onclick="document.getElementById('pic2_src').src=this.value;" style="width:363px;" id="pic2"><br><script src="/tpl/static/upyun.js"></script><a href="###" onclick="upyunPicUpload('pic2',1000,500,'<?php echo ($token); ?>')" class="a_upload">上传</a><a href="###" onclick="viewImg('pic2')">预览</a>&nbsp;活动开始图片
  </div><div style="margin-left:20px"><img id="pic1_src" src="<?php if($vo['zjpic'] == ''): echo C('site_url');?>/tpl/Wap/default/common/css/guajiang/images/activity-coupon-winning.jpg<?php else: echo ($vo["zjpic"]); endif; ?>" width="373px"><br><input class="px" name="zjpic" value="<?php if($vo['zjpic'] == ''): echo C('site_url');?>/tpl/Wap/default/common/css/guajiang/images/activity-coupon-winning.jpg<?php else: echo ($vo["zjpic"]); endif; ?>" onclick="document.getElementById('pic1_src').src=this.value;" style="width:363px;" id="pic1"><br><script src="/tpl/static/upyun.js"></script><a href="###" onclick="upyunPicUpload('pic1',1000,500,'<?php echo ($token); ?>')" class="a_upload">上传</a><a href="###" onclick="viewImg('pic1')">预览</a>&nbsp; 中奖后显示的头部图片
     <br></div></td></tr><tr><th valign="top"><span class="red">*</span>活动名称：</th><td><input type="input" class="px" id="title" value="<?php echo ($vo["title"]); ?>" name="title" style="width:400px"><br>  	请不要多于50字!
  	</td></tr><TR style="display:none"><th valign="top">成功抢到券说明：</th><td><input type="input" class="px" id="sttxtt" value="<?php echo ($vo["sttxt"]); ?>" name="sttxtt" style="width:400px" /><br />  		成功抢到优惠券的提示信息</td></TR><tr><th valign="top"><span class="red">*</span>优惠券介绍：</th><td><textarea class="px" id="sttxt" name="sttxt" style="width:400px; height: 125px;"><?php echo ($vo["sttxt"]); ?></textarea></td></tr></TR><tr><th><span class="red">*</span>活动时间：</th><td><input type="input" class="px" id="statdate" value="<?php if($vo['statdate'] != ''): echo (date("Y-m-d H:i:s",$vo["statdate"])); else: echo date('Y-m-d H:i:s',mktime(0, 0, 0, date("m") , date("d"), date("Y"))); endif; ?>" onClick="WdatePicker()" name="statdate" />		到
		<input type="input" class="px" id="enddate" value="<?php if($vo['enddate'] != ''): echo (date("Y-m-d H:i:s",$vo["enddate"])); else: echo date('Y-m-d H:i:s',mktime(0, 0, 0, date("m") , date("d")+3, date("Y"))); endif; ?>" name="enddate" onClick="WdatePicker()"  /></td></tr><tr><th valign="top"><span class="red">*</span>优惠券活动说明：</th><td><textarea class="px" id="info" name="info" style="width: 400px; height: 125px;"><?php echo ($vo["info"]); ?></textarea>活动说明. </td></tr><tr><th><span class="red">*</span>兑换券使用说明：</th><td><textarea id="aginfo" class="px" name="aginfo" style="width: 400px; height: 125px;"><?php echo ($vo["aginfo"]); ?></textarea>用户获取优惠券后显示的提示信息
</td></tr></tbody></table></div><!--活动结束--><div class="cLineB"><h4>活动结束内容</h4></div><div class="msgWrap bgfc"><table class="userinfoArea" style=" margin: 0;" border="0" cellspacing="0" cellpadding="0" width="100%"><tbody><tr><th valign="top"><span class="red">*</span>活动结束公告主题：</th><td><input type="input" class="px" id="endtite" value="<?php echo ($vo["endtite"]); ?>" name="endtite" style="width:400px"><br>  					请不要多于50字! </td><td rowspan="4" valign="top"><div style="margin-left:20px"><img id="pic3_src" src="<?php if($vo['endpicurl'] == ''): echo C('site_url');?>/tpl/Wap/default/common/css/guajiang/images/activity-coupon-end.jpg<?php else: echo ($vo["endpicurl"]); endif; ?>" width="373px"><br><input class="px" id="pic3" name="endpicurl" onchange="document.getElementById('pic3_src').src=this.value;" value="<?php if($vo['endpicurl'] == ''): echo C('site_url');?>/tpl/Wap/default/common/css/guajiang/images/activity-coupon-end.jpg<?php else: echo ($vo["endpicurl"]); endif; ?>" style="width:363px;"><br><script src="/tpl/static/upyun.js"></script><a href="###" onclick="upyunPicUpload('pic3',1000,500,'<?php echo ($token); ?>')" class="a_upload">上传</a><a href="###" onclick="viewImg('pic3')">预览</a>&nbsp;活动结束图片 </div></td></tr><tr><th valign="top">活动结束说明：</th><td valign="top"><textarea class="px" id="endinfo" name="endinfo" style="width: 400px; height: 125px;"><?php echo ($vo["endinfo"]); ?></textarea>活动结束显示
  				 </td></tr></tbody></table></div><!--奖项设置--><div class="cLineB"><h4>优惠券设置</h4></div><div class="msgWrap bgfc"><table class="userinfoArea" style=" margin: 0;" border="0" cellspacing="0" cellpadding="0" width="100%"><tbody><tr><th valign="top"><span class="red">*</span>优惠券名称1：</th><td><input type="input" class="px" id="fist" name="fist" value="<?php echo ($vo["fist"]); ?>" style="width:250px">请不要多于50字! </td><td rowspan="9" valign="top">&nbsp;</td></tr><tr><th valign="top"><span class="red">*</span>优惠券数量：</th><td><input type="input" class="px" id="fistnums" name="fistnums" value="<?php echo ($vo["fistnums"]); ?>" style="width:60px"></td></tr><tr><th valign="top">优惠券名称2：</th><td><input type="input" class="px" id="second" name="second" value="<?php echo ($vo["second"]); ?>" style="width:250px">请不要多于50字! </td></tr><tr><th valign="top">优惠券数量：</th><td><input type="input" class="px" id="secondnums" name="secondnums" value="<?php echo ($vo["secondnums"]); ?>" style="width:60px"></td></tr><tr><th valign="top">优惠券名称3：</th><td><input type="input" class="px" id="third" name="third" value="<?php echo ($vo["third"]); ?>" style="width:250px">请不要多于50字! </td></tr><tr><th valign="top">优惠券数量：</th><td><input type="input" class="px" id="thirdnums" name="thirdnums" value="<?php echo ($vo["thirdnums"]); ?>" style="width:60px"></td></tbody><tbody><tr><th valign="top"><span class="red">*</span>预计活动的人数：</th><td><input type="input" class="px" id="allpeople" name="allpeople"   value="<?php echo ($vo["allpeople"]); ?>" style="width:150px"/>  预估活动人数直接影响抽奖概率：中奖概率 = 奖品总数/(预估活动人数*每人抽奖次数) 如果要确保任何时候都100%中奖建议设置为1人参加!<span class='red'>如果要确保任何时候都100%中奖建议设置为1人参加!并且奖项只设置一等奖.</span></td></tr><tr><th valign="top"><span class="red">*</span>每人最多允许抽奖次数：</th><td><input type="input" class="px" id="canrqnums" name="canrqnums"   value="<?php echo ($vo["canrqnums"]); ?>" style="width:150px"/>必须1-5之间的数字</td></tr><tr><th valign="top"><span class="red"></span>每天最多抽奖次数：</th><td><input class="px" id="daynums" name="daynums" style="width:150px" value="<?php echo ($vo["daynums"]); ?>" type="input">必须小于总抽奖次数！ 0 为不限制 抽完总数就不能抽了! 可以抽奖天数 = 总数/每天抽奖次数!</td></tr><tr style="display:none"><th valign="top">SN码生成设置：</th><td><input class="radio" type="radio" checked name="snimport" value="0">自动生成  
    <input class="radio" type="radio" name="snimport" value="1">手动生成(SN码管理)
</td></tr><tr><th valign="top">兑奖密码：</th><td><input class="px" id="parssword" name="parssword" value="<?php echo ($vo["parssword"]); ?>" style="width:150px" type="input">消费确认密码长度小于15位 不设置密码,兑奖页面的密码输入框则不出现</td></tr><tr><th valign="top">SN码重命名为：</th><td><input class="px" id="renamesn" name="renamesn" value="<?php if($vo.renamesn): echo ($vo["renamesn"]); else: ?>SN码<?php endif; ?>" style="width:150px" type="input"> 例如：CND码,充值密码,SN码 这个主意用于修改SN码的名称，不懂请别修改</td></tr><tr><th valign="top">手机号重命名：</th><td><input class="px" id="renametel" name="renametel" value="<?php if($vo.renametel): echo ($vo["renametel"]); else: ?>手机号<?php endif; ?>" style="width:150px" type="input"> 例如：QQ号,微信号,手机号等其他联系方式，不懂请别修改</td></tr><tr><th valign="top">是否显示奖品数量：</th><td><input class="radio" type="radio" name="displayjpnums" value="1"  <?php if($vo['displayjpnums'] == 1): ?>checked<?php endif; ?> >显示  <input class="radio" type="radio" name="displayjpnums" value="0"  <?php if($vo['displayjpnums'] == 0): ?>checked<?php endif; ?>>不显</td></tr><tr><th>&nbsp;</th><td><button type="submit" name="button" class="btnGreen">保存</button>　<a href="" class="btnGray vm">取消</a>　<span class="red">请确认功能管理已开启优惠券功能</span></td></tr></tbody></table></div></div></form></div></div></div><style>
.IndexFoot {
	BACKGROUND-COLOR: #333; WIDTH: 100%; HEIGHT: 39px
}
.foot{ width:988px; margin:0px auto; font-size:12px; line-height:39px;}
.foot .foot_page{ float:left; width:600px;color:white;}
.foot .foot_page a{ color:white; text-decoration:none;}
#copyright{ float:right; width:380px; text-align:right; font-size:12px; color:#FFF;}
</style><div class="IndexFoot" style="height:120px;clear:both"><div class="foot"><div class="foot_page" >
● <a href="http://api.vxa.me"><?php echo C('site_name');?></a><br/>
● 帮助您快速搭建属于自己的营销平台,构建自己的客户关系维护系统。
</div><div id="copyright">
	Power by <?php echo C('site_name');?>  版权所有<br/>
	售前咨询QQ：<a target="_blank" href="http://wpa.qq.com/msgrd?v=3&uin=<?php echo C('site_qq');?>&site=qq&menu=yes"><img border="0" src="http://wpa.qq.com/pa?p=2:<?php echo C('site_qq');?>:51" alt="点击这里给我发消息" title="点击这里给我发消息"/></a>
	技术支持QQ：<a target="_blank" href="http://wpa.qq.com/msgrd?v=3&uin=<?php echo C('site_qq');?>&site=qq&menu=yes"><img border="0" src="http://wpa.qq.com/pa?p=2:<?php echo C('site_qq');?>:41" alt="点击这里给我发消息" title="点击这里给我发消息"/></a></div></div></div><div style="display:none"><?php echo ($alert); ?></div></body></html>