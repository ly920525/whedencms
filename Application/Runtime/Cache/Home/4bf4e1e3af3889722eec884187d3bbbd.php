<?php if (!defined('THINK_PATH')) exit();?>﻿<!DOCTYPE html>
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
    <title>关于维登</title>

    <!-- Meta -->
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <link rel='stylesheet' type='text/css' href='/whedencms/Public/Home/css/base.css'/>

    <style>
        body {
            font-family: "microsoft yahei";
        }

        .jianjie {
            text-align: center;
            font-family: '微软雅黑', sans-serif;
            box-sizing: border-box;
            margin-bottom: 20px;
        }

        h3 {
            font-family: '微软雅黑', sans-serif;
            font-size: 30px;
            color: #002;
            margin-bottom: 30px;
        }

        p {
            font-size: 14px;
            display: block;
            -webkit-margin-before: 1em;
            -webkit-margin-after: 1em;
            -webkit-margin-start: 0px;
            -webkit-margin-end: 0px;

        }

        .youshi {
            text-align: center;
            font-family: '微软雅黑', sans-serif;
            box-sizing: border-box;

        }

        h4 {
            margin-top: 30px;
            font-family: '微软雅黑', sans-serif;
            font-size: 20px;
            color: #002;
            margin-bottom: 50px;
            -webkit-margin-before: 1em;
            -webkit-margin-after: 1em;
            -webkit-margin-start: 0px;
            -webkit-margin-end: 0px;
        }

        .tuandui {
            background-color: #9d9d9d;
            height: 500px;
            width: 100%;
            margin-top: 20px;
        }
       /* .img{
            width: 350px;
            height: 300px;
        }*/
    </style>
</head>

<!-- 预加载 -->
<div id="preloader">
    <div class="loader"></div>
</div>
<!-- /预加载 -->

<!-- Section: Page Header -->
<section class="section-page-header" style="background-image:url(/whedencms/Public/Home/images/b1.jpg)">
    <!--<div class="container">
        <div class="row">
            <div class="col-md-8">
                <h1 class="title">关于我们</h1>
            </div>

            <div class="col-md-4">
                <ul class="breadcrumb">
                    <li><i class="fa fa-fw fa-home"></i> <a href="<?php echo U('index/index');?>">首页</a></li>
                    <li>关于我们</li>
                </ul>
            </div>

        </div>
    </div>-->
</section>
<!-- /Section: Page Header -->

