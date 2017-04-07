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
                        <a href="<?php echo U('About/baidumap');?>" class="iframe-popup"><span class="icon icon_pin_alt"></span>
                            东莞市南城商务大厦1506</a>
                        <a href="#"><span class="icon icon_mail_alt"></span>wheden@wheden.com</a>
                        <a href="#"><span class="icon icon_phone"></span> 13637848756</a>
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
<body>
<div id="preloader">
    <div class="loader"></div>
</div>
<div id="dangqian" style="display:none">news</div>
<!-- header-->

<!-- /header-->
<section class="section-page-header" style="background-image:url(/whedencms/Public/Home/images/b1.jpg)">
</section>


<div class="neirong" style="background-color: rgba(217, 237, 247, 0.19)">
        <article class="container">
            <div class="biaoti-sousuo row">
                <div class="col-xs-12 col-sm-7 col-md-8 col-lg-12">
                    <h3 class="ny-bt">维登新闻</h3>
                    <h5 class="ny-bt1">WHEDEN&nbsp;<span class="ny-bt2">NEWS</span></h5>
                </div>
            </div>

            <div class="col-xs-12 col-sm-7 col-md-8 col-lg-12 sf">
                    <ul>
                        <li><a class="hovers" href="#">网站建设</a></li>
                        <li><a class="hover" href="<?php echo U('Index/app');?>">APP开发</a></li>
                        <li><a class="hover" href="<?php echo U('Index/weixin');?>">微信开发</a></li>
                        <li><a class="hover" href="<?php echo U('Index/back');?>">后台搭建</a></li>
                    </ul>
            </div>
        <!-- 新闻列表页 start -->
        <div class="row m-x-30">
            <figure class="col-xs-12 col-sm-6 col-md-6 col-lg-6">
                <article class="ny-news">
                <div class=" col-sm-6 box2">
                    <div class="box1">
                        <div class="box-img">
                            <img src="/whedencms/Public/Home/images/website.jpg" alt="" class="ylw-img-responsive2">
                        </div>
                        <div class="box-content">
                            <h4 class="title">维登</h4>
                         <p class="description">创新领航互联网时代助力企业发展电商</p>

                        </div>
                    </div>
                </div>
                <h4><a href="javascript:;" target="_blank">平面设计师如何提高自己的设计水平？</a></h4>
                <p>创新领航互联网时代助力企业发展电商</p>
                <p><span class="fl"><a href="<?php echo U('Index/404');?>">查看详情</a></span><span class="sj">2016-03-25</span></p>
                </article>
            </figure>


            <figure class="col-xs-12 col-sm-6 col-md-6 col-lg-6">
                <article class="ny-news">
                    <div class=" col-sm-6 box2">
                        <div class="box1">
                            <div class="box-img">
                                <img src="/whedencms/Public/Home/images/website-1.jpg" alt="" class="ylw-img-responsive2">
                            </div>
                            <div class="box-content">
                                <h4 class="title">维登</h4>
                                <p class="description">创新领航互联网时代助力企业发展电商</p>

                            </div>
                        </div>
                    </div>
                    <h4><a href="javascript:;" target="_blank">平面设计师如何提高自己的设计水平？</a></h4>
                    <p>创新领航互联网时代助力企业发展电商</p>
                    <p><span class="fl"><a href="<?php echo U('Index/404');?>">查看详情</a></span><span class="sj">2016-03-25</span></p>
                </article>
            </figure>

            <figure class="col-xs-12 col-sm-6 col-md-6 col-lg-6">
                <article class="ny-news">
                    <div class=" col-sm-6 box2">
                        <div class="box1">
                            <div class="box-img">
                                <img src="/whedencms/Public/Home/images/website-2.jpg" alt="" class="ylw-img-responsive2">
                            </div>
                            <div class="box-content">
                                <h4 class="title">维登</h4>
                                <p class="description">创新领航互联网时代助力企业发展电商</p>

                            </div>
                        </div>
                    </div>
                    <h4><a href="javascript:;" target="_blank">平面设计师如何提高自己的设计水平？</a></h4>
                    <p>创新领航互联网时代助力企业发展电商</p>
                    <p><span class="fl"><a href="<?php echo U('Index/404');?>">查看详情</a></span><span class="sj">2016-03-25</span></p>
                </article>
            </figure>

            <figure class="col-xs-12 col-sm-6 col-md-6 col-lg-6">
                <article class="ny-news">
                    <div class=" col-sm-6 box2">
                        <div class="box1">
                            <div class="box-img">
                                <img src="/whedencms/Public/Home/images/website-3.jpg" alt="" class="ylw-img-responsive2">
                            </div>
                            <div class="box-content">
                                <h4 class="title">维登</h4>
                                <p class="description">创新领航互联网时代助力企业发展电商</p>

                            </div>
                        </div>
                    </div>
                    <h4><a href="javascript:;" target="_blank">平面设计师如何提高自己的设计水平？</a></h4>
                    <p>创新领航互联网时代助力企业发展电商</p>
                    <p><span class="fl"><a href="<?php echo U('Index/404');?>">查看详情</a></span><span class="sj">2016-03-25</span></p>
                </article>
            </figure>
        </div>
        <!-- 新闻列表页 stop -->

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
                <li class="thisclass">
                    <a>1</a>
                </li>
                <li class="disabled">
                    <a  title="下一页" >&gt;</a>
                </li>
                <li class="disabled">
                    <a  title="最后一页" >&gt;&gt;</a>
                </li>
            </ul>
        </div>
    </article>
</div>



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
                    <li><a target="_blank" href="http://wpa.qq.com/msgrd?v=3&uin=710201459&site=qq&menu=yes"  target="_blank" class="fa fa-fw fa-qq"></a></li>
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
                    <li><a href="<?php echo U('Index/index');?>">首页</a></li>
                    <li><a href="<?php echo U('about/about');?>">关于维登</a></li>
                    <li><a href="<?php echo U('about/zhaopin');?>">招聘信息</a></li>
                    <li><a href="<?php echo U('about/lists');?>">公司环境</a></li>
                    <li><a href="<?php echo U('service/service');?>">服务范围</a></li>
                    <li><a href="<?php echo U('cases/cases');?>">项目案列</a></li>
                    <li><a href="<?php echo U('news/news');?>">新闻资讯</a></li>
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