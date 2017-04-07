<?php if (!defined('THINK_PATH')) exit();?><!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title>招聘</title>
    <script type="text/javascript" src="/weiden/Public/Home/js/jquery-1.8.0.js"></script>
    <script type="text/javascript" src="/weiden/Public/Home/js/jquery.easing.js"></script>
    <script type="text/javascript" src="/weiden/Public/Home/js/jquery.scrollpath.js"></script>
    <script type="text/javascript" src="/weiden/Public/Home/js/index.js"></script>
    <style type="text/css">
        * {
            margin: 0;
            padding: 0;
            list-style-type: none;
        }

        a,
        img {
            border: 0;
            text-decoration: none;
        }

        body {
            background: #222 url("/weiden/Public/Home/images/xti.jpg") repeat -936px -197.1px;
            color: white;
            overflow: hidden;
        }
        /* nav */

        nav {
            position: absolute;
            z-index: 999911;
            top: 0;
            left: 25px;
            margin: 160px 0 0 0;
        }

        nav ul {
            background: url("/weiden/Public/Home/images/pic_navi01.png") no-repeat center center;
            width: 170px;
            height: 437px;
        }

        nav li {
            position: relative;
        }

        nav li#home a {
            height: 126px;
            line-height: 126px;
        }

        nav li.active>a,
        nav li:hover>a {
            zoom: 1;
            filter: alpha(opacity=80);
            opacity: 0.8;
            color: #494949;
        }

        nav li.hover ul {
            display: block;
        }

        nav li.selected,
        nav li:after,
        nav li.active,
        nav li:hover {
            background: rgba(250, 250, 250, 0.2);
            width: 114px;
            margin-left: 29px;
        }

        nav li:hover a {
            margin-left: none;
        }

        nav li a {
            display: block;
            height: 49px;
            text-align: center;
            width: 135px;
            text-indent: -999em;
            overflow: hidden;
            font-size: 12px;
            line-height: 49px;
            text-transform: uppercase;
            color: #494949;
            text-decoration: none;
            -webkit-transition: all 300ms ease-in;
            -moz-transition: all 300ms ease-in;
            -ms-transition: all 300ms ease-in;
            -o-transition: all 300ms ease-in;
            transition: all 300ms ease-in;
        }

        nav li.active a.home,
        nav li a.home:hover {
            background: url("/weiden/Public/Home/images/home_hover.png") no-repeat left top;
            _background: none;
        }

        nav li.active a.about,
        nav li a.about:hover {
            background: url("/weiden/Public/Home/images/about_hover.png") no-repeat left top;
            _background: none;
        }

        nav li.active a.culture,
        nav li a.culture:hover {
            background: url("/weiden/Public/Home/images/culture_hover.png") no-repeat left top;
            _background: none;
        }

        nav li.active a.joinus,
        nav li a.joinus:hover {
            background: url("/weiden/Public/Home/images/joinus_hover.png") no-repeat left top;
            _background: none;
        }
        /* wrapper */

        .wrapper {
            z-index: 10
        }

        .wrapper .wrap {
            width: 1960px;
            height: 1080px;
            position: absolute;
            z-index: 6
        }

        .wrapper .wrap p {
            margin: 0px auto;
            margin-bottom: 21px;
            font-size: 12px;
            line-height: 20px;
            font-family: 'Tahoma'
        }

        .wrapper .wrap.home {
            background: url("/weiden/Public/Home/images/公司简介2.png") no-repeat 50% 50%;
            left: 20px;
            margin-top: -550px;
        }

        .wrapper .wrap.home .content {
            width: 840px;
        }

        .wrapper .wrap.about {
            left: 20px;
            top: 1810px;
            background: url("/weiden/Public/Home/images/公司简介.png") no-repeat 50% 50%;
        }

        .wrapper .wrap.culture {
            width: 1960px;
            height: 1080px;
            left: 1520px;
            top: 3260px;
            _top: 3100px;
            -moz-transform: rotate(90deg);
            -webkit-transform: rotate(90deg);
            -o-transform: rotate(90deg);
            -ms-transform: rotate(90deg);
            transform: rotate(90deg);
            background: url("/weiden/Public/Home/images/招人计划.png") no-repeat 50% 50%;
        }

        .wrapper .wrap.culture .content {
            padding-top: 544px;
        }

        .wrapper .wrap.joinus {
            width: 1960px;
            height: 1080px;
            left: 3520px;
            top: 4160px;
            _top: 4220px;
            -moz-transform: rotate(90deg);
            -webkit-transform: rotate(90deg);
            -o-transform: rotate(90deg);
            -ms-transform: rotate(90deg);
            transform: rotate(90deg);
        }

        .wrapper .wrap.address {
            width: 1960px;
            height: 1080px;
            left: 4420px;
            top: 810px;
            _top: 880px;
            -moz-transform: rotate(-90deg);
            -webkit-transform: rotate(-90deg);
            -o-transform: rotate(-90deg);
            -ms-transform: rotate(-90deg);
            transform: rotate(-90deg);
        }

        .wrapper .wrap.guangGao {
            width: 900px;
            background: url("/weiden/Public/Home/images/联系我们倒.png") no-repeat 50% 50%;
        }

        .wrapper .wrap.guangGao {
            width: 900px;
            height: 600px;
            left: 2400px;
            top: 900px;
            _top: 1200px;
            -moz-transform: rotate(-180deg);
            -webkit-transform: rotate(-180deg);
            -o-transform: rotate(-180deg);
            -ms-transform: rotate(-180deg);
            transform: rotate(-180deg);
        }

        .wrapper .wrap.guangGao .content p {
            position: absolute;
            width: 450px;
            font-size: 14px;
            font-family: "微软雅黑";
            text-shadow: 1px 1px 2px #222;
        }

        .wrapper .content {
            width: 960px;
            height: 720px;
            margin: 0px auto;
            margin-top: 208px;
            position: relative;
            z-index: 89999
        }

        .wrapper .address .content {
            margin-top: 230px;
            text-align: center;
        }

        .wrapper .content p {
            margin-bottom: 15px
        }
        /* rightNav */

        #rightNav {
            position: absolute;
            top: 200px;
            right: 25px;
            z-index: 999;
            height: 520px;
            margin: 146px 0 0 0;
        }

        #rightNav .circleButton {
            display: block;
            width: 96px;
            height: 100px;
            text-indent: -999em;
            overflow: hidden;
            margin-bottom: 20px
        }

        #rightNav #scrollInfo {
            background: url("/weiden/Public/Home/images/pic_navi02.png") no-repeat 0 -110px;
            margin-bottom: 0px;
        }
        /* bgLine */

        .bgLine {
            position: absolute
        }

        .bgLine.one {
            width: 296px;
            height: 1271px;
            left: 861px;
            top: 516px;
            background: url("/weiden/Public/Home/images/1.png") no-repeat center center;
        }

        .bgLine.two {
            width: 1190px;
            height: 1152px;
            left: 875px;
            top: 2719px;
            background: url("/weiden/Public/Home/images/2.png") no-repeat center center;
        }

        .bgLine.three {
            width: 1094px;
            height: 567px;
            left: 2891px;
            top: 4141px;
            background: url("/weiden/Public/Home/images/3.png") no-repeat center center;
        }

        .bgLine.four {
            width: 710px;
            height: 2407px;
            left: 4997px;
            top: 2191px;
            background: url("/weiden/Public/Home/images/4.png") no-repeat center center;
        }

        .bgLine.five {
            width: 917px;
            height: 2340px;
            left: 5891px;
            top: -1059px;
            background: url("/weiden/Public/Home/images/5.png") no-repeat center center;
        }

        .bgLine.six {
            width: 1352px;
            height: 168px;
            left: 3251px;
            top: -1361px;
            background: url("/weiden/Public/Home/images/6.png") no-repeat center center;
        }

        .bgLine.seven {
            width: 909px;
            height: 740px;
            left: 803px;
            top: -1334px;
            background: url("/weiden/Public/Home/images/7.png") no-repeat center center;
        }
    </style>
