<?php if (!defined('THINK_PATH')) exit();?><!DOCTYPE html>
<html lang="en">
<head>

    <!-- Meta -->
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <!-- Favicon -->
    <!--<link rel="shortcut icon" href="__IMA__/favicon.png">-->

    <!-- Style -->
    <link rel="stylesheet" href="/weiden/Public/Home/css/theme.css">
    <link rel="stylesheet" href="/weiden/Public/Home/css/erweima.css">

    <!-- TODO: 预定义的方案（选择其中一个） -->
    <link rel="alternate stylesheet" href="/weiden/Public/Home/css/theme-persimmon.css" title="theme-persimmon">
    <link rel="alternate stylesheet" href="/weiden/Public/Home/css/theme-atomic-tangerine.css" title="theme-atomic-tangerine">
    <link rel="alternate stylesheet" href="/weiden/Public/Home/css/theme-yellow-sea.css" title="theme-yellow-sea">
    <link rel="alternate stylesheet" href="/weiden/Public/Home/css/theme-rio-grande.css" title="theme-rio-grande">
    <link rel="alternate stylesheet" href="/weiden/Public/Home/css/theme-vida-loca.css" title="theme-vida-loca">
    <link rel="alternate stylesheet" href="/weiden/Public/Home/css/theme-mountain-meadow.css" title="theme-mountain-meadow">
    <link rel="alternate stylesheet" href="/weiden/Public/Home/css/theme-java.css" title="theme-java">
    <link rel="alternate stylesheet" href="/weiden/Public/Home/css/theme-mariner.css" title="theme-mariner">
    <link rel="alternate stylesheet" href="/weiden/Public/Home/css/theme-medium-purple.css" title="theme-medium-purple">
    <link rel="alternate stylesheet" href="/weiden/Public/Home/css/theme-lavender-magenta.css" title="theme-lavender-magenta">
    <link rel="alternate stylesheet" href="/weiden/Public/Home/css/footerfont.css" title="footerfont">
    <link rel="alternate stylesheet" href="/weiden/Public/Home/css/erweima.css" title="footerfont">
    <link href="/weiden/Public/Home/css/style.css" rel="stylesheet">
    <link href="/weiden/Public/Home/css/shake.css" rel="stylesheet">

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
                        <a href="<?php echo U('About/baidumap');?>" class="iframe-popup"><span class="icon icon_pin_alt"></span>
                            东莞市南城商务大厦1506</a>
                        <a href="#"><span class="icon icon_mail_alt"></span> admin@wheden.com</a>
                        <a href="#"><span class="icon icon_phone"></span> 13637848756</a>
                    </div>
                    <!-- /反馈 -->

                    <!--社交软件 -->
                    <div class="col-md-5">
                        <ul class="social">
                            <li><a href="http://wpa.qq.com/msgrd?v=3&uin=710201459&site=qq&menu=yes" class="fa fa-fw fa-qq"></a></li>
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
                            <img src="/weiden/Public/Home/images/logo.png" class="logo-big" alt="">
                            <!-- /商标 -->

                            <!-- Logo Small -->
                            <img src="/weiden/Public/Home/images/logo-small.png" class="logo-small" alt="">
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
                                <a href="<?php echo U('about/about');?>" class="dropdown-toggle">关于我们</a>
                                <ul class="dropdown-menu">
                                    <li><a href="<?php echo U('about/zhaopin');?>">招聘</a></li>
                                    <li><a href="<?php echo U('about/lists');?>">公司环境</a></li>
                                </ul>
                            </li>
                            <li class="dropdown">
                                <a href="<?php echo U('service/service');?>" class="dropdown-toggle">服务</a>
                            </li>
                            <li class="dropdown">
                                <a href="<?php echo U('news/news');?>" class="dropdown-toggle">新闻</a>
                            </li>
                            <li class="dropdown">
                                <a href="<?php echo U('cases/cases');?>" class="dropdown-toggle">案例</a>
                            </li>
                            <li><a href="<?php echo U('contact/contact');?>">联系</a></li>
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
    <title>关于我们</title>

    <!-- Meta -->
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">

</head>

<!-- 预加载 -->
<div id="preloader">
    <div class="loader"></div>
