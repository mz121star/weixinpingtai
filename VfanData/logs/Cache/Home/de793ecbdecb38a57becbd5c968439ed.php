<?php if (!defined('THINK_PATH')) exit();?>﻿<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml" xmlns:wb="http://open.weibo.com/wb">
<head>
<meta http-equiv="Content-Type" content="text/html;charset=utf-8"/>
<title>关于我们 - <?php echo C('site_title');?> <?php echo C('site_name');?></title>
<meta name="keywords" content="<?php echo C('keyword');?>" />
<meta name="description" content="<?php echo C('content');?>" />
<link href="<?php echo RES;?>/css/style.css" rel="stylesheet" type="text/css" />
<link href="<?php echo RES;?>/css/css.css" rel="stylesheet" type="text/css" />
</head>
<body>
<div class="container">
<div class="header">
    <div class="header-left">
        <a href="/" class="logo"><img src="<?php echo RES;?>/images/logo-vfancms.png" /> </a>
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
			<a href="<?php echo U('System/Admin/logout');?>" >退出</a><?php endif; ?>
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
    <div class="top">
        <div class="top-container">
            <div class="top-left">
                <p class="top-text1">ABOUT US</p>
                <p class="top-title">关于我们</p>
                <div>
                    <p>最专业的企业微信营销服务平台</p>
                    <p>联系电话：027-XXXXXXX/027-XXXXXXX</p>
                </div>
            </div>

            <p class="top-img"><img src="<?php echo RES;?>/images/icon1.png"style="margin-top: 26px" /></p>
        </div>
    </div>

    <div class="center">
        <div class="center-right">
            <div class="about-main">
                        <p>
<?php echo C('site_name');?> 志在帮助那些不懂技术的个人或企业建立属于自己的接口程序，让完全不懂技术的个人或企业通过简单的配置，即可拥有强大的功能。企业使用<?php echo C('site_name');?> 可
以用低廉的成本实现智能客服机器人功能，淘宝店家可以轻松实现店铺商品和粉丝的关联与互动，我们也即将为微信地方号运维人员提供强大的地方运维的管理功能
模块（如商家管理,店铺管理,会员管理,活动管理,优惠券管理,以及基于LBS的各种服务的开发!）</p>
                        <p>微范(vfan)微信不提供文章内容库，避免同质化的内容泛滥，同时<?php echo C('site_name');?> 对用户有门槛要求，必须拥有自己
的域名空间。<?php echo C('site_name');?> 为个人或企业提供了强大的自定义回复及图文信息分类功能，通过此功能能更好做出属于自己或企业特色的内容，并自动建立一个个人或企业
手机3G网站，更好的服务于您的客户。</p>
<p><?php echo C('site_name');?> 还提供了一些便民查询和娱乐游戏功能供个人或企业使用，如：查天气，查快递，翻译，百科，人品计算，手机归属地查询，笑话，成语接龙，公交查询，谜语，百度问答，解梦，古诗欣赏等等，根据需求的不同选择某些功能，能更好的提高粉丝活跃度，忠诚度。</p>
<p><?php echo C('site_name');?> 除了自定义库,也支持自定义关键词触发指定接口url处理业务(完美的兼容第三方微信接口和自己的业务接口)即可实现和你们自己的数据库的信息通信!  
                      </p>
					  </div>
        </div>
    </div>
<div class="footer">
    <div class="footer-bottom">
        <div>
            <p><?php echo C('site_name');?> 版权所有  Copyright © 2013 All Rights Reserved.</p>
            <p class="ipc"><a href="http://www.miitbeian.gov.cn" target="_blank" rel="nofollow"><?php echo C('ipc');?></a></p>
        </div>
    </div>
    <script type="text/javascript" src="<?php echo RES;?>/js/jquery-1.2.6.pack.js"></script>
    <script type="text/javascript" src="<?php echo RES;?>/js/jquery.js"></script>
    <script type="text/javascript" src="<?php echo RES;?>/js/js.js"></script>
    <script type="text/javascript" src="<?php echo RES;?>/js/g.base.js"></script>
</div>
</div>
</body>
</html>