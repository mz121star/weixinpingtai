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
        <div class="content">

<div class="cLineB">
  <h4>关注时自动回复内容 <span class="FAQ">可参考右边的范例来写,关注回复文字的信息，回复帮助也是此信息！</span></h4>
 </div>
         <div class="zdhuifu">
                  <form method="post"  action="<?php echo U('Areply/insert');?>">
                  <input type="hidden" name="wxid" value="gh_858dwjkeww5"  />
  
  <table cellspacing="0" cellpadding="0" border="0" width="100%">
  <tr><td height="5"></td><td></td></tr>
<tr>
<td valign="top" width="420"><textarea class="px" style="width:420px; height:500px; margin:5px 0"  id="Hfcontent" name="content">
<?php echo ($areply["content"]); ?>
</textarea><p> <input name="home" type="checkbox" <?php if($areply['home'] == 1): ?>checked="checked"<?php endif; ?> value="1"   />若是想关注回复多图，此项必须沟选 </p><p>
关键词：<input type="input" style="width:100px;" class="px" id="keyword" value="<?php echo ($areply["keyword"]); ?>" name="keyword" style="width:500px" ><br/>例：填写"功能",系统会检索包含最近发布的9条信息，若想关注回复回复首页,此项请填写 首页<br/></td>
<td valign="top">
     	<div class="zdhuifu" style="margin-left:20px">
<h4>参考范例：</h4>
1.附近周边信息查询lbs<br/>
2.音乐查询　音乐＋音乐名  例：音乐爱你一万年<br/>
3.天气查询　城市名＋天气　例上海天气<br/>
4.手机归属地查询(吉凶 运势) 手机＋手机号码　例：手机13917778912<br/>
5.身份证查询　身份证＋号码　　例：身份证342423198803015568<br/>
6.公交查询　公交＋城市＋公交编号　例：上海公交774<br/>
7.火车查询　火车＋城市＋目的地　例火车上海南京<br/>
8.翻译 支持 及时翻译，语音翻译　翻译＋关键词 例：翻译你好<br/>
9.彩票查询　彩票＋彩票名  例如:彩票双色球<br/>
10.周公解梦　梦见+关键词　例如:梦见父母<br/>
11.陪聊　直接输入聊天关键词即可<br/>
12.聊天　直接输入聊天关键词即可<br/>
13.藏头诗 藏头诗+关键词　例：藏头诗我爱你　<br/>
14.笑话　直接发送笑话<br/>
15.糗事　直接发送糗事<br/>
16.快递 快递＋快递名＋快递号　例：快递顺丰117215889174<br/>
17.健康指数查询　健康＋高，＋重　例：健康170,65<br/>
18.朗读 朗读＋关键词　例：朗读<?php echo C('site_name');?>多用户营销系统<br/>
19.计算器 计算器使用方法　例：计算50-50　，计算100*100<br/>
20.输入价格了解<?php echo C('site_name');?>平台系统的价格<br/>
21.输入服务了解<?php echo C('site_name');?>平台系统的售后服务<br/>
23.输入抽奖，即可玩幸运大抽奖<br/>
2４.输入会员即可填写会员资料<br/>
25.更多功能请回复帮助，或者help<br/>

</div></td>
</tr>
<tr>
<td height="50">
       
