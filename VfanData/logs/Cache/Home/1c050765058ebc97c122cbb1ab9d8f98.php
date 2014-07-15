<?php if (!defined('THINK_PATH')) exit();?><!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml" xmlns:wb="http://open.weibo.com/wb">
<head>
<meta http-equiv="Content-Type" content="text/html;charset=utf-8"/>
<title><?php echo C('site_title');?> <?php echo C('site_name');?></title>
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
    <div class="banner">
        <div id="slide"></div>
    </div>
    <div class="main">
        <div class="main-top">
            <a target="_blank" href="javascript:void(0)" >
                    <div class="pic"><img src="<?php echo RES;?>/images/13850268737627.png" /></div>
                    <div class="text">
                        <P class="text-title">微3G网站</P>
                        <P class="text-content">微赢销全国首创微3G网站，超出60个精美模板，还有自定义模板可为商家单独设计，服务号和订阅号都可以使用。</P>
                        <p class="text-link">详情>></p>
                    </div>
                </a><a target="_blank" href="javascript:void(0)" >
                    <div class="pic"><img src="<?php echo RES;?>/images/13850270219865.png" /></div>
                    <div class="text">
                        <P class="text-title">微活动</P>
                        <P class="text-content">优惠券、幸运大转盘、刮刮乐等活动吸引用户参与、增强用户沉淀、带动周边朋友一起分享，从而形成口碑营销效果。</P>
                        <p class="text-link">详情>></p>
                    </div>
                </a><a target="_blank" href="javascript:void(0)" >
                    <div class="pic"><img src="<?php echo RES;?>/images/13850270941561.png" /></div>
                    <div class="text">
                        <P class="text-title">自定义图文回复</P>
                        <P class="text-content">小黄鸡陪聊，可轻松查询天气、火车路线等信息，还可设置关键词自动回复，让你的用户在无聊时想起你。</P>
                        <p class="text-link">详情>></p>
                    </div>
                </a><a target="_blank" href="javascript:void(0)" class="main-top-app">
                    <div class="pic"><img src="<?php echo RES;?>/images/13850283261163.png" /></div>
                    <div class="text">
                        <P class="text-title">自定义菜单</P>
                        <P class="text-content">用户无需再通过输入关键词触发回复，直接点击菜单就可看相关内容，并能定制个性化功能，带给粉丝更好更直观的感受。</P>
                        <p class="text-link">详情>></p>
                    </div>
                </a><a target="_blank" href="javascript:void(0)" >
                    <div class="pic"><img src="<?php echo RES;?>/images/13850280782680.png" /></div>
                    <div class="text">
                        <P class="text-title">微会员卡</P>
                        <P class="text-content">在微信内植入会员卡，用户携带方便，商家的微信会员管理平台也永存用户的消费记录，企业日后精准营销更简单。</P>
                        <p class="text-link">详情>></p>
                    </div>
                </a><a target="_blank" href="javascript:void(0)" >
                    <div class="pic"><img src="<?php echo RES;?>/images/13850279931858.png" /></div>
                    <div class="text">
                        <P class="text-title">微预约</P>
                        <P class="text-content">微预约是支持在线预约的一种服务，尤其适用于汽车、房产、酒店、医疗、餐饮、KTV等行业，操作简单，反应快捷。</P>
                        <p class="text-link">详情>></p>
                    </div>
                </a><a target="_blank" href="javascript:void(0)" >
                    <div class="pic"><img src="<?php echo RES;?>/images/13853692493523.png" /></div>
                    <div class="text">
                        <P class="text-title">微商城</P>
                        <P class="text-content">微商城可支持线上下单、线下消费，有独立的后台管理系统，能支持商家超过50个SKU的在线展示。</P>
                        <p class="text-link">详情>></p>
                    </div>
                </a><a target="_blank" href="javascript:void(0)" class="main-top-app">
                    <div class="pic"><img src="<?php echo RES;?>/images/1385369271568.png" /></div>
                    <div class="text">
                        <P class="text-title">微团购</P>
                        <P class="text-content">微团购实现了从：下订单-订单码生成-用户到店消费-商家验证-数据结算的整个流程，完全吸纳了线上预订、线下消费的体验形式。</P>
                        <p class="text-link">详情>></p>
                    </div>
                </a>        </div>
        <div class="main-center">
            <div class="weibo">
                <h2>经典案例
                    <a href="/" style="float:right; display: block;font-size:12px; padding-right:20px;color:#090;font-weight: normal;" target="_blank">更多>></a>
                </h2>
                <div class="weibo-list">
                    <a href="javascript:void(0)" id="case75" title="红旗家具">
                            <p><img src="<?php echo RES;?>/images/13832870083475.jpg" style='height: 88px;width: 88px;'/></p>
                            <p>红旗家具</p>
                        </a><a href="javascript:void(0)" id="case46" title="金鑫国际家居珞瑜路购物广场">
                            <p><img src="<?php echo RES;?>/images/13838101196247.jpg" style='height: 88px;width: 88px;'/></p>
                            <p>金鑫国际家居</p>
                        </a><a href="javascript:void(0)" id="case59" title="欧亚达建材家居汉阳店">
                            <p><img src="<?php echo RES;?>/images/13829642886609.jpg" style='height: 88px;width: 88px;'/></p>
                            <p>欧亚达建材家</p>
                        </a><a href="javascript:void(0)" id="case80" title="Yes i DO许愿蛋糕">
                            <p><img src="<?php echo RES;?>/images/13832951695578.jpg" style='height: 88px;width: 88px;'/></p>
                            <p>YeiDO许</p>
                        </a><a href="javascript:void(0)" id="case58" title="麦咭客KTV">
                            <p><img src="<?php echo RES;?>/images/13829636898336.jpg" style='height: 88px;width: 88px;'/></p>
                            <p>麦咭客KTV</p>
                        </a><a href="javascript:void(0)" id="case78" title="西财同学活动部">
                            <p><img src="<?php echo RES;?>/images/13838104443952.jpg" style='height: 88px;width: 88px;'/></p>
                            <p>西财同学活动</p>
                        </a><a href="javascript:void(0)" id="case47" title="生活家装饰">
                            <p><img src="<?php echo RES;?>/images/13828796753912.jpg" style='height: 88px;width: 88px;'/></p>
                            <p>生活家装饰</p>
                        </a><a href="javascript:void(0)" id="case77" title="西财同学外联部">
                            <p><img src="<?php echo RES;?>/images/13838104161263.jpg" style='height: 88px;width: 88px;'/></p>
                            <p>西财同学外联</p>
                        </a>
						                </div>
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
</body>
</html>

    <script type="text/javascript">
        window.navid = 0;

        $("#slide").jdSlide({
            width: 1170, height: 483,
            pics: [
                {src: "<?php echo RES;?>/images/banner-4.jpg", href: "/", alt: "", breviary: "#", type: "img"},
                {src: "<?php echo RES;?>/images/banner-4.jpg", href: "/", alt: "", breviary: "#", type: "img"},
                {src: "<?php echo RES;?>/images/banner-4.jpg", href: "/", alt: "", breviary: "#", type: "img"},
                {src: "<?php echo RES;?>/images/banner-4.jpg", href: "/", alt: "", breviary: "#", type: "img"}
            ]
        });

        /*选项卡*/
        $(".more").find("a").attr("href", "/index.php/Home/Index/feedback.html");
        $(".news-content").eq(0).css({"display": "block"});
        $(".news-top li").hover(function() {
            $(this).addClass('hover').siblings('li').removeClass('hover');
            var index = $(this).index();
            $(".news-content").css('display', 'none').eq(index).css('display', 'block');
            if (index == 0) {
                $(".more").find("a").attr("href", "/index.php/Home/Index/feedback.html");
            }
            if (index == 1) {
                $(".more").find("a").attr("href", "/index.php/Home/Index/media/id/13.html");
            }
            if (index == 2) {
                $(".more").find("a").attr("href", "/index.php/Home/Index/media/id/2.html");
            }
        });
    </script>
    <!--弹框-->
    <script>
        $(function() {
            $(".xx").click(function() {
                $(".banner-scroll").empty();
                $(".banner-scroll").css('left', '0');
                $(".popup-prve").unbind();
                $(".popup-next").unbind();
                $(".popup").fadeOut();
            });

            /*-----------轮播-------------*/
            var gotoscoll = function() {
                window.a = 1;
                var len = $(".banner-scroll").find("img").length;
                var wid = $(".banner-scroll").find("img").width();
                $(".popup-prve").click(function() {
                    if (!$(".banner-scroll").is(":animated")) {
                        if (window.a <= 1) {
                            $('.banner-scroll').stop(true).animate({'left': '-=' + wid * 3});
                            window.a = len;
                        } else {
                            $(".banner-scroll").stop(true).animate({"left": "+=" + wid}, 300);
                            window.a--;
                        }
                    }
                });
                $(".popup-next").click(function() {
                    if (!$(".banner-scroll").is(":animated")) {
                        if (len == window.a) {
                            window.a = 1;
                            $('.banner-scroll').stop(true).animate({"left": "0"});
                        } else {
                            $('.banner-scroll').stop(true).animate({"left": '-=' + wid}, 300);
                            window.a++;
                        }
                    }

                });
            }
        });
    </script>