</head>
<body>
<nav id="menu">
    <ul>
        <li id="home" style="background:none;">
            <a href="<?php echo U('index/index');?>" class="home">维登首页</a>
        </li>
        <li>
            <a href="#about" class="about">公司简介</a>
        </li>
        <li>
            <a href="#culture" class="culture">招人计划</a>
        </li>
        <li>
            <a href="#joinus" class="joinus">公司前景</a>
        </li>
        <li>
            <a href="#address" class="address">公司福利</a>
        </li>
        <li>
            <a href="#guangGao" class="guangGao">联系我们</a>
        </li>

    </ul>
</nav>

<div id="rightNav">
    <a href="contact.html" class="circleButton" id="scrollInfo"></a>
</div>
<div class="wrapper" style="position:relative;transform-origin:5400px 1350px 0px;transform:translate(-4680px, -985.5px) rotate(1.5708rad);">
    <div class="bgLine one">
    </div>
    <div class="bgLine two">
    </div>
    <div class="bgLine three">
    </div>
    <div class="bgLine four">
    </div>
    <div class="bgLine five">
    </div>
    <div class="bgLine six">
    </div>
    <div class="bgLine seven">
    </div>
    <div class="wrap home">
        <div class="content">
        </div>
    </div>
    <div class="wrap about">
        <div class="content">

        </div>
    </div>
    <div class="wrap culture">
        <div class="content">
        </div>
    </div>
    <div class="wrap joinus">
        <div class="content">
            <p><img src="/weiden/Public/Home/images/公司前景.png" alt="" usemap="#Map2">
                <!--		<map name="Map2" id="Map2">
            <area shape="rect" coords="425,557,611,612" href="#" />
            </map>--></p>
        </div>
    </div>
    <div class="wrap address">
        <div class="content">
            <p><img src="/weiden/Public/Home/images/公司福利.png" alt="" usemap="#Map">
                <!--<map name="Map" id="Map">
    <area shape="circle" coords="244,476,70" href="#" />
    </map>--></p>
        </div>
    </div>
    <div class="wrap guangGao">
        <div class="content">
        </div>
    </div>
</div>

</body>
</html>