</div>
<!-- /预加载 -->

<!-- Section: Page Header -->
<section class="section-page-header" style="background-image:url(/weiden/Public/Home/images/b2.jpg)">
</section>
<!-- /Section: Page Header -->

<!-- Main -->
<main class="main-container" style="background-color: rgba(217, 237, 247, 0.19)" >
    <div class="container" style="margin-bottom: 2%;padding-top: 2%">
            <div class="row">
                <div class="our-team">
                    <div class="col-md-offset-1">
                        <h2 class="title" align="center" style="font-weight: bold;font-size: 32px;">客户案例</h2>
                        <h2 align="center" >CASE <span class="text-theme">OF US</span></h2>
                    </div>
                    <div class="row">
                        <ul class="nav nav-pills col-md-offset-5 col-xs-offset-3">
                            <li class="active" id="web01"><a href="#">网站设计</a></li>
                            <li id="web02"><a href="#">商城建设</a></li>
                            <li id="web03"><a href="#">平面设计</a></li>
                            <li id="web04"><a href="#">旅游网站</a></li>
                        </ul>
                    </div>
                </div>
            </div>
    </div>
        <div class="container" id="show01">
            <div class="row">
                <div class="portfolio">
                    <div class="container">
                        <div class="portfolio_item col-md-3 col-xs-12">
                            <div class="pos_rel">
                                <img src="/weiden/Public/Home/images/zdfyhg.jpg" alt="portfolio Image" class="img-responsive" style="height: 244px">
                                <div class="overlay"></div>
                                <div class="port_caption">
                                    <a href="#"><i class="fa fa-link" aria-hidden="true"></i></a>
                                    <h4>东莞纳仕德电子有限公司</h4>
                                    <p>网站设计</p>
                                </div>
                            </div>
                        </div>
                        <div class="portfolio_item col-md-3 col-xs-12">
                            <div class="pos_rel">
                                <img src="/weiden/Public/Home/images/mk.png" alt="portfolio Image" class="img-responsive" style="height: 244px">
                                <div class="overlay"></div>
                                <div class="port_caption">
                                    <a href="#"><i class="fa fa-link" aria-hidden="true"></i></a>
                                    <h4>东莞麦凯风机有限公司</h4>
                                    <p>网站设计</p>
                                </div>
                            </div>
                        </div>
                        <div class="portfolio_item col-md-3 col-xs-12">
                            <div class="pos_rel">
                                <img src="/weiden/Public/Home/images/kejitu.png" alt="portfolio Image" class="img-responsive" style="height: 244px">
                                <div class="overlay"></div>
                                <div class="port_caption">
                                    <a href="#"><i class="fa fa-link" aria-hidden="true"></i></a>
                                    <h4>东莞手机套行业网站设计建设案例</h4>
                                    <p>网站设计</p>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <div class="row" style="margin-top: 10px">
                <div class="portfolio">
                    <div class="container">
                        <div class="portfolio_item col-md-3 col-xs-12">
                            <div class="pos_rel">
                                <img src="/weiden/Public/Home/images/jiaoyu.jpg" alt="portfolio Image" class="img-responsive" style="height: 244px">
                                <div class="overlay"></div>
                                <div class="port_caption">
                                    <a href="#"><i class="fa fa-link" aria-hidden="true"></i></a>
                                    <h4>东莞教育行业网站案例</h4>
                                    <p>网站设计</p>
                                </div>
                            </div>
                        </div>
                        <div class="portfolio_item col-md-3 col-xs-12">
                            <div class="pos_rel">
                                <img src="/weiden/Public/Home/images/car.jpg" alt="portfolio Image" class="img-responsive" style="height: 244px">
                                <div class="overlay"></div>
                                <div class="port_caption">
                                    <a href="#"><i class="fa fa-link" aria-hidden="true"></i></a>
                                    <h4>汽车销售网站建设案例</h4>
                                    <p>网站设计</p>
                                </div>
                            </div>
                        </div>
                        <div class="portfolio_item col-md-3 col-xs-12">
                            <div class="pos_rel">
                                <img src="/weiden/Public/Home/images/yiyuan.jpg" alt="portfolio Image" class="img-responsive" style="height: 244px">
                                <div class="overlay"></div>
                                <div class="port_caption">
                                    <a href="#"><i class="fa fa-link" aria-hidden="true"></i></a>
                                    <h4>东莞医疗卫生网站建设案例</h4>
                                    <p>网站设计</p>
                                </div>
                            </div>
                        </div>
                    </div>
                    <!--<div class="col-md-3 col-xs-12 team-member">
                        <div class="image">
                            <a href="#"><img src="/weiden/Public/Home/images/zdfyhg.jpg" style="height: 244px" class="img-responsive"></a>
                        </div>
                        <span class="post">东莞纳仕德电子有限公司</span>
                        <p class="text">
                            东莞市纳仕特电子科技有限公司网站案例
                        </p>
                    </div>-->
                </div>
            </div>
            <div class="row" style="margin-top: 10px">
                <div class="portfolio">
                    <div class="container">
                        <div class="portfolio_item col-md-3 col-xs-12">
                            <div class="pos_rel">
                                <img src="/weiden/Public/Home/images/phoneweb.jpg" alt="portfolio Image" class="img-responsive" style="height: 244px;width: 340.27px">
                                <div class="overlay"></div>
                                <div class="port_caption">
                                    <a href="#"><i class="fa fa-link" aria-hidden="true"></i></a>
                                    <h4>东莞手机销售网站建设案例</h4>
                                    <p>网站设计</p>
                                </div>
                            </div>
                        </div>
                        <div class="portfolio_item col-md-3 col-xs-12">
                            <div class="pos_rel">
                                <img src="/weiden/Public/Home/images/fz.jpg" alt="portfolio Image" class="img-responsive" style="height: 244px">
                                <div class="overlay"></div>
                                <div class="port_caption">
                                    <a href="#"><i class="fa fa-link" aria-hidden="true"></i></a>
                                    <h4>服装类网站建设案例</h4>
                                    <p>网站设计</p>
                                </div>
                            </div>
                        </div>
                        <div class="portfolio_item col-md-3 col-xs-12">
                            <div class="pos_rel">
                                <img src="/weiden/Public/Home/images/fc.jpg" alt="portfolio Image" class="img-responsive" style="height: 244px">
                                <div class="overlay"></div>
                                <div class="port_caption">
                                    <a href="#"><i class="fa fa-link" aria-hidden="true"></i></a>
                                    <h4>彩妆网站建设案例</h4>
                                    <p>网站设计</p>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    <div class="container" id="show02" style="display: none">
        <div class="row">
            <div class="portfolio">
                <div class="container">
                    <div class="portfolio_item col-md-3 col-xs-12">
                        <div class="pos_rel">
                            <img src="/weiden/Public/Home/images/sjba.png" alt="portfolio Image" class="img-responsive" style="height: 244px">
                            <div class="overlay"></div>
                            <div class="port_caption">
                                <a href="#"><i class="fa fa-link" aria-hidden="true"></i></a>
                                <h4>七夕情人节HTML5+CSS3案例精选</h4>
                                <p>商城建设</p>
                            </div>
                        </div>
                    </div>
                    <div class="portfolio_item col-md-3 col-xs-12">
                        <div class="pos_rel">
                            <img src="/weiden/Public/Home/images/1458922181.gif" alt="portfolio Image" class="img-responsive" style="height: 244px">
                            <div class="overlay"></div>
                            <div class="port_caption">
                                <a href="#"><i class="fa fa-link" aria-hidden="true"></i></a>
                                <h4>快来学学这十佳H5特效吧！</h4>
                                <p>商城建设</p>
                            </div>
                        </div>
                    </div>
                    <div class="portfolio_item col-md-3 col-xs-12">
                        <div class="pos_rel">
                            <img src="/weiden/Public/Home/images/1458924214.gif" alt="portfolio Image" class="img-responsive" style="height: 244px">
                            <div class="overlay"></div>
                            <div class="port_caption">
                                <a href="#"><i class="fa fa-link" aria-hidden="true"></i></a>
                                <h4>高科技通讯公司精选案例</h4>
                                <p>商城建设</p>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <!--平面设计 -->
    <div class="container" id="show03" style="display: none">
        <div class="row">
            <div class="portfolio">
                <div class="container">
                    <div class="portfolio_item col-md-3 col-xs-12">
                        <div class="pos_rel">
                            <img src="/weiden/Public/Home/images/tsw.png" alt="portfolio Image" class="img-responsive" style="height: 244px">
                            <div class="overlay"></div>
                            <div class="port_caption">
                                <a href="#"><i class="fa fa-link" aria-hidden="true"></i></a>
                                <h4>探索H5的不同表现手法</h4>
                                <p>平面设计</p>
                            </div>
                        </div>
                    </div>
                    <div class="portfolio_item col-md-3 col-xs-12">
                        <div class="pos_rel">
                            <img src="/weiden/Public/Home/images/sheji.gif" alt="portfolio Image" class="img-responsive" style="height: 244px">
                            <div class="overlay"></div>
                            <div class="port_caption">
                                <a href="#"><i class="fa fa-link" aria-hidden="true"></i></a>
                                <h4>如何创意的使用图片元素</h4>
                                <p>平面设计</p>
                            </div>
                        </div>
                    </div>
                    <div class="portfolio_item col-md-3 col-xs-12">
                        <div class="pos_rel">
                            <img src="/weiden/Public/Home/images/sheji02.gif" alt="portfolio Image" class="img-responsive" style="height: 244px">
                            <div class="overlay"></div>
                            <div class="port_caption">
                                <a href="#"><i class="fa fa-link" aria-hidden="true"></i></a>
                                <h4>日新月异的前端特效</h4>
                                <p>平面设计</p>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <!--平面设计结束 -->
    <!--旅游网站开始 -->
    <div style="display: none" id="show04" class="container">
        <div class="row">
            <div class="portfolio">
                <div class="container">
                    <div class="portfolio_item col-md-3 col-xs-12">
                        <div class="pos_rel">
                            <img src="/weiden/Public/Home/images/fengj.jpg" alt="portfolio Image" class="img-responsive" style="height: 244px">
                            <div class="overlay"></div>
                            <div class="port_caption">
                                <a href="#"><i class="fa fa-link" aria-hidden="true"></i></a>
                                <h4>旅游网站建设案例</h4>
                                <p>旅游网站</p>
                            </div>
                        </div>
                    </div>
                    <div class="portfolio_item col-md-3 col-xs-12">
                        <div class="pos_rel">
                            <img src="/weiden/Public/Home/images/fengjing02.jpg" alt="portfolio Image" class="img-responsive" style="height: 244px">
                            <div class="overlay"></div>
                            <div class="port_caption">
                                <a href="#"><i class="fa fa-link" aria-hidden="true"></i></a>
                                <h4>旅游网站建设案例</h4>
                                <p>旅游网站</p>
                            </div>
                        </div>
                    </div>
                    <div class="portfolio_item col-md-3 col-xs-12">
                        <div class="pos_rel">
                            <img src="/weiden/Public/Home/images/fengj02.jpg" alt="portfolio Image" class="img-responsive" style="height: 244px">
                            <div class="overlay"></div>
                            <div class="port_caption">
                                <a href="#"><i class="fa fa-link" aria-hidden="true"></i></a>
                                <h4>旅游网站建设案例</h4>
                                <p>旅游网站</p>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <div class="fanye text-center">
        <ul class="pagination pagination-lg">
            <li>
                <a href="index.php">首页</a>
            </li>
            <li>
                <a href="javascript:;" title="已是第一页">&lt;&lt;</a>
            </li>
            <li>
                <a href="javascript:;" title="已是第一页">&lt;</a>
            </li>
            <li class="active">
                <a>1</a>
            </li>
            <li class="disabled">
                <a  title="已是最新一页" >&gt;</a>
            </li>
            <li class="disabled">
                <a  title="最后一页" >&gt;&gt;</a>
            </li>
        </ul>
    </div>
