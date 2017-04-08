<?php if (!defined('THINK_PATH')) exit();?><!DOCTYPE html>
<html lang="cn">
<head>

    <!-- Meta -->
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <!-- Favicon -->
    <!--<link rel="shortcut icon" href="__IMA__/favicon.png">-->

    <!-- Style -->
    <link rel="stylesheet" href="/whedencms/Public/Home/css/theme.css">
    <link rel="stylesheet" href="/whedencms/Public/Home/css/erweima.css">

    <link rel="alternate stylesheet" href="/whedencms/Public/Home/css/theme-persimmon.css" title="theme-persimmon">
    <link rel="alternate stylesheet" href="/whedencms/Public/Home/css/theme-atomic-tangerine.css" title="theme-atomic-tangerine">
    <link rel="alternate stylesheet" href="/whedencms/Public/Home/css/theme-yellow-sea.css" title="theme-yellow-sea">
    <link rel="alternate stylesheet" href="/whedencms/Public/Home/css/theme-rio-grande.css" title="theme-rio-grande">
    <link rel="alternate stylesheet" href="/whedencms/Public/Home/css/theme-vida-loca.css" title="theme-vida-loca">
    <link rel="alternate stylesheet" href="/whedencms/Public/Home/css/theme-mountain-meadow.css" title="theme-mountain-meadow">
    <link rel="alternate stylesheet" href="/whedencms/Public/Home/css/theme-java.css" title="theme-java">
    <link rel="alternate stylesheet" href="/whedencms/Public/Home/css/theme-mariner.css" title="theme-mariner">
    <link rel="alternate stylesheet" href="/whedencms/Public/Home/css/theme-medium-purple.css" title="theme-medium-purple">
    <link rel="alternate stylesheet" href="/whedencms/Public/Home/css/theme-lavender-magenta.css" title="theme-lavender-magenta">
    <link rel="alternate stylesheet" href="/whedencms/Public/Home/css/footerfont.css" title="footerfont">
    <link rel="alternate stylesheet" href="/whedencms/Public/Home/css/erweima.css" title="footerfont">
    <link href="/whedencms/Public/Home/css/style.css" rel="stylesheet">
    <link href="/whedencms/Public/Home/css/shake.css" rel="stylesheet">

    <link rel="shortcut icon" href="favicon.ico">

</head>
<body>

<!-- 头部 -->
<header id="home" class="header">

    <!-- 导航 -->
    <nav id="navigation" class="navbar affix">

        <!-- 公司信息 -->
        <div class="information hidden-sm hidden-xs">
            <div class="container">
                <div class="row">

                    <!-- 地址电话 -->
                    <div class="col-md-7">
                        <a href="<?php echo U('contact/baidumap');?>" class="iframe-popup"><span class="icon icon_pin_alt"></span>
                            东莞市南城商务大厦1506</a>
                        <a href="#"><span class="icon icon_mail_alt"></span>wheden@wheden.com</a>
                        <a href="#"><span class="icon icon_phone"></span>0769-89865500</a>
                    </div>
                    <!-- /反馈 -->

                    <!--社交软件 -->
                    <div class="col-md-5">
                        <ul class="social">
                            <li><a href="http://wpa.qq.com/msgrd?v=3&uin=710201459&site=qq&menu=yes"  target="_blank" class="fa fa-fw fa-qq"></a></li>
                            <li><a href="#" class="fa fa-fw fa-wechat"></a></li>
                            <li><a href="#" class="fa fa-fw fa-weibo"></a></li>
                        </ul>
                    </div>
                    <!-- /社会 -->

                </div>
            </div>
        </div>
        <!-- /公司信息 -->

        <div class="container">

            <div class="row">
                <div class="col-md-12">

                    <!-- 导航标题 -->
                    <div class="navbar-header">

                        <!-- 切换按钮 -->
                        <button type="button"
                                class="navbar-toggle collapsed"
                                data-toggle="collapse"
                                data-target="#main-menu"
                                aria-expanded="false"
                                aria-controls="main-menu">

                            <span class="sr-only">切换导航</span>
                            <span class="icon-bar"></span>
                            <span class="icon-bar"></span>
                            <span class="icon-bar"></span>

                        </button>
                        <!-- /切换按钮 -->

                        <!-- 品牌 -->
                        <a href="#" class="brand">

                            <!-- 商标 -->
                            <img src="/whedencms/Public/Home/images/logo.png" class="logo-big" alt="">
                            <!-- /商标 -->

                            <!-- Logo Small -->
                            <img src="/whedencms/Public/Home/images/logo-small.png" class="logo-small" alt="">
                            <!-- /Logo Small -->

                        </a>
                        <!-- /品牌 -->

                    </div>
                    <!-- /导航标题 -->

                    <!-- Navigation -->
                    <div id="main-menu" class="navbar-collapse collapse">
                        <ul class="nav navbar-nav navbar-right">
                            <li><a href="<?php echo U('Index/index');?>">首页</a></li>
                            <li class="dropdown">
                                <a href="<?php echo U('about/about');?>" class="dropdown-toggle">关于维登</a>
                                <ul class="dropdown-menu">
                                    <li><a href="<?php echo U('about/zhaopin');?>">招聘信息</a></li>
                                    <li><a href="<?php echo U('about/lists');?>">公司环境</a></li>
                                </ul>
                            </li>
                            <li class="dropdown">
                                <a href="<?php echo U('service/service');?>" class="dropdown-toggle">服务范围</a>
                            </li>
                            <li class="dropdown">
                                <a href="<?php echo U('news/news');?>" class="dropdown-toggle">新闻资讯</a>
                            </li>
                            <li class="dropdown">
                                <a href="<?php echo U('cases/cases');?>" class="dropdown-toggle">项目案例</a>
                            </li>
                            <li><a href="<?php echo U('contact/contact');?>">联系我们</a></li>
                        </ul>
                    </div>
                    <!-- /导航 -->

                </div>
            </div>

        </div>
    </nav>
    <!-- /导航 -->