<input type="submit" value="保存"  name="sbmt"   class="btnGreen left"  />　<a href="<?php echo U('Img/add');?>"  class="btnGray vm"  >切换到图文模式</a>
<div class="right"  >
<ul>
<li class="biaoqing"><span>表情</span>
<ul>
<li><img src="<?php echo RES;?>/images/face/0.gif" alt="微笑" onclick="jsbq('微笑')"></li>
<li><img src="<?php echo RES;?>/images/face/1.gif" alt="撇嘴" onclick="jsbq('撇嘴')"></li>
<li><img src="<?php echo RES;?>/images/face/2.gif" alt="色" onclick="jsbq('色')"></li>
<li><img src="<?php echo RES;?>/images/face/3.gif" alt="发呆" onclick="jsbq('发呆')"></li>
<li><img src="<?php echo RES;?>/images/face/4.gif" alt="得意" onclick="jsbq('得意')"></li>
<li><img src="<?php echo RES;?>/images/face/5.gif" alt="流泪" onclick="jsbq('流泪')"></li>
<li><img src="<?php echo RES;?>/images/face/6.gif" alt="害羞" onclick="jsbq('害羞')"></li>
<li><img src="<?php echo RES;?>/images/face/7.gif" alt="闭嘴" onclick="jsbq('闭嘴')"></li>
<li><img src="<?php echo RES;?>/images/face/8.gif" alt="睡" onclick="jsbq('睡')"></li>
<li><img src="<?php echo RES;?>/images/face/9.gif" alt="大哭" onclick="jsbq('大哭')"></li>
<li><img src="<?php echo RES;?>/images/face/10.gif" alt="尴尬" onclick="jsbq('尴尬')"></li>
<li><img src="<?php echo RES;?>/images/face/11.gif" alt="发怒" onclick="jsbq('发怒')"></li>
<li><img src="<?php echo RES;?>/images/face/12.gif" alt="调皮" onclick="jsbq('调皮')"></li>
<li><img src="<?php echo RES;?>/images/face/13.gif" alt="呲牙" onclick="jsbq('呲牙')"></li>
<li><img src="<?php echo RES;?>/images/face/14.gif" alt="惊讶" onclick="jsbq('惊讶')"></li>
<li><img src="<?php echo RES;?>/images/face/15.gif" alt="难过" onclick="jsbq('难过')"></li>
<li><img src="<?php echo RES;?>/images/face/16.gif" alt="酷" onclick="jsbq('酷')"></li>
<li><img src="<?php echo RES;?>/images/face/17.gif" alt="冷汗" onclick="jsbq('冷汗')"></li>
<li><img src="<?php echo RES;?>/images/face/18.gif" alt="抓狂" onclick="jsbq('抓狂')"></li>
<li><img src="<?php echo RES;?>/images/face/19.gif" alt="吐" onclick="jsbq('吐')"></li>
<li><img src="<?php echo RES;?>/images/face/20.gif" alt="偷笑" onclick="jsbq('偷笑')"></li>
<li><img src="<?php echo RES;?>/images/face/21.gif" alt="可爱" onclick="jsbq('可爱')"></li>
<li><img src="<?php echo RES;?>/images/face/22.gif" alt="白眼" onclick="jsbq('白眼')"></li>
<li><img src="<?php echo RES;?>/images/face/23.gif" alt="傲慢" onclick="jsbq('傲慢')"></li>
<li><img src="<?php echo RES;?>/images/face/24.gif" alt="饥饿" onclick="jsbq('饥饿')"></li>
<li><img src="<?php echo RES;?>/images/face/25.gif" alt="困" onclick="jsbq('困')"></li>
<li><img src="<?php echo RES;?>/images/face/26.gif" alt="惊恐" onclick="jsbq('惊恐')"></li>
<li><img src="<?php echo RES;?>/images/face/27.gif" alt="流汗" onclick="jsbq('流汗')"></li>
<li><img src="<?php echo RES;?>/images/face/28.gif" alt="憨笑" onclick="jsbq('憨笑')"></li>
<li><img src="<?php echo RES;?>/images/face/29.gif" alt="大兵" onclick="jsbq('大兵')"></li>
<li><img src="<?php echo RES;?>/images/face/30.gif" alt="奋斗" onclick="jsbq('奋斗')"></li>
<li><img src="<?php echo RES;?>/images/face/31.gif" alt="咒骂" onclick="jsbq('咒骂')"></li>
<li><img src="<?php echo RES;?>/images/face/32.gif" alt="疑问" onclick="jsbq('疑问')"></li>
<li><img src="<?php echo RES;?>/images/face/33.gif" alt="嘘" onclick="jsbq('嘘')"></li>
<li><img src="<?php echo RES;?>/images/face/34.gif" alt="晕" onclick="jsbq('晕')"></li>
<li><img src="<?php echo RES;?>/images/face/35.gif" alt="折磨" onclick="jsbq('折磨')"></li>
<li><img src="<?php echo RES;?>/images/face/36.gif" alt="衰" onclick="jsbq('衰')"></li>
<li><img src="<?php echo RES;?>/images/face/37.gif" alt="骷髅" onclick="jsbq('骷髅')"></li>
<li><img src="<?php echo RES;?>/images/face/38.gif" alt="敲打" onclick="jsbq('敲打')"></li>
<li><img src="<?php echo RES;?>/images/face/39.gif" alt="再见" onclick="jsbq('再见')"></li>
<li><img src="<?php echo RES;?>/images/face/40.gif" alt="擦汗" onclick="jsbq('擦汗')"></li>
<li><img src="<?php echo RES;?>/images/face/41.gif" alt="抠鼻" onclick="jsbq('抠鼻')"></li>
<li><img src="<?php echo RES;?>/images/face/42.gif" alt="鼓掌" onclick="jsbq('鼓掌')"></li>
<li><img src="<?php echo RES;?>/images/face/43.gif" alt="糗大了" onclick="jsbq('糗大了')"></li>
<li><img src="<?php echo RES;?>/images/face/44.gif" alt="坏笑" onclick="jsbq('坏笑')"></li>
<li><img src="<?php echo RES;?>/images/face/45.gif" alt="左哼哼" onclick="jsbq('左哼哼')"></li>
<li><img src="<?php echo RES;?>/images/face/46.gif" alt="右哼哼" onclick="jsbq('右哼哼')"></li>
<li><img src="<?php echo RES;?>/images/face/47.gif" alt="哈欠" onclick="jsbq('哈欠')"></li>
<li><img src="<?php echo RES;?>/images/face/48.gif" alt="鄙视" onclick="jsbq('鄙视')"></li>
<li><img src="<?php echo RES;?>/images/face/49.gif" alt="委屈" onclick="jsbq('委屈')"></li>
<li><img src="<?php echo RES;?>/images/face/50.gif" alt="快哭了" onclick="jsbq('快哭了')"></li>
<li><img src="<?php echo RES;?>/images/face/51.gif" alt="阴险" onclick="jsbq('阴险')"></li>
<li><img src="<?php echo RES;?>/images/face/52.gif" alt="亲亲" onclick="jsbq('亲亲')"></li>
<li><img src="<?php echo RES;?>/images/face/53.gif" alt="吓" onclick="jsbq('吓')"></li>
<li><img src="<?php echo RES;?>/images/face/54.gif" alt="可怜" onclick="jsbq('可怜')"></li>
<li><img src="<?php echo RES;?>/images/face/55.gif" alt="菜刀" onclick="jsbq('菜刀')"></li>
<li><img src="<?php echo RES;?>/images/face/56.gif" alt="西瓜" onclick="jsbq('西瓜')"></li>
<li><img src="<?php echo RES;?>/images/face/57.gif" alt="啤酒" onclick="jsbq('啤酒')"></li>
<li><img src="<?php echo RES;?>/images/face/58.gif" alt="篮球" onclick="jsbq('篮球')"></li>
<li><img src="<?php echo RES;?>/images/face/59.gif" alt="乒乓" onclick="jsbq('乒乓')"></li>
<li><img src="<?php echo RES;?>/images/face/60.gif" alt="咖啡" onclick="jsbq('咖啡')"></li>
<li><img src="<?php echo RES;?>/images/face/61.gif" alt="饭" onclick="jsbq('饭')"></li>
<li><img src="<?php echo RES;?>/images/face/62.gif" alt="猪头" onclick="jsbq('猪头')"></li>
<li><img src="<?php echo RES;?>/images/face/63.gif" alt="玫瑰" onclick="jsbq('玫瑰')"></li>
<li><img src="<?php echo RES;?>/images/face/64.gif" alt="凋谢" onclick="jsbq('凋谢')"></li>
<li><img src="<?php echo RES;?>/images/face/65.gif" alt="示爱" onclick="jsbq('示爱')"></li>
<li><img src="<?php echo RES;?>/images/face/66.gif" alt="爱心" onclick="jsbq('爱心')"></li>
<li><img src="<?php echo RES;?>/images/face/67.gif" alt="心碎" onclick="jsbq('心碎')"></li>
<li><img src="<?php echo RES;?>/images/face/68.gif" alt="蛋糕" onclick="jsbq('蛋糕')"></li>
<li><img src="<?php echo RES;?>/images/face/69.gif" alt="闪电" onclick="jsbq('闪电')"></li>
<li><img src="<?php echo RES;?>/images/face/70.gif" alt="炸弹" onclick="jsbq('炸弹')"></li>
<li><img src="<?php echo RES;?>/images/face/71.gif" alt="刀" onclick="jsbq('刀')"></li>
<li><img src="<?php echo RES;?>/images/face/72.gif" alt="足球" onclick="jsbq('足球')"></li>
<li><img src="<?php echo RES;?>/images/face/73.gif" alt="瓢虫" onclick="jsbq('瓢虫')"></li>
<li><img src="<?php echo RES;?>/images/face/74.gif" alt="便便" onclick="jsbq('便便')"></li>
<li><img src="<?php echo RES;?>/images/face/75.gif" alt="月亮" onclick="jsbq('月亮')"></li>
<li><img src="<?php echo RES;?>/images/face/76.gif" alt="太阳" onclick="jsbq('太阳')"></li>
<li><img src="<?php echo RES;?>/images/face/77.gif" alt="礼物" onclick="jsbq('礼物')"></li>
<li><img src="<?php echo RES;?>/images/face/78.gif" alt="拥抱" onclick="jsbq('拥抱')"></li>
<li><img src="<?php echo RES;?>/images/face/79.gif" alt="强" onclick="jsbq('强')"></li>
<li><img src="<?php echo RES;?>/images/face/80.gif" alt="弱" onclick="jsbq('弱')"></li>
<li><img src="<?php echo RES;?>/images/face/81.gif" alt="握手" onclick="jsbq('握手')"></li>
<li><img src="<?php echo RES;?>/images/face/82.gif" alt="胜利" onclick="jsbq('胜利')"></li>
<li><img src="<?php echo RES;?>/images/face/83.gif" alt="抱拳" onclick="jsbq('抱拳')"></li>
<li><img src="<?php echo RES;?>/images/face/84.gif" alt="勾引" onclick="jsbq('勾引')"></li>
<li><img src="<?php echo RES;?>/images/face/85.gif" alt="拳头" onclick="jsbq('拳头')"></li>
<li><img src="<?php echo RES;?>/images/face/86.gif" alt="差劲" onclick="jsbq('差劲')"></li>
<li><img src="<?php echo RES;?>/images/face/87.gif" alt="爱你" onclick="jsbq('爱你')"></li>
<li><img src="<?php echo RES;?>/images/face/88.gif" alt="NO" onclick="jsbq('NO')"></li>
<li><img src="<?php echo RES;?>/images/face/89.gif" alt="OK" onclick="jsbq('OK')"></li>
<li><img src="<?php echo RES;?>/images/face/90.gif" alt="爱情" onclick="jsbq('爱情')"></li>
<li><img src="<?php echo RES;?>/images/face/91.gif" alt="飞吻" onclick="jsbq('飞吻')"></li>
<li><img src="<?php echo RES;?>/images/face/92.gif" alt="跳跳" onclick="jsbq('跳跳')"></li>
<li><img src="<?php echo RES;?>/images/face/93.gif" alt="发抖" onclick="jsbq('发抖')"></li>
<li><img src="<?php echo RES;?>/images/face/94.gif" alt="怄火" onclick="jsbq('怄火')"></li>
<li><img src="<?php echo RES;?>/images/face/95.gif" alt="转圈" onclick="jsbq('转圈')"></li>
<li><img src="<?php echo RES;?>/images/face/96.gif" alt="磕头" onclick="jsbq('磕头')"></li>
<li><img src="<?php echo RES;?>/images/face/97.gif" alt="回头" onclick="jsbq('回头')"></li>
<li><img src="<?php echo RES;?>/images/face/98.gif" alt="跳绳" onclick="jsbq('跳绳')"></li>
<li><img src="<?php echo RES;?>/images/face/99.gif" alt="挥手" onclick="jsbq('挥手')"></li>
<li><img src="<?php echo RES;?>/images/face/100.gif" alt="激动" onclick="jsbq('激动')"></li>
<li><img src="<?php echo RES;?>/images/face/101.gif" alt="街舞" onclick="jsbq('街舞')"></li>
<li><img src="<?php echo RES;?>/images/face/102.gif" alt="献吻" onclick="jsbq('献吻')"></li>
<li><img src="<?php echo RES;?>/images/face/103.gif" alt="左太极" onclick="jsbq('左太极')"></li>
</ul>
</li>
</ul>
</div>
<script type="text/javascript">
function jsbq(srt){
document.getElementById("Hfcontent").value=document.getElementById("Hfcontent").value+"/"+srt;
}
</script>


</td><td valign="top">
</tr>
</table>
</form>
      </div>
        </div>

        <div class="clr"></div>
      </div>
    </div>
  </div>
  <script>
$(document).ready( function(){ 
$('.checkall').click(function(){

$('.checkitem').each(function(){
$(this).attr('checked',$('.checkall').attr('checked'));
});
});

});
  </script>
  <!--底部-->
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