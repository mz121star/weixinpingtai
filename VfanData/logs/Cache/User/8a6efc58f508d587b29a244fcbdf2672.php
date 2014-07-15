<?php if (!defined('THINK_PATH')) exit();?><!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
<title> <?php echo C('site_title');?> <?php echo C('site_name');?></title>
<meta name="keywords" content="<?php echo C('keyword');?>" />
<meta name="description" content="<?php echo C('content');?>" />
<meta http-equiv="MSThemeCompatible" content="Yes" />
<script>var SITEURL='';</script>
<link rel="stylesheet" type="text/css" href="<?php echo RES;?>/css/style_2_common.css?BPm" />
<script src="<?php echo RES;?>/js/common.js" type="text/javascript"></script>
</head>
<body id="nv_member" class="pg_CURMODULE">
<div class="topbg">
<div class="top">
<div class="toplink">
<style>
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
</style>
<body id="nv_member" class="pg_CURMODULE">
<div class="header">
    <div class="header-left">
        <a href="/" class="logoh"><img src="<?php echo RES;?>/images/logo-vfancms.png" /> </a>
        <dl>
            <dd class="logo-text">最专业的企业微信营销平台</dd>
            <dd class="tel-whole">全国招商热线：400-XXX-XXXX</dd>
        </dl>
    </div>
<div class="login">
<?php if($_SESSION[uid]==false): ?>你好&nbsp;&nbsp;<span class="f_red">游客</span>&nbsp;&nbsp;
			<a href="<?php echo U('Index/login');?>">登录</a>&nbsp;&nbsp;|&nbsp;&nbsp;
			<a href="<?php echo U('Index/login');?>">注册</a>
			<?php else: ?>
			你好，<a href="/#" hidefocus="true"  ><span style="color:red"><?php echo (session('uname')); ?></span></a>（uid:<?php echo (session('uid')); ?>）
			<a href="<?php echo U('Admin/Admin/logout');?>" >退出</a><?php endif; ?>
</div>
    <div class="navbar">
        <ul>
            <li> <a href="/">首页 </a></li>
            <li> <a href="<?php echo U('Home/Index/about');?>">关于我们</a></li>
            <li> <a href="<?php echo U('User/Index/index');?>">管理中心</a></li>
            <li> <a href="<?php echo U('Home/Index/help');?>">帮助中心</a></li>
            <li><a href="http://wpa.qq.com/msgrd?v=3&uin=<?php echo C('site_qq');?>&site=qq&menu=yes" target="_blank">在线咨询</a></li>
        </ul>		
    </div>
</div>
<div id="aaa"></div>

<div id="wp" class="wp"><link href="<?php echo RES;?>/css/style.css?id=100" rel="stylesheet" type="text/css" />
  <!--中间内容-->
  <script src="<?php echo STATICS;?>/jquery-1.4.2.min.js" type="text/javascript"></script>
  
  <div class="contentmanage">
    <div class="developer">
       <div class="appTitle normalTitle2">
        <div class="vipuser">


<div class="logo">
<img src="<?php echo ($wecha["headerpic"]); ?>" width="100" height="100">
</div>

<div id="nickname">
<strong><?php echo ($wecha["wxname"]); ?></strong><a href="#" target="_blank" class="vipimg vip-icon<?php echo $userinfo['id']-1; ?>" title=""></a></div>
<div id="weixinid">微信号:<?php echo ($wecha["weixin"]); ?></div>
</div>

        <div class="accountInfo">