</header>
<!-- /Header -->
<head>

    <!-- Page title -->
    <title>服务</title>

    <!-- Meta -->
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <style>
        .media-left span, .title {cursor:pointer;}
    </style>


</head>

<!-- 预加载 -->
<div id="preloader">
<div class="loader"></div>
</div>
<!-- /预加载 -->

<!-- Section: Page Header -->
<section class="section-page-header" style="background-image:url(/whedencms/Public/Home/images/b2.jpg)">
</section>
<!-- /Section: Page Header -->

<!-- 服务： -->
<div style="background-color: rgba(217, 237, 247, 0.19)">
    <div class="container" >

        <!-- 小标题 -->
        <!-- Section Header -->
        <div class="row" style="padding-top: 3%">
            <div class="hs">
                    <h2 class="title" align="center" style="font-size: 32px;">网站设计</h2>
                    <h4 align="center" >WEB <span class="text-theme">DESIGN</span></h4>
            </div>
        </div>
        <!-- /Section Header -->
        <!-- /小标题 -->

        <div class="row">

            <p class="description ji-zhong">
                我们的宗旨：创新、务实、诚信，共赢。我们的追求：塑企业形象，创优质品牌。<br/>
                分析html文件，确定整体开发思路

                后台系统基本设置，新建栏目分离出头部和尾部文件，以及其他的公共文件

                程序框架基本配置，数据表的确定分配相应的页面每个栏目页面的功能开发

            </p>
            <!-- Feature Block -->
            <div class="col-sm-4 feature fadeIn wow" data-wow-duration="1.3s">
                <span class="tp" ><img class="img5" src="/whedencms/Public/Home/images/jieko.png"></span>
                <div class="h3 title wzjs ys">接口服务</div>
            </div>
            <!-- /Feature Block -->

            <!-- Feature Block -->
            <div class="col-sm-4 feature fadeIn wow" data-wow-duration="1.3s" data-wow-delay="0.4s">
                <span class="tp" ><img src="/whedencms/Public/Home/images/WeChat.png"></span>
                <div class="h3 title wzjs ys">微信公众号</div>
            <!-- /Feature Block -->
            </div>

            <!-- Feature Block -->
            <div class="col-sm-4 feature fadeIn wow" data-wow-duration="1.3s" data-wow-delay="0.8s">
                <span class="tp" ><img src="/whedencms/Public/Home/images/Computer.png"></span>
                <div class="h3 title wzjs ys">网站建设及优化</div>
            </div>
            <!-- /功能块 -->

            <!-- Feature Block -->
            <div class="col-sm-4 feature fadeIn wow" data-wow-duration="1.3s" data-wow-delay="0.8s">
                <span class="tp" ><img src="/whedencms/Public/Home/images/move.png"></span>
                <div class="h3 title wzjs ys">APP商城</div>
            </div>
            <!-- /功能块 -->

        </div>
    </div>
</div>
<!-- /服务 -->