</main>


<!-- Footer -->
<footer class="footer section-small "style="background-color:#233242;opacity:0.99">
    <div class="">
        <div class="row hidden-xs">

            <!-- Footer Column -->
            <div class="col-md-3 col-xs-12 footer-col di-bu" >

                <!-- Footer Logo -->
                <div class="logo">
                    <img src="/weiden/Public/Home/images/wheden.png" alt="">
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
                                <textarea name="message" class="form-control" placeholder="内容... "> </textarea>
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
                    <li><a href="#">首页</a></li>
                    <li><a href="#">关于我们</a></li>
                    <li><a href="#">服务</a></li>
                    <li><a href="#">公司简介</a></li>
                    <li><a href="#">新闻</a></li>
                    <li><a href="#">联系</a></li>
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
</footer>
<!-- /Footer -->

<!--客服-->

<div class="side hidden-xs">
    <ul>
        <li><a href="#">
            <div class="sidebox"><img src="/weiden/Public/Home/images/zj.png">0769-89865500</div>
        </a></li>
        <li>
            <a href="http://wpa.qq.com/msgrd?v=3&uin=710201459&site=qq&menu=yes">
                <div class="sidebox">
                    <img src="/weiden/Public/Home/images/drzt.png">710201459
                </div>
            </a>

        </li>

        <li><a href="javascript:void(0);">
            <div class="sidebox"><img src="/weiden/Public/Home/images/wx2.png">微信</div>
        </a></li>

    </ul>
    <div class="floating_ck">
        <dl>

            <dd class="qrcord" style="background-image: url(/weiden/Public/Home/images/ewm.png); width: 45px; height: 36px" >

                <div class="floating_left floating_ewm" style="height:201px;">
                    <i style="background-image: url(/weiden/Public/Home/images/ewm.jpg)"></i>
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
<script src="/weiden/Public/Home/js/jquery-2.2.0.min.js"></script>
<script src="/weiden/Public/Home/js/bootstrap.min.js"></script>
<script src="/weiden/Public/Home/js/owl.carousel.min.js"></script>
<script src="/weiden/Public/Home/js/jquery.magnific-popup.min.js"></script>
<script src="/weiden/Public/Home/js/jquery.validate.min.js"></script>
<script src="/weiden/Public/Home/js/jquery.stellar.min.js"></script>
<script src="/weiden/Public/Home/js/wow.min.js"></script>
<script src="/weiden/Public/Home/js/masonry.pkgd.min.js"></script>
<script src="/weiden/Public/Home/js/jquery.appear.js"></script>
<script src="/weiden/Public/Home/js/jquery.animateNumber.min.js"></script>
<script src="/weiden/Public/Home/js/general.js"></script>
<script src="/weiden/Public/Home/js/timezhou.js"></script>
<script src="/weiden/Public/Home/js/bgcolor.js"></script>
<script src="/weiden/Public/Home/js/kefu.js"></script>
<script src="/weiden/Public/Home/js/jquery.FainPic.js"></script>


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