<table class="vipInfo" width="100%" border="0" cellpadding="0" cellspacing="0">
<tr>
<td><strong>VIP有效期：</strong><?php if($_SESSION['viptime'] != 0): echo (date("Y-m-d",$thisUser["viptime"])); else: ?>vip0不限时间<?php endif; ?></td>
<td><strong>图文自定义：</strong><?php echo ($thisUser["diynum"]); ?>/<?php echo ($userinfo["diynum"]); ?></td>
<td><strong>活动创建数：</strong><?php echo ($thisUser["activitynum"]); ?>/<?php echo ($userinfo["activitynum"]); ?></td>
<td><strong>请求数：</strong><?php echo ($thisUser["connectnum"]); ?>/<?php echo ($userinfo["connectnum"]); ?></td>
</tr>
<tr>
<td><strong>请求数剩余：</strong><?php echo ($userinfo['connectnum']-$_SESSION['connectnum']); ?></td>
<td><strong>已使用：</strong><?php echo $_SESSION['diynum']; ?></td>
<td><strong>当月赠送请求数：</strong><?php echo ($userinfo["connectnum"]); ?></td>
<td><strong>当月剩余请求数：</strong><?php echo $userinfo['connectnum']-$_SESSION['connectnum']; ?></td>
</tr>

</table>
    </div>
        <div class="clr"></div>
      </div>
      <!--左侧功能菜单-->

 
<style type="text/css">
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
</style>
    
      <div class="tableContent">
        
        <!--左侧功能菜单-->
 <div  class="sideBar" id="sideBar">
<div class="catalogList">
<ul id="menu">
<a class="nav-header">基础设置</a>
<ul class="ckit">
<li <?php if(MODULE_NAME == 'Function'): ?>class="selected" <?php else: ?> class="subCatalogList"<?php endif; ?>> <a href="<?php echo U('Function/index',array('token'=>$token,'id'=>session('wxid')));?>">功能管理</a>
</li>
<li <?php if(MODULE_NAME == 'Areply'): ?>class="selected" <?php else: ?>class="subCatalogList"<?php endif; ?>> <a href="<?php echo U('Areply/index',array('token'=>$token));?>">关注时回复与帮助</a>
</li>
<li <?php if(MODULE_NAME == 'Text'): ?>class="selected" <?php else: ?>class="subCatalogList"<?php endif; ?>> <a href="<?php echo U('Text/index',array('token'=>$token));?>">微信－文本回复</a>
</li>
<li <?php if(MODULE_NAME == 'Img'): ?>class="selected" <?php else: ?> class="subCatalogList"<?php endif; ?>> <a href="<?php echo U('Img/index',array('token'=>$token));?>">微信－图文回复</a>
</li>
<li   <?php if(MODULE_NAME == 'Voiceresponse'): ?>class="selected" <?php else: ?>class="subCatalogList"<?php endif; ?>> <a href="<?php echo U('Voiceresponse/index',array('token'=>$token));?>">微信－语音回复</a>
</li>
<li   <?php if(MODULE_NAME == 'Company'): ?>class="selected" <?php else: ?>class="subCatalogList"<?php endif; ?>> <a href="<?php echo U('Company/index',array('token'=>$token));?>">自定义LBS回复</a><span class="new"></span>
</li>
<li <?php if(MODULE_NAME == 'Other'): ?>class="selected" <?php else: ?>class="subCatalogList"<?php endif; ?>> <a href="<?php echo U('Other/index',array('token'=>$token));?>">回答不上来的配置</a><span class="new"></span>
</li>
</ul>