<!-- Main -->
<section id="about" class="section fuwu-bg">
<main class="main-container " style="height: 630px">
    <div class="container">

        <!-- Section Header -->
        <div class="row">
            <div class="hs">
                    <p class="">服务详情</p>

            </div>
        </div>
        <!-- /Section Header -->

            <!-- Services -->
            <div class="row">
                 <div class="slideTxtBox">
                    <div class="hd">
                        <ul>

                            <li>
                                <!-- Feature Block -->
                                <div class="col-sm-4 feature fadeIn wow hdtp" data-wow-duration="1.3s" data-wow-delay="0.8s">
                                    <div style="height: 140px">
                                        <span class="tu-biao" >
                                            <img class="img3" style="width:40%;" src="/whedencms/Public/Home/images/pc.png"></span>
                                    </div>
                                        <div class="h3 title ys">PC端</div>
                                </div>
                                <!-- /功能块 -->
                            </li>

                            <li>
                                <!-- Feature Block -->
                                <div class="col-sm-4 feature fadeIn wow hdtp" data-wow-duration="1.3s" data-wow-delay="0.8s">
                                    <div style="height: 140px">
                                    <span class="tu-biao" ><img class="img1" style="width:40%;" src="/whedencms/Public/Home/images/yd.png"></span>
                                    </div>
                                    <div class="h3 title ys">移动应用</div>
                                </div>
                                <!-- /Feature Block -->
                            </li>
                            <li>
                                <!-- Feature Block -->
                                <div class="col-sm-4 feature fadeIn wow hdtp" data-wow-duration="1.3s" data-wow-delay="0.8s">
                                    <div style="height: 140px">
                                    <span class="tu-biao" ><img class="img2" style="width:40%;" src="/whedencms/Public/Home/images/wx.png"></span>
                                        </div>
                                    <div class="h3 title ys">微信二次开发</div>
                                </div>
                                <!-- /Feature Block -->
                            </li>

                            <li>
                                <!-- Feature Block -->
                                <div class="col-sm-4 feature fadeIn wow hdtp" data-wow-duration="1.3s" data-wow-delay="0.8s">
                                    <div style="height: 140px">
                                    <span class="tu-biao" ><img class="img4" style="width:40%;" src="/whedencms/Public/Home/images/wh.png"></span>
                                        </div>
                                    <div class="h3 title ys">运营维护</div>
                                </div>
                                <!-- /功能块 -->
                            </li>

                        </ul>
                    </div>
                    <div class="bd" >

                        <ul>
                            <!-- Panels -->
                            <div class="col-md-4">

                                <h3 class="title ys">PC开发项目</h3>

                                <div class="panel-group" id="accordion">

                                    <div class="panel panel-theme">
                                        <div class="panel-heading">
                                            <h4 class="panel-title">
                                                <a class="" data-toggle="collapse" data-parent="#accordion" href="#faq-01">
                                                    <i class="fa fa-fw fa-mobile-phone"></i>
                                                    商城平台开发
                                                    <i class="fa fa-fw fa-angle-down collapse-icon"></i>
                                                </a>
                                            </h4>
                                        </div>
                                        <div id="faq-01" class="panel-collapse collapse in">
                                            <div class="panel-body">
                                                海量网站风格界面，满足您个性化要求
                                            </div>
                                        </div>
                                    </div>

                                    <div class="panel panel-theme">
                                        <div class="panel-heading">
                                            <h4 class="panel-title">
                                                <a class="collapsed" data-toggle="collapse" data-parent="#accordion" href="#faq-02">
                                                    <i class="fa fa-fw fa-paper-plane-o"></i>
                                                    软件系统开发
                                                    <i class="fa fa-fw fa-angle-down collapse-icon"></i>
                                                </a>
                                            </h4>
                                        </div>
                                        <div id="faq-02" class="panel-collapse collapse">
                                            <div class="panel-body">
                                                强大的数据分析，让您了如指掌
                                            </div>
                                        </div>
                                    </div>

                                    <div class="panel panel-theme">
                                        <div class="panel-heading">
                                            <h4 class="panel-title">
                                                <a class="collapsed" data-toggle="collapse" data-parent="#accordion" href="#faq-03">
                                                    <i class="fa fa-fw fa-paint-brush"></i>
                                                    品牌型网站开发
                                                    <i class="fa fa-fw fa-angle-down collapse-icon"></i>
                                                </a>
                                            </h4>
                                        </div>
                                        <div id="faq-03" class="panel-collapse collapse">
                                            <div class="panel-body">
                                                网站联盟CPS功能，非常完善的营销联盟系统，非常高效和清晰的管理自已的营销团队，为后期的网络营销打造完美的管理平台；
                                            </div>
                                        </div>
                                    </div>

                                    <div class="panel panel-theme">
                                        <div class="panel-heading">
                                            <h4 class="panel-title">
                                                <a class="collapsed" data-toggle="collapse" data-parent="#accordion" href="#faq-04">
                                                    <i class="fa fa-fw fa-gears"></i>
                                                    营销型网站开发
                                                    <i class="fa fa-fw fa-angle-down collapse-icon"></i>
                                                </a>
                                            </h4>
                                        </div>
                                        <div id="faq-04" class="panel-collapse collapse">
                                            <div class="panel-body">
                                                支付国内外所有在线支付系统（如支付宝、财付通、PayPal、环迅IPS、快钱、网银、贝宝等）数量达十多种；
                                            </div>
                                        </div>
                                    </div>

                                </div>
                            </div>
                            <!-- /Panels -->

                            <!-- Features -->
                            <div class="col-md-8">
                                <div class="row">

                                    <h3 class="title ys">行业（门户）网站开发</h3>
                                    <p class="wenzi">
                                        有了电脑，我们可以快速获取到各种信息，如果这个利用好的话，把它当成一个学习的工具，那是相当有帮助的。我每天起来都是要用电脑看各种新闻的，第一时间了解各方面的新闻，有助于我们开阔思维，紧跟时政，能够把握当下，甚至对未来有一定的预测，那么这非常有助于创业或是做生意的朋友，可以快速了解到国家的新政策，及时享受到一些福利待遇等。
                                    </p>
                                    <p class="wenzi">带来大量商机和创业的机会，大量的互联网公司如雨后春笋般出现，大家都知道淘宝，造就了很多富翁，这些都是个人创业者，互联网也造就了很多大型公司，比如百度。而且现在越来越多的人也加入到互联网创业中来了，有的是全职，有的是兼职，不管是哪一种，都是能够在互联网上体现一些自己的价值而赚钱。
                                    </p>

                                </div>
                            </div>
                            <!-- /Features -->
                        </ul>

                        <ul>
                            <div class="row mt">

                                <!-- Panels -->
                                <div class="col-md-4">

                                    <h3 class="title ys">Android开发服务</h3>

                                    <div class="panel-group" id="accordion01">

                                        <div class="panel panel-theme">
                                            <div class="panel-heading">
                                                <h4 class="panel-title">
                                                    <a class="" data-toggle="collapse" data-parent="#accordion01" href="#faq-05">
                                                        <i class="fa fa-fw fa-mobile-phone"></i>
                                                        android应用开发
                                                        <i class="fa fa-fw fa-angle-down collapse-icon"></i>
                                                    </a>
                                                </h4>
                                            </div>
                                            <div id="faq-05" class="panel-collapse collapse in">
                                                <div class="panel-body">
                                                    移动交互体验
                                                </div>
                                            </div>
                                        </div>

                                        <div class="panel panel-theme">
                                            <div class="panel-heading">
                                                <h4 class="panel-title">
                                                    <a class="collapsed" data-toggle="collapse" data-parent="#accordion01" href="#faq-06">
                                                        <i class="fa fa-fw fa-paper-plane-o"></i>
                                                        手机应用开发
                                                        <i class="fa fa-fw fa-angle-down collapse-icon"></i>
                                                    </a>
                                                </h4>
                                            </div>
                                            <div id="faq-06" class="panel-collapse collapse">
                                                <div class="panel-body">
                                                    与PC数据同步
                                                </div>
                                            </div>
                                        </div>

                                        <div class="panel panel-theme">
                                            <div class="panel-heading">
                                                <h4 class="panel-title">
                                                    <a class="collapsed" data-toggle="collapse" data-parent="#accordion01" href="#faq-07">
                                                        <i class="fa fa-fw fa-paint-brush"></i>
                                                        android电商平台开发
                                                        <i class="fa fa-fw fa-angle-down collapse-icon"></i>
                                                    </a>
                                                </h4>
                                            </div>
                                            <div id="faq-07" class="panel-collapse collapse">
                                                <div class="panel-body">
                                                    全兼容手机,量身定制
                                                </div>
                                            </div>
                                        </div>



                                    </div>
                                </div>
                                <!-- /Panels -->

                                <!-- Features -->
                                <div class="col-md-8">
                                    <div class="row">

                                        <h3 class="title ys">安卓APP建设</h3>
                                        <p class="wenzi">
                                            在优势方面,Android平台首先就是其开发性,开发的平台允许任何移动终端厂商加入到Android联盟中来.显著的开放性可以使其拥有更多的开发者,随着用户和应用的日益丰富,一个崭新的平台也将很快走向成熟开发性对于Android的发展而言,有利于积累人气,这里的人气包括消费者和厂商,而对于消费者来讲,随大的受益正是丰富的软件资源.开放的平台也会带来更大竞争,如此一来,消费者将可以用更低的价位购得心仪的手机.
                                        </p>
                                        <p class="wenzi">
                                            Android平台提供给第三方开发商一个十分宽泛.自由的环境,不会受到各种条条框框的阻扰,可想而知,会有多少新颖别致的软件会诞生.但也有其两面性,血腥.暴力.情色方面的程序和游戏如可控制正是留给Android难题之一.
                                        </p>

                                    </div>
                                </div>
                                <!-- /Features -->
                            </div>
                        </ul>

                        <ul>
                            <div class="row mt">

                                <!-- Panels -->
                                <div class="col-md-4">

                                    <h3 class="title ys">微信二次开发服务</h3>

                                    <div class="panel-group" id="accordion02">

                                        <div class="panel panel-theme">
                                            <div class="panel-heading">
                                                <h4 class="panel-title">
                                                    <a class="" data-toggle="collapse" data-parent="#accordion02" href="#faq-10">
                                                        <i class="fa fa-fw fa-mobile-phone"></i>
                                                        微信应用小程序
                                                        <i class="fa fa-fw fa-angle-down collapse-icon"></i>
                                                    </a>
                                                </h4>
                                            </div>
                                            <div id="faq-10" class="panel-collapse collapse in">
                                                <div class="panel-body">
                                                    量身定制高大上的微信小程序
                                                </div>
                                            </div>
                                        </div>

                                        <div class="panel panel-theme">
                                            <div class="panel-heading">
                                                <h4 class="panel-title">
                                                    <a class="collapsed" data-toggle="collapse" data-parent="#accordion02" href="#faq-11">
                                                        <i class="fa fa-fw fa-paper-plane-o"></i>
                                                        微信支付接口
                                                        <i class="fa fa-fw fa-angle-down collapse-icon"></i>
                                                    </a>
                                                </h4>
                                            </div>
                                            <div id="faq-11" class="panel-collapse collapse">
                                                <div class="panel-body">
                                                    扫码支付，方便快捷
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                                <!-- /Panels -->

                                <!-- Features -->
                                <div class="col-md-8">
                                    <div class="row">

                                        <h3 class="title ys">微信二次开发建设</h3>
                                        <p class="wenzi">
                                            第一点，传播力。我们都知道，微信是一款面向大众的聊天和平台工具，所以，只要在微信开发后，商家拥有了微信后，微信上的一条信息，就会传遍整个微信平台，从而达到宣传力的效果，如此强大的宣传力度和传播力度，为公司和商家带来了更大的发展优势，小小的微信，能够开启更大的经济市场。
                                        </p>
                                        <p class="wenzi">
                                            第二点，互动性。因为微信开发后是一种面向公众的平台，所以，在互动效果上，它们要比QQ或者是其他聊天工具都有着极大的优势，尤其是在自动回复的功能上，更为先进和便捷，也正是因为如此，对于商家们来说，在微信开发后，对于客户或者是顾客的相关咨询或者是需求，或者是其他行为，都有了一定的互动性，达到了商民亲和的效果。
                                        </p>

                                    </div>
                                </div>
                                <!-- /Features -->
                            </div>
                        </ul>

                        <ul>
                            <div class="row mt">

                                <!-- Panels -->
                                <div class="col-md-4">

                                    <h3 class="title ys">iOS开发服务</h3>

                                    <div class="panel-group" id="accordion03">

                                        <div class="panel panel-theme" >
                                            <div class="panel-heading">
                                                <h4 class="panel-title">
                                                    <a class="" data-toggle="collapse" data-parent="#accordion03" href="#faq-08">
                                                        <i class="fa fa-fw fa-mobile-phone"></i>
                                                        iOS应用开发
                                                        <i class="fa fa-fw fa-angle-down collapse-icon"></i>
                                                    </a>
                                                </h4>
                                            </div>
                                            <div id="faq-08" class="panel-collapse collapse in">
                                                <div class="panel-body">
                                                    支持ios6.0及以上系统
                                                </div>
                                            </div>
                                        </div>

                                        <div class="panel panel-theme">
                                            <div class="panel-heading">
                                                <h4 class="panel-title">
                                                    <a class="collapsed" data-toggle="collapse" data-parent="#accordion03" href="#faq-09">
                                                        <i class="fa fa-fw fa-paper-plane-o"></i>
                                                        iOS电商开发
                                                        <i class="fa fa-fw fa-angle-down collapse-icon"></i>
                                                    </a>
                                                </h4>
                                            </div>
                                            <div id="faq-09" class="panel-collapse collapse">
                                                <div class="panel-body">
                                                    Appstore随时随地更新下载，购物更快捷
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                                <!-- /Panels -->

                                <!-- Features -->
                                <div class="col-md-8">
                                    <div class="row">

                                        <h3 class="title ys">ios开发建设</h3>
                                        <p class="wenzi">
                                            iOS系统的软件与硬件的整合度相当高，使其分化大大降低，在这方面要远胜于碎片化严重的Android。这样也增加了整个系统的稳定性，经常使用iPhone的朋友也能发现，手机很少出现死机、无响应的情况。
                                        </p>
                                        <p class="wenzi">
                                            苹果在界面设计上投入了很多精力，无论是从从外观性还是到易用性，iOS都致力于为使用者提供最直观的用户体验。iOS系统给人的第一感觉就是简洁、美观、有气质，并且操作简单，用户上手很快，用起来有种手到擒来、行云流水的感觉。
                                        </p>

                                    </div>
                                </div>
                                <!-- /Features -->
                            </div>
                        </ul>

                    </div>
                 </div>
            </div>
    </div>