<link rel="stylesheet" type="text/css" href="/weiden/Public/Home/demo/styleswitcher.css" property="">
<script src="/weiden/Public/Home/demo/styleswitcher.js"></script>

<!-- /Styleswitcher -->

</body>
</html>

<script>
 $(function(){
     var show01=$("#show01");
    var show02=$("#show02");
     var show03=$("#show03");
     var show04=$("#show04");
     $("#web02").click(function(){
        show02.show();
        show01.hide();
         show03.hide();
         show04.hide();
         $("#web02").addClass("active");
         $("#web01").removeClass("active");
         $("#web03").removeClass("active");
         $("#web04").removeClass("active");
    });
     $("#web01").click(function(){
         show01.show();
         show02.hide();
         show03.hide();
         show04.hide();
         $("#web01").addClass("active");
         $("#web02").removeClass("active");
         $("#web03").removeClass("active");
         $("#web04").removeClass("active");
     });
     $("#web03").click(function(){
         show02.hide();
         show01.hide();
         show03.show();
         show04.hide();
         $("#web03").addClass("active");
         $("#web02").removeClass("active");
         $("#web01").removeClass("active");
         $("#web04").removeClass("active");
     })
     $("#web04").click(function(){
         show02.hide();
         show01.hide();
         show03.hide();
         show04.show();
         $("#web03").removeClass("active");
         $("#web02").removeClass("active");
         $("#web01").removeClass("active");
         $("#web04").addClass("active");
     })
 });
</script>