<a class="nav-header">3G网站设置</a>
<ul class="ckit">
		<li <?php if(ACTION_NAME == 'set'): ?>class="selected" <?php else: ?>class="subCatalogList"<?php endif; ?>> 
			<a href="<?php echo U('Home/set',array('token'=>$token));?>">首页回复配置</a>
		</li>
		<li <?php if(MODULE_NAME == 'Classify'): ?>class="selected" <?php else: ?>class="subCatalogList"<?php endif; ?>> <a href="<?php echo U('Classify/index',array('token'=>$token));?>">分类管理</a>
		</li>
		<li <?php if(ACTION_NAME == 'plugmenu'): ?>class="selected" <?php else: ?>class="subCatalogList"<?php endif; ?>> 
			<a href="<?php echo U('Home/plugmenu',array('token'=>$token));?>">一键拨号与版权</a><span class="new"></span>
		</li>
		
		<li   <?php if(MODULE_NAME == 'Tmpls'): ?>class="selected" <?php else: ?>class="subCatalogList"<?php endif; ?>> <a href="<?php echo U('Tmpls/index',array('token'=>$token));?>">模板管理</a><span class="new"></span>
		</li>
		<?php
 if (is_dir($_SERVER['DOCUMENT_ROOT'].'/cms')&&!strpos($_SERVER['HTTP_HOST'],'pigcms')){ echo '<li class="subCatalogList"> <a href="/cms/manage/index.php">高级模板</a><span class="new"></span></li>'; } ?>
		<li   <?php if(MODULE_NAME == 'Flash'): ?>class="selected" <?php else: ?>class="subCatalogList"<?php endif; ?>> <a href="<?php echo U('Flash/index',array('token'=>$token));?>">首页幻灯片<span class="new"></span></a>
		</li>
		<li   <?php if(MODULE_NAME == 'Diymen'): ?>class="selected" <?php else: ?>class="subCatalogList"<?php endif; ?>> <a href="<?php echo U('Diymen/index',array('token'=>$token));?>">自定义菜单<span class="new"></span></a>
		
		</li>
	
</ul>
<a class="nav-header">行业应用</a>
<ul class="ckit">
		<li   <?php if(ACTION_NAME == 'orders'): ?>class="selected"<?php else: ?>class="subCatalogList"<?php endif; ?> > <a href="<?php echo U('Product/orders',array('token'=>$token,'dining'=>1));?>">无线订餐（网络打印）</a><span class="new"></span></li>
		<li   <?php if(MODULE_NAME == 'Panorama'): ?>class="selected" <?php else: ?>class="subCatalogList"<?php endif; ?>> <a href="<?php echo U('Panorama/index',array('token'=>$token));?>">360°全景<span class="new"></span></a>
		</li>
		<li  
		<?php if(MODULE_NAME == 'Wedding'): ?>class="selected" <?php else: ?>class="subCatalogList"<?php endif; ?>> <a href="<?php echo U('Wedding/index',array('token'=>$token));?>">婚庆喜帖<span class="new"></span></a>
		</li><li  
		<?php if(MODULE_NAME == 'Vote'): ?>class="selected" <?php else: ?>class="subCatalogList"<?php endif; ?>> <a href="<?php echo U('Vote/index',array('token'=>$token));?>">3G微投票<span class="new"></span></a>
		</li>
		<li   <?php if(ACTION_NAME == 'Estate'): ?>class="selected" <?php else: ?>class="subCatalogList"<?php endif; ?> > <a href="<?php echo U('Estate/index',array('token'=>$token));?>">楼盘房产</a><span class="new"></span></li>

			<li   <?php if(MODULE_NAME == 'Selfform'): ?>class="selected"<?php else: ?>class="subCatalogList"<?php endif; ?>> <a href="<?php echo U('Selfform/index',array('token'=>$token));?>">万能表单,报名,留言,预约</a></li>
			 <li   <?php if(MODULE_NAME == 'Host'): ?>class="selected"<?php else: ?>class="subCatalogList"<?php endif; ?> > <a href="<?php echo U('Host/index',array('token'=>$token));?>">通用订单(酒店,KTV)</a><span class="new"></span></li> 
</ul>