</main>
<!-- /Main -->
</section>



<!-- Footer -->
<footer class="footer section-small "style="background-color:#233242;opacity:0.99">
    <div class="">
        <div class="row hidden-xs">

            <!-- Footer Column -->
            <div class="col-md-3 col-xs-12 footer-col di-bu" >

                <!-- Footer Logo -->
                <div class="logo">
                    <img src="/whedencms/Public/Home/images/wheden.png" alt="">
                </div>
                <!-- /Footer Logo -->

                <!-- Footer Text -->
                <p class="text pp">
                    我们的宗旨：创新、务实、诚信，共赢。我们的追求：塑企业形象，创优质品牌。
                </p>
                <!-- /Footer Text -->

                <hr>

                <!-- Copyright -->
                <p class="copyright pp">
                    版权 &copy; 2015-2016 <strong>维登科技</strong>
                </p>
                <!-- /Copyright -->

                <!-- Footer Social -->
                <ul class="social-inline">
                    <li><a target="_blank" href="http://wpa.qq.com/msgrd?v=3&uin=710201459&site=qq&menu=yes" class="fa fa-fw fa-qq"></a></li>
                    <li><a href="#" class="fa fa-fw fa-weixin"></a></li>
                    <li><a href="#" class="fa fa-fw fa-weibo"></a></li>
                </ul>
                <!-- /Footer Social -->

            </div>
            <div class="col-md-3 col-xs-12 footer-col di-bu" >

                <h3 class="text-theme"> <span class="text-theme">联系方式</span></h3>

                <!-- Footer Signup Form -->
                <div class="">
                    <ul class="social-inline">
                        <li style="margin-bottom:10px;"><span style="margin-right:10px;" class="fa fa-fw fa-phone"></span>13637848756</li><br/>
                        <li style="margin-bottom:10px;"><span style="margin-right:10px;" class="icon icon_pin_alt"></span>广东省东莞市南城商务大厦1506</li><br/>
                        <li style="margin-bottom:10px;"><span style="margin-right:10px;" class="icon icon_mail_alt"></span>wheden@xinxikeji.com</li><br/>
                    </ul>
                        <div class="form-group">
                        </div>
                    </form>

                </div>
                <!-- /Footer Signup Form -->

                <hr>

                <!-- Footer Tags -->
                <div class="tags";>
                    <a href="#" class="tag">web</a>
                    <a href="#" class="tag">设计</a>
                    <a href="#" class="tag">PC</a>
                    <a href="#" class="tag">Android</a>
                    <a href="#" class="tag">IOS</a>
                    <a href="#" class="tag">微信开发</a>
                    <a href="#" class="tag">小程序</a>
                </div>
                <!-- /Footer Tags -->
            </div>

            <div class="col-md-3 col-xs-12 footer-col di-bu">
                <h3 class="title text-theme">留言维登</h3>
                <div class="row">
                    <form class="form-ajax" method="post">
                        <div class="row" >
                            <div class="form-group col-md-6 col-xs-12">
                                <input type="text" name="name" class="form-control" placeholder="姓名... " required >
                            </div>
                            <div class="form-group col-md-6 col-xs-12">
                                <input type="text" name="email" class="form-control" placeholder="电话号码... " required>
                            </div>
                        </div>
                        <div class="row">
                            <div class="form-group col-md-12 col-xs-12">
                                <textarea name="message" class="form-control" placeholder="您的需求...."> </textarea>
                            </div>
                        </div>
                        <div class="row">
                            <div class="form-group col-md-12 text-center col-xs-12">
                                <button type="submit" class="btn btn-theme"><i class="fa fa-fw fa-paper-plane-o"></i> 发送消息</button>
                            </div>
                        </div>
                    </form>
                </div>
            </div>

			<div class="col-md-3 col-xs-12 footer-col di-bu">
                <h3 class="title text-theme">网站菜单</h3>
                <ul class="menu">
                    <li><a href="<?php echo U('index/index');?>">首页</a></li>
                    <li><a href="<?php echo U('about/about');?>">关于维登</a></li>
                    <li><a href="<?php echo U('about/zhaopin');?>">招聘信息</a></li>
                    <li><a href="<?php echo U('about/lists');?>">公司环境</a></li>
                    <li><a href="<?php echo U('service/service');?>">服务范围</a></li>
                    <li><a href="<?php echo U('news/news');?>">新闻资讯</a></li>
                    <li><a href="<?php echo U('cases/cases');?>">项目案例</a></li>
                    <li><a href="<?php echo U('contact/contact');?>">联系我们</a></li>
                </ul>
            </div>

            <!--<div class="col-md-4 col-xs-12 footer-col di-bu">

                &lt;!&ndash; Section Header &ndash;&gt;
                <div class="row">
                    <div class="col-md-6 col-xs-12 col-md-offset-3" style="margin-left: -55px;";>
                        <header class="text-center">
                            <h2 class="section-title"> <span class="text-theme">留言 维登</span></h2>
                            
                        </header>
                    </div>
                </div>-->
                <!-- /Section Header -->

                <!-- Section Content -->
                <!--<div class="row section-content">
                    <div class="col-md-8  col-xs-12 col-md-offset-2 contact-form  wow biaodan" style="margin-left: -250px;">
                        <form class="form-ajax" method="post">

                            <input type="hidden" name="form" value="Contact">

                            <div class="row" style="width: 700px;">
                                <div class="form-group col-md-6 col-xs-12" style="width: 251px;">
                                    <input type="text" name="name" class="form-control" placeholder="姓名... " required style="width: 250px;">
                                </div>
                                <div class="form-group col-md-6 col-xs-12" style="margin-left: 10px;width: 251px;">
                                    <input type="text" name="email" class="form-control" placeholder="电话号码... " required style="width: 250px";>
                                </div>
                            </div>

                            <div class="row">
                                <div class="form-group col-md-12 col-xs-12">
                                    <textarea name="message" class="form-control" placeholder="内容... " style="width: 512px;"> </textarea>
                                </div>
                            </div>

                            <div class="row" style="margin-left: 180px;">
                                <div class="form-group col-md-12 text-center col-xs-12">
                                    <button type="submit" class="btn btn-theme"><i class="fa fa-fw fa-paper-plane-o"></i> 发送消息</button>
                                </div>
                            </div>

                        </form>
                    </div>
                </div>-->
                <!-- /Section Content -->

            </div>   
        </div>
    </div>
    <div class="container pp" align="center">
        <p>友情链接</p>
        <p><a href="http://www.baidu.com">百度</a>
           <span><a href="#">腾讯</a></span>
        </p>
    </div>