<!-- Main -->
<main class="main-container" style="background-color: rgba(217, 237, 247, 0.19)">
    <div class="container">

        <div class="row">

            <!-- Our History -->

            <div class="jianjie" style="margin-top: 3%">
                <h2 class="title" align="center" style="font-size: 32px;">我们是谁</h2>
                <h4 align="center" >ABOUT <span class="text-theme">WEBTHINK</span></h4>
                <p>维登科技是一家专注于电子商务和移动互联网运营的科技型服务公司。公司依托互联网的创业生态体系，在零售电商、</p>
                <p>O2O领域及移动新互联网方向积极探索，开拓进取。成立以来，秉承“创新、务实、诚信，共赢”的价值观，以用户需求为核心，</p>
                <p>聚焦客户的关注点，提供有竞争力的解决方案和服务，为客户创造最大价值。公司专注于网站定制、企业网站建设、手机移动网站建设、</p>
                <p>手机APP定制开发、应用系统开发、电商运营、移动互联网等相关服务，为企业提供全球化互联网解决方案。</p>
                <p>我们的理念：聚焦客户的关注点，提供有竞争力的解决方案和服务，为客户创造最大价值。</p>
                <p>我们的宗旨：创新、务实、诚信，共赢。</p>
                <p> 我们的追求：塑企业形象，创优质品牌。</p>
            </div>
            <div class="youshi">

                <div class="col-md-4 col-xs-12">
                    <div class="img">
                        <img src="/whedencms/Public/Home/images/wrapper-img.gif" class="img-responsive" style="height: 241.38px"/>
                    </div>

                    <h4>定制打造</h4>
                    <p>针对不同企业状况、客户特殊需求等量身打造，从专业化的建站方案定制，独一无二的视觉效果设计，
                        到易于SEO优化的规范化代码编写，易于操作的人性化管理后台，无不体现“定制”的意义。</p>
                </div>


                <div class="col-md-4 col-xs-12">
                    <div class="img">
                        <img  src="/whedencms/Public/Home/images/1458925706.gif" class="img-responsive"/>
                    </div>

                    <h4>创新设计</h4>
                    <p>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
                        为客户定制适合自己的互联网形象，&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
                        尊重访问者视觉体验和浏览习惯，用户体验友好，
                        注重信息架构分析，界面设计、互动设计和
                        内容制作，为客户提供高价值的平台。</p>
                </div>

                <div>
                    <div class="col-md-4 col-xs-12">
                        <div class="img">
                            <img src="/whedencms/Public/Home/images/1458922181.gif" class="img-responsive"/>
                        </div>

                        <h4>诚信务实</h4>
                        <p>全网是一个新概念，是互联网时代的必然产物，更是企业在未来几年内的生存之道。
                            维登为客户提供全方位全网开发。网站建设、微站设计、微信公众平台开发，同时完整的将互联网各平台结合，
                            实现一站式管理。</p>
                    </div>
                </div>
            </div>
        </div>
    </div>


    <!--效果html开始-->
    <div class="row" style="margin-top: 1%;background-color: rgba(216, 240, 231, 0.52)">
        <h2 class="title" align="center" style="font-size: 32px;padding-top: 3%">我们的服务</h2>
        <h4 align="center" >WEBTHINK <span class="text-theme">SERVICE</span></h4>
    <div class="item_box box10  hidden-xs">
        <div class="voice_2">
            <ul>
                <li class="li1" id="li1">
                    <div class="fold" style="display:none;">
                        <span class="img" style="height: 2%"></span>
                        <span class="txt">沟通</span>
                    </div>
                    <div class="unfold" style="display:block">
                        <dl>
                            <dt><img src="/whedencms/Public/Home/ly/images/img10.png"/>
                            <p>您可以拨打我们的电话,联系我们说出您的需求，我们会根据已确认的设计稿进行每一个页面的制作。我们会按照我们的W3C制作标准进行web开发，使得更简易、可方便调节、各浏览器兼容性强、可扩展等，让用户体验达到一定高度！
                            </p>
                            </dt>
                            <!--<dd>使用语音外呼的模式将指定的语音呼入至接听人，可通过这种方式为针对性的客户提供会议通知、活动通知，并可通过API接口程序化控制呼出时间、呼出效果反馈
                        </dd>-->
                        </dl>
                    </div>
                </li>
                <li class="li2">
                    <div class="fold">
                        <span class="img" style="height: 4%"></span>
                        <span class="txt">互联</span>
                    </div>
                    <div class="unfold">
                        <dl>
                            <dt><img src="/whedencms/Public/Home/ly/images/img42.png" style="height: 297px"/>
                            <p>我们提供全网服务器,支持VPN全球用户访问</p>
                            </dt>
                        </dl>
                    </div>
                </li>
                <li class="li3">
                    <div class="fold">
                        <span class="img" style="height: 4%"></span>
                        <span class="txt">在线</span>
                    </div>
                    <div class="unfold">
                        <dl>
                            <dt><img src="/whedencms/Public/Home/ly/images/img49.png"/></dt>
                            <dd>随时随地在线沟通，共同商榷网站建设</dd>
                        </dl>
                    </div>
                </li>
                <li class="li4">
                    <div class="fold">
                        <span class="img" style="height: 0px"></span>
                        <span class="txt">云端</span>
                    </div>
                    <div class="unfold">
                        <dl>
                            <dt><img src="/whedencms/Public/Home/ly/images/img50.png"/>
                            <p>云平台，云储存，云服务，让数据更加安全</p></dt>
                        </dl>
                    </div>
                </li>
                <li class="li5">
                    <div class="fold">
                        <span class="img" style="height: 0px"></span>
                        <span class="txt">兼容</span>
                    </div>
                    <div class="unfold">
                        <dl>
                            <dt><img src="/whedencms/Public/Home/ly/images/img51.png"/></dt>
                            <dd>支持手机访问网页，完美兼容</dd>
                        </dl>
                    </div>
                </li>
                <li class="li6">
                    <div class="fold">
                        <span class="img" style="height: 0px"></span>
                        <span class="txt">咨询</span>
                    </div>
                    <div class="unfold">
                        <dl>
                            <dt><img src="/whedencms/Public/Home/ly/images/img52.png" style="height: 220px"/></dt>
                            <dd>现在立即致电13637848756,开始属于您的网站之旅！</dd>
                        </dl>
                    </div>
                </li>
            </ul>
        </div>
    </div>
    </div>

</main>

<!-- /Main -->


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
                        <li style="margin-bottom:10px;"><span style="margin-right:10px;" class="fa fa-fw fa-phone"></span>0769-89865500</li><br/>
                        <li style="margin-bottom:10px;"><span style="margin-right:10px;" class="icon icon_pin_alt"></span>广东省东莞市南城商务大厦1506</li><br/>
                        <li style="margin-bottom:10px;"><span style="margin-right:10px;" class="icon icon_mail_alt"></span>wheden@wheden.com</li><br/>
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

<script type="text/javascript" src="/whedencms/Public/Home/js/jquery-1.8.2.js"></script>
<script type="text/javascript" src="/whedencms/Public/Home/js/Home/ly/js/base.js"></script>