<a class="nav-header">电商系统</a>
<ul class="ckit" style="display:none">

	 <li   <?php if((MODULE_NAME == 'Product') and (ACTION_NAME == 'index')): ?>class="selected"<?php else: ?>class="subCatalogList"<?php endif; ?> > <a href="<?php echo U('Groupon/index',array('token'=>$token));?>">微信团购系统</a><span class="new"></span></li>
	 <li   <?php if((MODULE_NAME == 'Product') and (ACTION_NAME == 'index')): ?>class="selected"<?php else: ?>class="subCatalogList"<?php endif; ?> > <a href="<?php echo U('Product/index',array('token'=>$token));?>">微信商城系统</a><span class="new"></span></li> 
	 
	 <li   <?php if(MODULE_NAME == 'Alipay_config'): ?>class="selected" <?php else: ?>class="subCatalogList"<?php endif; ?>> <a href="<?php echo U('Alipay_config/index',array('token'=>$token));?>">支付宝设置</a></li>
	<li   <?php if(MODULE_NAME == 'Taobao'): ?>class="selected" <?php else: ?>class="subCatalogList"<?php endif; ?>> <a href="<?php echo U('Taobao/index',array('token'=>$token));?>">淘宝天猫店铺配置</a></li>
	<li   <?php if(MODULE_NAME == 'apilist'): ?>class="selected"<?php else: ?>class="subCatalogList"<?php endif; ?> > <a href="<?php echo U('Api/index',array('token'=>$token));?>">融合第三方</a><span class="new"></span></li>
	<li   <?php if(MODULE_NAME == 'Adma'): ?>class="selected"<?php else: ?>class="subCatalogList"<?php endif; ?> > <a href="<?php echo U('Adma/index',array('token'=>$token));?>">DIY宣传页</a></li>
	<li   <?php if(MODULE_NAME == 'Photo'): ?>class="selected"<?php else: ?>class="subCatalogList"<?php endif; ?> > <a href="<?php echo U('Photo/index',array('token'=>$token));?>">3G图集(相册)</a><span class="new"></span></li>
</ul>

<a class="nav-header">微用户管理开发中</a>
<ul class="ckit" style="display:none">
	<li   <?php if(MODULE_NAME == 'wechat_grout'): ?>class="selected" <?php else: ?>class="subCatalogList"<?php endif; ?> > <a href="javascript:alert('开发中，感谢关注')">分组管理－新增</a><span class="new"></span></li>
	<li   <?php if(MODULE_NAME == 'wechat_grout'): ?>class="selected" <?php else: ?>class="subCatalogList"<?php endif; ?> > <a href="javascript:alert('开发中，感谢关注')">微信群发－新增</a><span class="new"></span></li>
	<li   <?php if(MODULE_NAME == 'wechat_grout'): ?>class="selected" <?php else: ?>class="subCatalogList"<?php endif; ?> > <a href="javascript:alert('开发中，感谢关注')">人工客服－新增</a><span class="new"></span></li>

</ul>
<a class="nav-header">推广活动</a>
<ul class="ckit" style="display:none">
	<li   <?php if(MODULE_NAME == 'Lottery'): ?>class="selected" <?php else: ?>class="subCatalogList"<?php endif; ?> > <a href="<?php echo U('Lottery/index',array('token'=>$token));?>">幸运大转盘</a><span class="new"></span></li>
	<li   <?php if(MODULE_NAME == 'Coupon'): ?>class="selected" <?php else: ?>class="subCatalogList"<?php endif; ?> > <a href="<?php echo U('Coupon/index',array('token'=>$token));?>">优惠券</a></li>
	<li   <?php if(MODULE_NAME == 'Guajiang'): ?>class="selected" <?php else: ?>class="subCatalogList"<?php endif; ?> > <a href="<?php echo U('Guajiang/index',array('token'=>$token));?>">刮刮卡</a></li>
</ul>
<a class="nav-header">会员卡</a>
<ul class="ckit" style="display:none">
	<li <?php if(MODULE_NAME == 'Member_card'): ?>class="selected" <?php else: ?>class="subCatalogList"<?php endif; ?>> <a href="<?php echo U('Member_card/index',array('token'=>$token));?>">会员卡</a></li>
	<li <?php if((MODULE_NAME == 'Member_card') and (ACTION_NAME == 'replyInfoSet')): ?>class="selected" <?php else: ?>class="subCatalogList"<?php endif; ?>> <a href="<?php echo U('Member_card/replyInfoSet',array('token'=>$token));?>">回复设置</a></li>