</footer>
<!-- /Footer -->

<!--客服-->

<div class="side hidden-xs">
    <ul>
        <li><a href="#">
            <div class="sidebox"><img src="/whedencms/Public/Home/images/zj.png">0769-89865500</div>
        </a></li>
        <li>
            <a href="http://wpa.qq.com/msgrd?v=3&uin=710201459&site=qq&menu=yes">
                <div class="sidebox">
                    <img src="/whedencms/Public/Home/images/drzt.png">710201459
                </div>
            </a>

        </li>

        <li><a href="javascript:void(0);">
            <div class="sidebox"><img src="/whedencms/Public/Home/images/wx2.png">微信</div>
        </a></li>

    </ul>
    <div class="floating_ck">
        <dl>

            <dd class="qrcord" style="background-image: url(/whedencms/Public/Home/images/ewm.png); width: 45px; height: 36px" >

                <div class="floating_left floating_ewm" style="height:201px;">
                    <i style="background-image: url(/whedencms/Public/Home/images/ewm.jpg)"></i>
                    <p class="qrcord_p01">扫一扫<br>关注维登了解更多</p>


                </div>
            </dd>

        </dl>
    </div>

</div>


<!-- Scroll To Top -->
<div id="scroll-to-top" class="scroll-to-top">
    <i class="icon fa fa-angle-up"></i>
