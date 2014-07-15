<?php if (!defined('THINK_PATH')) exit();?>﻿<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd"><html xmlns="http://www.w3.org/1999/xhtml"><head><meta http-equiv="Content-Type" content="text/html; charset=utf-8" /><title><?php echo C('site_title'); echo C('site_name');?></title><meta name="keywords" content="<?php echo C('keyword');?>" /><meta name="description" content="<?php echo C('content');?>" /><meta http-equiv="MSThemeCompatible" content="Yes" /><script>var SITEURL='';</script><link rel="stylesheet" type="text/css" href="<?php echo RES;?>/css/style_2_common.css?BPm" /><script src="<?php echo RES;?>/js/common.js" type="text/javascript"></script></head><body id="nv_member" class="pg_CURMODULE"><div class="topbg"><div class="top"><div class="toplink"><style>
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
</script><link rel="stylesheet" href="<?php echo STATICS;?>/kindeditor/themes/default/default.css" /><link rel="stylesheet" href="<?php echo STATICS;?>/kindeditor/plugins/code/prettify.css" /><script src="<?php echo STATICS;?>/kindeditor/kindeditor.js" type="text/javascript"></script><script src="<?php echo STATICS;?>/kindeditor/lang/zh_CN.js" type="text/javascript"></script><script src="<?php echo STATICS;?>/kindeditor/plugins/code/prettify.js" type="text/javascript"></script><div class="content"><div class="cLineB"><h4>模板管理 <span class="FAQ">选择适合您的模版风格，手机输入“首页”测试效果。</span></h4></div><div class="msgWrap form"><ul id="tags"><li class="selectTag"><a onclick="selectTag('tagContent0',this)" href="javascript:void(0)">1. 栏目首页模板风格</a></li><li><a onclick="selectTag('tagContent1',this)" href="javascript:void(0)">2.图文列表模板风格</a></li><li><a onclick="selectTag('tagContent2',this)" href="javascript:void(0)">3.图文详细页模板风格</a></li><li><a onclick="selectTag('tagContent3',this)" href="javascript:void(0)">4.颜色风格&预览</a></li><div class="clr"></div></ul><div id="tagContent"><div class="tagContent selectTag" id="tagContent0"><fieldset><ul class="cateradio"><li <?php if(($info["tpltypeid"]) == "38"): ?>class="active"<?php endif; ?> style="margin:10px 30px;" ><label><img src="<?php echo RES;?>/images/cate1388.png" onclick="javascript:alert('已选择模板38')" /><input class="radio" type="radio" name="optype" value="38" <?php if(($info["tpltypeid"]) == "38"): ?>checked<?php endif; ?> /> 模板38
                            </label></li><li <?php if(($info["tpltypeid"]) == "37"): ?>class="active"<?php endif; ?> style="margin:10px 30px;" ><label><img src="<?php echo RES;?>/images/cate1377.png" onclick="javascript:alert('已选择模板37')" /><input class="radio" type="radio" name="optype" value="37" <?php if(($info["tpltypeid"]) == "37"): ?>checked<?php endif; ?> /> 模板37
                            </label></li><li <?php if(($info["tpltypeid"]) == "36"): ?>class="active"<?php endif; ?> style="margin:10px 30px;" ><label><img src="<?php echo RES;?>/images/cate1366.png" onclick="javascript:alert('已选择模板36')" /><input class="radio" type="radio" name="optype" value="36" <?php if(($info["tpltypeid"]) == "36"): ?>checked<?php endif; ?> /> 模板36
                            </label></li><li <?php if(($info["tpltypeid"]) == "35"): ?>class="active"<?php endif; ?> style="margin:10px 30px;" ><label><img src="<?php echo RES;?>/images/cate1355.png" onclick="javascript:alert('已选择模板35')" /><input class="radio" type="radio" name="optype" value="35" <?php if(($info["tpltypeid"]) == "35"): ?>checked<?php endif; ?> /> 模板35
                            </label></li><li <?php if(($info["tpltypeid"]) == "34"): ?>class="active"<?php endif; ?> style="margin:10px 30px;" ><label><img src="<?php echo RES;?>/images/cate1344.png" onclick="javascript:alert('已选择模板34')" /><input class="radio" type="radio" name="optype" value="34" <?php if(($info["tpltypeid"]) == "34"): ?>checked<?php endif; ?> /> 模板34
                            </label></li><li <?php if(($info["tpltypeid"]) == "33"): ?>class="active"<?php endif; ?> style="margin:10px 30px;" ><label><img src="<?php echo RES;?>/images/cate1333.png" onclick="javascript:alert('已选择模板33s')" /><input class="radio" type="radio" name="optype" value="33" <?php if(($info["tpltypeid"]) == "33"): ?>checked<?php endif; ?> /> 模板33
                            </label></li><li <?php if(($info["tpltypeid"]) == "32"): ?>class="active"<?php endif; ?> style="margin:10px 30px;" ><label><img src="<?php echo RES;?>/images/cate137.png" onclick="javascript:alert('已选择模板32')" /><input class="radio" type="radio" name="optype" value="32" <?php if(($info["tpltypeid"]) == "32"): ?>checked<?php endif; ?> /> 模板32
                            </label></li><li <?php if(($info["tpltypeid"]) == "31"): ?>class="active"<?php endif; ?> style="margin:10px 30px;" ><label><img src="<?php echo RES;?>/images/cate136.png" onclick="javascript:alert('已选择模板31')" /><input class="radio" type="radio" name="optype" value="31" <?php if(($info["tpltypeid"]) == "31"): ?>checked<?php endif; ?> /> 模板31
                            </label></li><li <?php if(($info["tpltypeid"]) == "30"): ?>class="active"<?php endif; ?> style="margin:10px 30px;" ><label><img src="<?php echo RES;?>/images/cate133.png" onclick="javascript:alert('已选择模板30')" /><input class="radio" type="radio" name="optype" value="30" <?php if(($info["tpltypeid"]) == "30"): ?>checked<?php endif; ?> /> 模板30
                            </label></li><li <?php if(($info["tpltypeid"]) == "29"): ?>class="active"<?php endif; ?> style="margin:10px 30px;" ><label><img src="<?php echo RES;?>/images/cate132.png" onclick="javascript:alert('已选择模板29')" /><input class="radio" type="radio" name="optype" value="29" <?php if(($info["tpltypeid"]) == "29"): ?>checked<?php endif; ?> /> 模板29
                            </label></li><li <?php if(($info["tpltypeid"]) == "28"): ?>class="active"<?php endif; ?> style="margin:10px 30px;" ><label><img src="<?php echo RES;?>/images/cate131.png" onclick="javascript:alert('已选择模板28')" /><input class="radio" type="radio" name="optype" value="28" <?php if(($info["tpltypeid"]) == "28"): ?>checked<?php endif; ?> /> 模板28
                            </label></li><li <?php if(($info["tpltypeid"]) == "27"): ?>class="active"<?php endif; ?> style="margin:10px 30px;" ><label><img src="<?php echo RES;?>/images/cate130.png" onclick="javascript:alert('已选择模板27')" /><input class="radio" type="radio" name="optype" value="27" <?php if(($info["tpltypeid"]) == "27"): ?>checked<?php endif; ?> /> 模板27
                            </label></li><li <?php if(($info["tpltypeid"]) == "26"): ?>class="active"<?php endif; ?> style="margin:10px 30px;" ><label><img src="<?php echo RES;?>/images/cate128.png" onclick="javascript:alert('已选择模板26')" /><input class="radio" type="radio" name="optype" value="26" <?php if(($info["tpltypeid"]) == "26"): ?>checked<?php endif; ?> /> 模板26
                            </label></li><li <?php if(($info["tpltypeid"]) == "25"): ?>class="active"<?php endif; ?> style="margin:10px 30px;" ><label><img src="<?php echo RES;?>/images/cate127.png" onclick="javascript:alert('已选择模板25')" /><input class="radio" type="radio" name="optype" value="25" <?php if(($info["tpltypeid"]) == "25"): ?>checked<?php endif; ?> /> 模板25
                            </label></li><li <?php if(($info["tpltypeid"]) == "24"): ?>class="active"<?php endif; ?> style="margin:10px 30px;" ><label><img src="<?php echo RES;?>/images/cate124.png" onclick="javascript:alert('已选择模板24')" /><input class="radio" type="radio" name="optype" value="24" <?php if(($info["tpltypeid"]) == "24"): ?>checked<?php endif; ?> /> 模板24
                            </label></li><li <?php if(($info["tpltypeid"]) == "23"): ?>class="active"<?php endif; ?> style="margin:10px 30px;" ><label><img src="<?php echo RES;?>/images/cate123.png" onclick="javascript:alert('已选择模板23')" /><input class="radio" type="radio" name="optype" value="23" <?php if(($info["tpltypeid"]) == "23"): ?>checked<?php endif; ?> /> 模板23
                            </label></li><li <?php if(($info["tpltypeid"]) == "22"): ?>class="active"<?php endif; ?> style="margin:10px 30px;" ><label><img src="<?php echo RES;?>/images/cate122.png" onclick="javascript:alert('已选择模板22')" /><input class="radio" type="radio" name="optype" value="22" <?php if(($info["tpltypeid"]) == "22"): ?>checked<?php endif; ?> /> 模板22
                            </label></li><li <?php if(($info["tpltypeid"]) == "21"): ?>class="active"<?php endif; ?> style="margin:10px 30px;" ><label><img src="<?php echo RES;?>/images/cate121.png" onclick="javascript:alert('已选择模板21')" /><input class="radio" type="radio" name="optype" value="21" <?php if(($info["tpltypeid"]) == "21"): ?>checked<?php endif; ?> /> 模板21
                            </label></li><li <?php if(($info["tpltypeid"]) == "20"): ?>class="active"<?php endif; ?> style="margin:10px 30px;" ><label><img src="<?php echo RES;?>/images/cate120.png" onclick="javascript:alert('已选择模板20')" /><input class="radio" type="radio" name="optype" value="20" <?php if(($info["tpltypeid"]) == "20"): ?>checked<?php endif; ?> /> 模板20
                            </label></li><li <?php if(($info["tpltypeid"]) == "19"): ?>class="active"<?php endif; ?> style="margin:10px 30px;" ><label><img src="<?php echo RES;?>/images/cate119.png" onclick="javascript:alert('已选择模板19')" /><input class="radio" type="radio" name="optype" value="19" <?php if(($info["tpltypeid"]) == "19"): ?>checked<?php endif; ?> /> 模板19
                            </label></li><li <?php if(($info["tpltypeid"]) == "118"): ?>class="active"<?php endif; ?> style="margin:10px 30px;" ><label><img src="<?php echo RES;?>/images/cate118.png" onclick="javascript:alert('已选择模板18')" /><input class="radio" type="radio" name="optype" value="18" <?php if(($info["tpltypeid"]) == "18"): ?>checked<?php endif; ?> /> 模板18
                            </label></li><li <?php if(($info["tpltypeid"]) == "17"): ?>class="active"<?php endif; ?> style="margin:10px 30px;" ><label><img src="<?php echo RES;?>/images/cate117.png" onclick="javascript:alert('已选择模板17')" /><input class="radio" type="radio" name="optype" value="17" <?php if(($info["tpltypeid"]) == "17"): ?>checked<?php endif; ?> /> 模板17
                            </label></li><li <?php if(($info["tpltypeid"]) == "16"): ?>class="active"<?php endif; ?> style="margin:10px 30px;" ><label><img src="<?php echo RES;?>/images/cate116.png" onclick="javascript:alert('已选择模板16')" /><input class="radio" type="radio" name="optype" value="16" <?php if(($info["tpltypeid"]) == "16"): ?>checked<?php endif; ?> /> 模板16
                            </label></li><li <?php if(($info["tpltypeid"]) == "15"): ?>class="active"<?php endif; ?> style="margin:10px 30px;"><label><img src="<?php echo RES;?>/images/cate115.png" onclick="javascript:alert('已选择模板15')"><input class="radio" type="radio" name="optype" value="15" <?php if(($info["tpltypeid"]) == "15"): ?>checked<?php endif; ?> /> 模板15
                            </label></li><li <?php if(($info["tpltypeid"]) == "14"): ?>class="active"<?php endif; ?> style="margin:10px 30px;"><label><img src="<?php echo RES;?>/images/cate114.png" onclick="javascript:alert('已选择模板14')"><input class="radio" type="radio" name="optype" value="14" <?php if(($info["tpltypeid"]) == "14"): ?>checked<?php endif; ?> /> 模板14
                            </label></li><li <?php if(($info["tpltypeid"]) == "13"): ?>class="active"<?php endif; ?> style="margin:10px 30px;"><label><img src="<?php echo RES;?>/images/cate113.png" onclick="javascript:alert('已选择模板13')"><input class="radio" type="radio" name="optype" value="13" <?php if(($info["tpltypeid"]) == "13"): ?>checked<?php endif; ?> /> 模板13
                            </label></li><li <?php if(($info["tpltypeid"]) == "12"): ?>class="active"<?php endif; ?> style="margin:10px 30px;"><label><img src="<?php echo RES;?>/images/cate112.png" onclick="javascript:alert('已选择模板12')"><input class="radio" type="radio" name="optype" value="12" <?php if(($info["tpltypeid"]) == "12"): ?>checked<?php endif; ?> /> 模板12
                            </label></li><li <?php if(($info["tpltypeid"]) == "11"): ?>class="active"<?php endif; ?> style="margin:10px 30px;"><label><img src="<?php echo RES;?>/images/cate111.png" onclick="javascript:alert('已选择模板11')"><input class="radio" type="radio" name="optype" value="11" <?php if(($info["tpltypeid"]) == "11"): ?>checked<?php endif; ?> /> 模板11
                            </label></li><li <?php if(($info["tpltypeid"]) == "10"): ?>class="active"<?php endif; ?> style="margin:10px 30px;"><label><img src="<?php echo RES;?>/images/cate110.png" onclick="javascript:alert('已选择模板10')"><input class="radio" type="radio" name="optype" value="10" <?php if(($info["tpltypeid"]) == "10"): ?>checked<?php endif; ?> /> 模板10 
                            </label></li><li <?php if(($info["tpltypeid"]) == "9"): ?>class="active"<?php endif; ?> style="margin:10px 30px;"><label><img src="<?php echo RES;?>/images/cate109.png" onclick="javascript:alert('已选择模板9')"><input class="radio" type="radio" name="optype" value="9" <?php if(($info["tpltypeid"]) == "9"): ?>checked<?php endif; ?> /> 模板9 
                            </label></li><li <?php if(($info["tpltypeid"]) == "8"): ?>class="active"<?php endif; ?> style="margin:10px 30px;"><label><img src="<?php echo RES;?>/images/cate108.png" onclick="javascript:alert('已选择模板8')"><input class="radio" type="radio" name="optype" value="8" <?php if(($info["tpltypeid"]) == "8"): ?>checked<?php endif; ?> /> 模板8
                            </label></li><li <?php if(($info["tpltypeid"]) == "7"): ?>class="active"<?php endif; ?> style="margin:10px 30px;"><label><img src="<?php echo RES;?>/images/cate107.png" onclick="javascript:alert('已选择模板7')"><input class="radio" type="radio" name="optype" value="7" <?php if(($info["tpltypeid"]) == "7"): ?>checked<?php endif; ?> /> 模板7 
                            </label></li><li <?php if(($info["tpltypeid"]) == "6"): ?>class="active"<?php endif; ?> style="margin:10px 30px;"><label><img src="<?php echo RES;?>/images/cate106.png" onclick="javascript:alert('已选择模板6')"><input class="radio" type="radio" name="optype" value="6" <?php if(($info["tpltypeid"]) == "6"): ?>checked<?php endif; ?> /> 模板6 
                            </label></li><li <?php if(($info["tpltypeid"]) == "5"): ?>class="active"<?php endif; ?> style="margin:10px 30px;"><label><img src="<?php echo RES;?>/images/cate9.png" onclick="javascript:alert('已选择模板5')"><input class="radio" type="radio" name="optype" value="5" <?php if(($info["tpltypeid"]) == "5"): ?>checked<?php endif; ?> /> 模板5 
                            </label></li><li <?php if(($info["tpltypeid"]) == "4"): ?>class="active"<?php endif; ?> style="margin:10px 30px;"><label><img src="<?php echo RES;?>/images/cate4.png" onclick="javascript:alert('已选择模板4')"><input class="radio" type="radio" name="optype" value="4" <?php if(($info["tpltypeid"]) == "4"): ?>checked<?php endif; ?> /> 模板4 
                            </label></li><li <?php if(($info["tpltypeid"]) == "3"): ?>class="active"<?php endif; ?> style="margin:10px 30px;"><label><img src="<?php echo RES;?>/images/cate3.png" onclick="javascript:alert('已选择模板3')"><input class="radio" type="radio" name="optype" value="3" <?php if(($info["tpltypeid"]) == "3"): ?>checked<?php endif; ?> /> 模板3 
                            </label></li><li <?php if(($info["tpltypeid"]) == "2"): ?>class="active"<?php endif; ?> style="margin:10px 30px;"><label><img src="<?php echo RES;?>/images/cate2.png" ><input class="radio" type="radio" name="optype" value="2" <?php if(($info["tpltypeid"]) == "2"): ?>checked<?php endif; ?> /> 模板2 
                            </label></li><li <?php if(($info["tpltypeid"]) == "1"): ?>class="active"<?php endif; ?> style="margin:10px 30px;"><label><img src="<?php echo RES;?>/images/cate1.png" onclick="javascript:alert('已选择模板1')"><input class="radio" type="radio" name="optype" value="1" <?php if(($info["tpltypeid"]) == "1"): ?>checked<?php endif; ?> /> 模板1 
                            </label></li><!--li <?php if(($info["tpltypeid"]) == "6"): ?>class="active"<?php endif; ?>><label><img src="<?php echo RES;?>/images/cate6.png"><input class="radio" type="radio" name="optype" <?php if(($_SESSION['gid']) == "2"): ?>disabled="disabled"<?php endif; ?> value="6" <?php if(($info["tpltypeid"]) == "6"): ?>checked<?php endif; ?> /> v1模板6(metro风格) </label></li><li <?php if(($info["tpltypeid"]) == "7"): ?>class="active"<?php endif; ?>><label><img src="<?php echo RES;?>/images/cate7.png" title="提示：头部为首页封面图片外链720x400，高度可以根据自己情况调整，
                        图标最好是144x144透明png图片外链，
                        懂PS的玩，不懂的就算了，"><input class="radio" type="radio" name="optype" value="7" <?php if(($_SESSION['gid']) == "2"): ?>disabled="disabled"<?php endif; if(($info["tpltypeid"]) == "7"): ?>checked<?php endif; ?> />v1 模板7(自定义风格) </label></li>--></ul></fieldset></div><div class="tagContent" id="tagContent1"><fieldset><ul class="cateradio2"><li style="display:none" <?php if(($info["tpllistid"]) == "103"): ?>class="active"<?php endif; ?>><label><img src="<?php echo RES;?>/images/list103.png"><input class="radio2" type="radio" name="optype2" value="103" <?php if(($info["tpllistid"]) == "103"): ?>checked<?php endif; ?> /> 模板3
                            </label></li><li <?php if(($info["tpllistid"]) == "4"): ?>class="active"<?php endif; ?> ><label><img src="<?php echo RES;?>/images/list4.png"><input class="radio2" type="radio" name="optype2" <?php if(($_SESSION['gid']) == "2"): ?>disabled="disabled"<?php endif; ?> value="4" <?php if(($info["tpllistid"]) == "4"): ?>checked<?php endif; ?> /> 模板2(省流量)
                            </label></li><li <?php if(($info["tpllistid"]) == "1"): ?>class="active"<?php endif; ?>><label><img src="<?php echo RES;?>/images/list1.png"><input class="radio2" type="radio" name="optype2" value="1" <?php if(($info["tpllistid"]) == "1"): ?>checked<?php endif; ?> /> 模板1(美观)
                            </label></li><!--                        <li <?php if(($info["tpllistid"]) == "2"): ?>class="active"<?php endif; ?> ><label><img src="<?php echo RES;?>/images/list2.png"><input class="radio2" type="radio" name="optype2" value="2" <?php if(($info["tpllistid"]) == "2"): ?>checked<?php endif; ?> /> 模板2(省流量) </label></li><li <?php if(($info["tpllistid"]) == "3"): ?>class="active"<?php endif; ?> ><label><img src="<?php echo RES;?>/images/list3.png"><input class="radio2" type="radio" name="optype2" <?php if(($_SESSION['gid']) == "2"): ?>disabled="disabled"<?php endif; ?> value="3" <?php if(($info["tpllistid"]) == "3"): ?>checked<?php endif; ?> /> 模板3(小清晰)V1 </label></li>--><!--<li <?php if(($info["tpllistid"]) == "5"): ?>class="active"<?php endif; ?> ><label><img src="<?php echo RES;?>/images/list5.png"><input class="radio2" type="radio" name="optype2" <?php if(($_SESSION['gid']) == "2"): ?>disabled="disabled"<?php endif; ?> value="5" <?php if(($info["tpllistid"]) == "5"): ?>checked<?php endif; ?> /> 模板5(文艺风) V1</label></li><li <?php if(($info["tpllistid"]) == "6"): ?>class="active"<?php endif; ?> ><label><img src="<?php echo RES;?>/images/list6.png" title="提示：仅适合一张图片配少量文字内容的微信号，
                        如：冷笑话/经典语录"><input class="radio2" type="radio" name="optype2" <?php if(($_SESSION['gid']) == "2"): ?>disabled="disabled"<?php endif; ?> value="6" <?php if(($info["tpllistid"]) == "6"): ?>checked<?php endif; ?> /> 模板6(经典语录) V1</label></li>--></ul></fieldset></div><div class="tagContent" id="tagContent2"><fieldset><ul class="cateradio3"><li <?php if(($info["tplcontentid"]) == "1"): ?>class="active"<?php endif; ?> ><label><img src="<?php echo RES;?>/images/news1.png"><input class="radio3" type="radio" name="optype3" value="1" <?php if(($info["tplcontentid"]) == "1"): ?>checked<?php endif; ?>/>模板1(有头像) </label></li><!--<li <?php if(($info["tplcontentid"]) == "2"): ?>class="active"<?php endif; ?> ><label><img src="<?php echo RES;?>/images/news2.png"><input class="radio3" <?php if(($_SESSION['gid']) == "2"): ?>disabled="disabled"<?php endif; ?> type="radio" name="optype3" value="2" <?php if(($info["tplcontentid"]) == "2"): ?>checked<?php endif; ?>/>模板2 V1(无头像)</label></li>--><li <?php if(($info["tplcontentid"]) == "3"): ?>class="active"<?php endif; ?> ><label><img src="<?php echo RES;?>/images/news3.png"><input class="radio3" type="radio" name="optype3" value="3" <?php if(($info["tplcontentid"]) == "3"): ?>checked<?php endif; ?>/>模板3(无头像)</label></li></ul></fieldset></div><div class="tagContent" id="tagContent3"><fieldset><div class="cateradio4"><table width="100%" border="0" cellspacing="0" cellpadding="0"><tbody><tr><td width="400" rowspan="2" valign="top"><div class="samsung-render"><iframe src="/index.php?g=Wap&m=Index&token=<?php echo ($info["token"]); ?>&show=1" id="myiframe" width="320" height="406" frameborder="0" style="overflow-x:hidden;"></iframe></div></td><td valign="top"><h3>请选择你喜欢的颜色风格，实时预览 (<span style="color:#c30">注意：只有在手机上才能获得最佳浏览效果，电脑浏览并不一定是最终显示效果，并且仅部分模板支持更换颜色风格</span>)</h3><ul><li><label><input class="radio4" type="radio" name="optype4" value="0" <?php if(($info["color_id"]) == "0"): ?>checked="checked"<?php endif; ?>> 默认风格</label></li><li><label><input class="radio4" type="radio" name="optype4" value="1" <?php if(($info["color_id"]) == "1"): ?>checked="checked"<?php endif; ?>> 黑色风格</label></li><li><label><input class="radio4" type="radio" name="optype4" value="2" <?php if(($info["color_id"]) == "2"): ?>checked="checked"<?php endif; ?>> 蓝色风格</label></li><li><label><input class="radio4" type="radio" name="optype4" value="3" <?php if(($info["color_id"]) == "3"): ?>checked="checked"<?php endif; ?>> 木纹风格</label></li><li><label><input class="radio4" type="radio" name="optype4" value="4" <?php if(($info["color_id"]) == "4"): ?>checked="checked"<?php endif; ?>> 橙色风格</label></li><li><label><input class="radio4" type="radio" name="optype4" value="5" <?php if(($info["color_id"]) == "5"): ?>checked="checked"<?php endif; ?>> 紫色风格</label></li><li><label><input class="radio4" type="radio" name="optype4" value="6" <?php if(($info["color_id"]) == "6"): ?>checked="checked"<?php endif; ?>> 绿色风格</label></li></ul></td></tr></tbody></table><div class="clr"></div></div></fieldset></div></div><script type="text/javascript">            function selectTag(showContent,selfObj){
                // 操作标签
                var tag = document.getElementById("tags").getElementsByTagName("li");
                var taglength = tag.length;
                for(i=0; i<taglength; i++){
                    tag[i].className = "";
                }
                selfObj.parentNode.className = "selectTag";
                // 操作内容
                for(i=0; j=document.getElementById("tagContent"+i); i++){
                    j.style.display = "none";
                }
                document.getElementById(showContent).style.display = "block";


            }
        </script><script>            $(".radio").click(function(){
                $(".cateradio li").each(function(){
                    $(this).removeClass("active");
                });
                $(this).parents("li").addClass("active");
                var myurl='index.php?g=User&m=Tmpls&a=add&style='+$(this).val()+'&r='+Math.random(); 
                $.ajax({url:myurl,async:false});

//                $("#homeurl").attr("href","http://baidu.com/index.php?ac=cate"+$(this).val()+"&tid=9379&w=1");
                $("#myiframe").attr("src",$("#myiframe").attr("src")+'&r='+Math.random());


            });
            $(".radio2").click(function(){
                $(".cateradio2 li").each(function(){
                    $(this).removeClass("active");
                });
                $(this).parents("li").addClass("active");
  
                var myurl ='index.php?g=User&m=Tmpls&a=lists&style='+$(this).val()+'&r='+Math.random(); 
                $.ajax({url:myurl,async:false});


            });
            $(".radio3").click(function(){
                $(".cateradio3 li").each(function(){
                    $(this).removeClass("active");
                });
                $(this).parents("li").addClass("active");
  
                var myurl='index.php?g=User&m=Tmpls&a=content&style='+$(this).val()+'&r='+Math.random(); 
                $.ajax({url:myurl,async:false});

            });
            $(".radio4").click(function(){
                var myurl='index.php?g=User&m=Tmpls&a=background&style='+$(this).val()+'&r='+Math.random(); 
                $.ajax({url:myurl,async:false});
                $("#myiframe").attr("src",$("#myiframe").attr("src")+'&r='+Math.random());
            });
            function changeapp(obj,gid){
                if(obj.checked==true){
                    //var image=new Image();   
                    var myurl='index.php?ac=app&op=open&value=1&id=9379&wxid=gh_858dwjkeww5&openid='+gid+'&r='+Math.random(); 
                    $.ajax({url:myurl,async:false});

                }else{
 
                    var myurl='index.php?ac=app&op=open&value=0&id=9379&wxid=gh_858dwjkeww5&openid='+gid+'&r='+Math.random(); 
                    $.ajax({url:myurl,async:false});

                }
            }

        </script><div class="clr"></div></div></div><div class="clr"></div></div></div></div><!--底部--></div><script>    KindEditor.ready(function(K) {
        var editor = K.editor({
            allowFileManager : true
        });

        K('#image').click(function() {
            editor.loadPlugin('image', function() {
                editor.plugin.imageDialog({
                    showRemote : false,
                    imageUrl : K('#img').val(),
                    clickFn : function(url, title, width, height, border, align) {
                        K('#img').val(url);
                        var show_img = '<img src = "' + url + '" width="80" height="80" />';
                        $('#show_img').html(show_img);
                        editor.hideDialog();
                    }
                });
            });
        });
    });
</script></div></div></div><style>
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