</ul>

<a class="nav-header">统计分析</a>
<ul class="ckit" style="display:none">
<li   <?php if(MODULE_NAME == 'index'): ?>class="selected" <?php else: ?>class="subCatalogList"<?php endif; ?> > <a href="<?php echo U('Requerydata/index',array('token'=>$token));?>">请求数详情</a>
</li>
</ul>
</ul>
</div>
</div>
<style>
a.nav-header{background:url(/tpl/static/images/arrow_click.png) center right no-repeat;cursor:pointer}
a.nav-header-current{background:url(/tpl/static/images/arrow_unclick.png) center right no-repeat;}
</style>
<script type="text/javascript">
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
</script>
<script src="./tpl/User/default/common/js/date/WdatePicker.js"></script>
<script src="/tpl/static/artDialog/jquery.artDialog.js?skin=default"></script>
<script src="/tpl/static/artDialog/plugins/iframeTools.js"></script>

 <script src="/tpl/static/upyun.js"></script>
<div class="content">
<style>
.msgWrap .control-group {
margin-bottom: 20px;
}
.msgWrap .control-label {
text-align: left;
width: 140px;
font-weight: bold;
padding-top: 5px;
float: left;
display: block;
margin-bottom: 5px;
}
.msgWrap .controls {
margin-left: 160px;
}
.msgWrap .form-actions {
padding: 19px 20px 20px 160px;
margin-top: 20px;
}
.span4, .span1, .option, .valid, .input-large{
	background: url(../images/px.png) repeat-x scroll 0 0 #FFFFFF;
    border-color: #848484 #E0E0E0 #E0E0E0 #848484;
    border-style: solid;
    border-width: 1px;
	border-radius: 2px 2px 2px 2px;
	padding:5px;
	width: 210px;
}
</style>
<script>
function setlatlng(longitude,latitude){
	art.dialog.data('longitude', longitude);
	art.dialog.data('latitude', latitude);
	art.dialog.open('<?php echo U('Map/setLatLng');?>',{lock:false,title:'设置经纬度',width:600,height:400,yesText:'关闭',background: '#000',opacity: 0.87});
}
</script>
<div class="cLineB">
  <h4>新建微喜帖</h4><a href="<?php echo U('Wedding/index');?>" class="right btnGrayS vm" style="margin-top:-27px">返回</a>
 </div> 
  <div class="msgWrap bgfc">
  <form action="" method="post" class="form-horizontal form-validate" novalidate="novalidate">
	<div class="control-group">
		<label for="title" class="control-label">喜帖标题：</label>
		<div class="controls">
			<input type="text" name="title" id="title" maxlength="10" class="span4" value="<?php echo ($wedding["title"]); ?>" data-rule-required="true"><span class="maroon">*</span><span class="help-inline">喜帖标题限制在十个字以内</span>
		</div>
	</div>
	<div class="control-group">
		<label for="keyword" class="control-label">触发关键词：</label>
		<div class="controls">
			<input type="text" name="keyword" id="keyword" class="span4" data-rule-required="true" value="<?php echo ($wedding["keyword"]); ?>"><span class="maroon">*</span><span class="help-inline">只能设置一个关键字</span>
		</div>
	</div>
	<div class="control-group">
		<label for="coverurl" class="control-label">喜帖封面：</label>
		<div class="controls">
			<img class="thumb_img" id="suicai1_src" src="<?php if($wedding['coverurl'] != false): echo ($wedding["coverurl"]); else: ?>http://bcs.duapp.com/baeimgs/Tnh1ROgm93.png<?php endif; ?>" style="max-height: 100px;">
			<input id="suicai1" type="text" name="coverurl" class="px hide" onchange="changpic(this,1)" value="<?php if($wedding['coverurl'] != false): echo ($wedding["coverurl"]); else: ?>http://bcs.duapp.com/baeimgs/Tnh1ROgm93.png<?php endif; ?>">
			<span class="help-inline">
				<a href="javascript:void(0)" onclick="upyunPicUpload('suicai1',700,420,'<?php echo ($token); ?>')" class="btnGrayS vm">上传</a>
				<a href="###" onclick="viewImg('suicai1')" class="btnGrayS vm">预览</a>
			</span>
			<span class="help-inline"><span class="maroon">*</span>封面默认大小720*400</span>
		</div>
	</div>
	<div class="control-group">
		<label for="openpic" class="control-label">开场动画：</label>
		<div class="controls">
			<img class="thumb_img" id="suicaipic2_src" src="<?php if($wedding['openpic'] != false): echo ($wedding["openpic"]); else: ?>http://bcs.duapp.com/baeimgs/jNuxaj1cAj.jpg<?php endif; ?>" style="width: 180px; height: 180px;">
			<input id="suicaipic2" type="text" name="openpic" class="px hide" onchange="changpic(this,2)" value="<?php if($wedding['openpic'] != false): echo ($wedding["openpic"]); else: ?>http://bcs.duapp.com/baeimgs/jNuxaj1cAj.jpg<?php endif; ?>">
			<span class="help-inline">
						<a href="javascript:void(0)" onclick="upyunPicUpload('suicaipic2',700,420,'<?php echo ($token); ?>')" class="btnGrayS vm">上传</a>
				<a href="###" onclick="viewImg('suicaipic2')" class="btnGrayS vm">预览</a>
			</span>
			<span class="help-inline"> 上传400*400左右的新郎新娘合影图,用于喜帖打开时的动画中,图片大小不超过300K </span>
			<span class="red">不想要开场动画图片地址留空即可!</span>
		</div>
	</div>
	<div class="control-group">
		<label for="picurl" class="control-label">缩略图：</label>
		<div class="controls">
			<img class="thumb_img" id="suicai3_src" src="<?php if($wedding['openpic'] != false): echo ($wedding["openpic"]); else: ?>http://bcs.duapp.com/baeimgs/2cDQtFbl75.jpg<?php endif; ?>" style="width: 40px; height: 40px;">
			<input id="suicai3" type="text" name="picurl" class="px hide" onchange="changpic(this,3)" value="<?php if($wedding['openpic'] != false): echo ($wedding["openpic"]); else: ?>http://bcs.duapp.com/baeimgs/2cDQtFbl75.jpg<?php endif; ?>">
			<span class="help-inline">
				<a href="javascript:void(0)" onclick="upyunPicUpload('suicai3',700,420,'<?php echo ($token); ?>')" class="btnGrayS vm">上传</a>
				<a href="###" onclick="viewImg('suicai3')" class="btnGrayS vm">预览</a>
			</span><span class="help-inline"><span class="maroon">*</span>默认40x40,显示在喜帖主页</span>
		</div>
	</div>
		<div class="control-group">
		<label for="picurl" class="control-label">相册选择：</label>
		<div class="controls">
			<select name="pid">
				<option value="">请选择相册名称</option>
				<?php if(is_array($photo)): $i = 0; $__LIST__ = $photo;if( count($__LIST__)==0 ) : echo "" ;else: foreach($__LIST__ as $key=>$photo): $mod = ($i % 2 );++$i;?><option value="<?php echo ($photo["id"]); ?>" <?php if($photo['id'] == $wedding['pid']): ?>selected="selected"<?php endif; ?>><?php echo ($photo["title"]); ?></option><?php endforeach; endif; else: echo "" ;endif; ?>
			</select>
			<span class="help-inline">
			</span>
			<span class="help-inline">
				<span class="maroon">*</span>
				<a target="ddd" class="btnGrayS vm" href="<?php echo U('Photo/add');?>">创建相册</a>  如果没有请创建
			</span>
		</div>
	</div>
	<div class="control-group">
		<label for="address" class="control-label">新郎名字：</label>
		<div class="controls">
			<input type="text" name="man" id="man" class="span4" value="<?php echo ($wedding["man"]); ?>" data-rule-required="true">
			<span class="maroon">*</span>
		</div>
	</div>
	<div class="control-group">
		<label for="woman" class="control-label">新娘名字：</label>
		<div class="controls">
			<input type="text" name="woman" id="woman" class="span4" value="<?php echo ($wedding["woman"]); ?>" data-rule-required="true">
			<span class="maroon">*</span>
		</div> 
	</div>
	<div class="control-group">
		<label for="typename" class="control-label"></label>
		<div class="controls">
			<label class="radio inline">
				<input type="radio" name="who_first" checked="checked" value="1"><span class="help-inline">新郎名字在前</span>
			</label>
			<label class="radio inline">
				<input type="radio" name="who_first" value="2"><span class="help-inline">新娘名字在前</span>
			</label>
		</div>
	</div>
	<div class="control-group">
		<label for="tel" class="control-label">联系电话：</label>
		<div class="controls">
			<input type="text" name="phone" id="phone" class="span4" value="<?php echo ($wedding["phone"]); ?>" data-rule-required="true" data-rule-phone="true"><span class="maroon">*</span><span class="help-inline">如0551-63474223 </span>
		</div>
	</div>
	<div class="control-group">
		<label for="time" class="control-label">婚宴日期：</label>
		<div class="controls"> 
			<div class="input-prepend">
				<span class="add-on">
					<i class="icon-calendar"></i>
				</span>
				<input type="input" class="px" onClick="WdatePicker()"  value="<?php if($wedding['time'] != false): echo (date('Y-m-d',$wedding["time"])); endif; ?>" name="time"> <span class="maroon">*</span> 
			</div>
		</div>
	</div>
	<div class="control-group">
		<label for="place" class="control-label">宴席地址：</label>
		<div class="controls"> 
			<div class="input-prepend">
				<input type="text" name="place" class="span4" value="<?php echo ($wedding["place"]); ?>" onchange="loadmap()" id="suggestId" data-rule-required="true"/> <span class="maroon">*</span> 
			</div>
		</div>
	</div>
	<div class="control-group">
		 <label class="control-label" for="suggestId">经纬地址</label>
		 <div class="controls">
			<div id="r-result">
				 <input type="input" class="px" id="longitude" value="<?php echo ($wedding["lng"]); ?>"  name="lng" style="width:80px;">
				 <input type="input" class="px" id="latitude" value="<?php echo ($wedding["lat"]); ?>"  name="lat" style="width:80px;">  <a href="###" onclick="setlatlng($('#longitude').val(),$('#latitude').val())">在地图中查看/设置</a>
				 <input  type="hidden"  name="city" class="px" id="city" size="20" value="" /> 
			 </div>
			 <div id="searchResultPanel"></div>
		 </div>
    </div>
	<div class="control-group">
		<label for="video" class="control-label">喜帖视频：</label>
		<div class="controls"> 
			 <input type="text" name="video" id="video" class="span4" style="width:480px" value="<?php echo ($wedding["video"]); ?>"><p>支持优酷视频地址如;http://v.youku.com/v_show/id_XNjI4ODk5NDQ4.html <br> 腾讯fash视频地址：如http://static.video.qq.com/TPout.swf?vid=v0119s27wd5&amp;auto=0 <br> 也支持mp4和ogg 格式地址 http://www.w3school.com.cn/example/html5/mov_bbb.mp4 </p>
		</div>
	</div>
	<div class="control-group">
		<label class="control-label" for="mp3url">背景音乐</label>
		<div class="controls">
			<input class="px" name="mp3url" value="<?php echo ($wedding["mp3url"]); ?>" id="suicai4" style="width:300px" onchange="document.getElementById('plmp3').src=this.value"> <a href="###" onclick="chooseFile('suicai4','music')" class="a_upload">选择</a><br />
		
			<audio  id="plmp3" src="" preload="none"></audio>
		</div>
	</div>
	<div class="control-group">
		<label for="tel" class="control-label">密码：</label>
		<div class="controls">
			<input type="text" name="passowrd" id="passowrd" class="span4" value="<?php echo ($wedding["passowrd"]); ?>" data-rule-required="true"><span class="maroon">*</span><span class="help-inline">设置微信上查看来宾名单的验证密码</span>
		</div>
	</div>
	<div class="control-group">
		<label for="tel" class="control-label">想要给朋友说的话：</label>
		<div class="controls">
			<textarea rows="5" name="word" id="word" class="px" data-rule-required="true" data-rule-maxlength="200" style=" width:450px; height:60px"><?php if($wedding['word'] != false): echo ($wedding["word"]); else: ?>亲爱的朋友，我要结婚了，希望能在我的婚礼上得到你的祝福，并祝愿你也幸福.<?php endif; ?></textarea>
			<span class="maroon">*</span><span class="help-inline">喜帖文字限制在200字以内</span>
		</div>
	</div>
	<div class="control-group">
		<label for="qr_code" class="control-label">二维码图片地址：</label>
		<div class="controls">
			<input id="suicai6" type="text" name="qr_code" class="span4" value="<?php echo ($wedding["qr_code"]); ?>">
			<span class="help-inline">
				<a href="javascript:void(0)" onclick="upyunPicUpload('suicai6',700,420,'<?php echo ($token); ?>')" class="btnGrayS vm">上传</a>
				<a href="###" onclick="viewImg('suicai6')" class="btnGrayS vm">预览</a>
			</span>
			<span class="help-inline">
			<span class="maroon">*</span>默认100x100,显示在喜帖底部</span>
		</div>
	</div>
	<div class="control-group">
		<label for="copr" class="control-label">底部版权：</label>
		<div class="controls">
		<textarea name="copyrite" id="copyrite" class="px" rows="5" style="width:450px; height:60px"><?php echo ($wedding["copyrite"]); ?></textarea>
		</div>
	</div>
   <div class="form-actions">
			<button id="bsubmit" type="submit" data-loading-text="提交中..." class="btnGreen">保存</button>　<button type="button" class="btnGray vm">取消</button>
		</div>