</div>
<!-- /Scroll To Top -->

<!-- Modal: Result Message -->

<!-- js -->
<script src="/whedencms/Public/Home/js/jquery-2.2.0.min.js"></script>
<script src="/whedencms/Public/Home/js/bootstrap.min.js"></script>
<script src="/whedencms/Public/Home/js/owl.carousel.min.js"></script>
<script src="/whedencms/Public/Home/js/jquery.magnific-popup.min.js"></script>
<script src="/whedencms/Public/Home/js/jquery.validate.min.js"></script>
<script src="/whedencms/Public/Home/js/jquery.stellar.min.js"></script>
<script src="/whedencms/Public/Home/js/wow.min.js"></script>
<script src="/whedencms/Public/Home/js/masonry.pkgd.min.js"></script>
<script src="/whedencms/Public/Home/js/jquery.appear.js"></script>
<script src="/whedencms/Public/Home/js/jquery.animateNumber.min.js"></script>
<script src="/whedencms/Public/Home/js/general.js"></script>
<script src="/whedencms/Public/Home/js/timezhou.js"></script>
<script src="/whedencms/Public/Home/js/bgcolor.js"></script>
<script src="/whedencms/Public/Home/js/kefu.js"></script>
<script src="/whedencms/Public/Home/js/jquery.FainPic.js"></script>