</form>
  </div> 
 
  
        </div>
		
</div>
</div>
</div>

<style>
.IndexFoot {
	BACKGROUND-COLOR: #333; WIDTH: 100%; HEIGHT: 39px
}
.foot{ width:988px; margin:0px auto; font-size:12px; line-height:39px;}
.foot .foot_page{ float:left; width:600px;color:white;}
.foot .foot_page a{ color:white; text-decoration:none;}
#copyright{ float:right; width:380px; text-align:right; font-size:12px; color:#FFF;}
</style>
<div class="IndexFoot" style="height:120px;clear:both">
<div class="foot">
<div class="foot_page" >
● <a href="http://api.vxa.me"><?php echo C('site_name');?></a><br/>
● 帮助您快速搭建属于自己的营销平台,构建自己的客户关系维护系统。
</div>
<div id="copyright">
	Power by <?php echo C('site_name');?>  版权所有<br/>
	售前咨询QQ：<a target="_blank" href="http://wpa.qq.com/msgrd?v=3&uin=<?php echo C('site_qq');?>&site=qq&menu=yes"><img border="0" src="http://wpa.qq.com/pa?p=2:<?php echo C('site_qq');?>:51" alt="点击这里给我发消息" title="点击这里给我发消息"/></a>
	技术支持QQ：<a target="_blank" href="http://wpa.qq.com/msgrd?v=3&uin=<?php echo C('site_qq');?>&site=qq&menu=yes"><img border="0" src="http://wpa.qq.com/pa?p=2:<?php echo C('site_qq');?>:41" alt="点击这里给我发消息" title="点击这里给我发消息"/></a>
</div>
    </div>
</div>

<div style="display:none">
<?php echo ($alert); ?>
</div>
</body>
</html>