<!-- /SCRIPTS -->


<!-- TODO: Remove this block, Demo-version only -->
<!-- Styleswitcher -->
<div id="styleswitcher" class="styleswitcher">
<div class="styleswitcher-content">

	<h4 class="styleswitcher-title">颜色配置</h4>
	<div class="styleswitcher-block">
		<ul class="styleswitcher-list-colors">
			<li><a href="javascript: switchStyle('theme-persimmon')" style="background: #ff5555;" title="Persimmon"></a></li>
			<li><a href="javascript: switchStyle('theme-atomic-tangerine')" style="background: #ff9e55;" title="Atomic Tangerine"></a></li>
			<li><a href="javascript: switchStyle('theme-yellow-sea')" style="background: #fab000;" title="Yellow Sea"></a></li>
			<li><a href="javascript: switchStyle('theme-rio-grande')" style="background: #aed605;" title="Rio Grande"></a></li>
			<li><a href="javascript: switchStyle('theme-vida-loca')" style="background: #38b71f;" title="Vida Loca"></a></li>
			<li><a href="javascript: switchStyle('theme-mountain-meadow')" style="background: #1fb768;" title="Mountain Meadow"></a></li>
			<li><a href="javascript: switchStyle('theme-java')" style="background: #1fb7a4;" title="Java"></a></li>
			<li><a href="javascript: switchStyle('theme-mariner')" style="background: #3274cd;" title="Mariner"></a></li>
			<li><a href="javascript: switchStyle('theme-medium-purple')" style="background: #996de9;" title="Medium Purple"></a></li>
			<li><a href="javascript: switchStyle('theme-lavender-magenta')" style="background: #e94de4;" title="Lavender Magenta"></a></li>
		</ul>
	</div>

	<h4 class="styleswitcher-title">导航风格</h4>
	<div class="styleswitcher-block">
		<select id="styleswitcher-navbar-style">
			<option value="style-1">默认</option>
			<option value="style-2">填满</option>
			<option value="style-3">下划线</option>
		</select>
	</div>

</div>

<div class="styleswitcher-button vertical-middle"><i class="fa fa-gear"></i></div>
</div>

<link rel="stylesheet" type="text/css" href="/whedencms/Public/Home/demo/styleswitcher.css" property="">
<script src="/whedencms/Public/Home/demo/styleswitcher.js"></script>

<!-- /Styleswitcher -->

</body>
</html>


<!--js-->
<script src="/whedencms/Public/Home/js/jquery.SuperSlide.2.1.1.js"></script>
<script type="text/javascript">jQuery(".slideTxtBox").slide({delayTime:0});</script>
<script type="text/javascript">
    $('.img1').mousemove(function(){
        $('.img1').css({width:'115px'});
    });
    $('.img1').mouseout(function(){
        $('.img1').css({width:'100px'})
    });
    $('.img2').mousemove(function(){
        $('.img2').css({width:'115px'});
    });
    $('.img2').mouseout(function(){
        $('.img2').css({width:'100px'})
    });
    $('.img3').mousemove(function(){
        $('.img3').css({width:'115px'});
    });
    $('.img3').mouseout(function(){
        $('.img3').css({width:'100px'})
    });
    $('.img4').mousemove(function(){
        $('.img4').css({width:'115px'});
    });
    $('.img4').mouseout(function(){
        $('.img4').css({width:'100px'})
    });
</script>