$(function ($) {

    'use strict';

    /*-----------------------------------------------------------------
     * Variables
     *-----------------------------------------------------------------*/

    var $body_html = $('body, html'),
        $html = $('html'),
        $body = $('body'),

        $navigation = $('#navigation'),
        navigation_height = $navigation.height() - 20,

        $scroll_to_top = $('#scroll-to-top'),

        $preloader = $('#preloader'),
        $loader = $preloader.find('.loader');

    if (navigation_height <= 0) navigation_height = 60;

    /*-----------------------------------------------------------------
     * Is mobile
     *-----------------------------------------------------------------*/

    var ua_test = /Android|webOS|iPhone|iPad|iPod|BlackBerry|IEMobile|Opera Mini/i,
        is_mobile = ua_test.test(navigator.userAgent);

    $html.addClass(is_mobile ? 'mobile' : 'no-mobile');

    /*-----------------------------------------------------------------
     * Background Parallax
     *-----------------------------------------------------------------*/

    $.stellar({
        responsive: true,
        horizontalOffset: 0,
        verticalOffset: 0,
        horizontalScrolling: false,
        hideDistantElements: false
    });

    /*-----------------------------------------------------------------
     * ScrollSpy
     *-----------------------------------------------------------------*/

    $body.scrollspy({
        offset: 51,
        target: '#navigation'
    });

    /*-----------------------------------------------------------------
     * Affixed Navbar
     *-----------------------------------------------------------------*/

    $('.affix').affix({
        offset: {
            top: navigation_height
        }
    });

    /*-----------------------------------------------------------------
     * Dropdown By Click on Mobile
     *-----------------------------------------------------------------*/

    if (is_mobile) {
        $('.dropdown-toggle').each(function () {
            $(this).attr('data-toggle', 'dropdown');
        });
    }

    /*-----------------------------------------------------------------
     * Scroll To Top
     *-----------------------------------------------------------------*/

    $(window).scroll(function () {

        var $scroll_top = $(this).scrollTop();

        if ($scroll_top > navigation_height) {
            $scroll_to_top.addClass('in');
        } else {
            $scroll_to_top.removeClass('in');
        }
    });

    $scroll_to_top.click(function () {
        $.scrollWindow(0);
    });

    /*-----------------------------------------------------------------
     * Smooth Scrolling
     *-----------------------------------------------------------------*/

    $('a[href^="#"]').click(function (event) {

        event.preventDefault();

        var $this = $(this),
            target = $this.attr('href');

        // Don't return false!
        if (target == '#') return;

        if ($this.hasClass('smooth-scroll')) {
            var offset = $(target).offset().top - navigation_height;
            $.scrollWindow(offset);
        }
    });

    $.scrollWindow = function (offset) {
        $body_html.animate({
            scrollTop: offset
        }, 1500);
    };

    /*-----------------------------------------------------------------
     * Animation
     *-----------------------------------------------------------------*/

    // Init WOW
    new WOW().init({mobile: false});

    // Animate Numbers
    var $animate_number = $('.animate-number');

    if ($animate_number.length > 0) {

        $animate_number.appear();

        $body.on('appear', '.animate-number', function () {
            $animate_number.each(function () {
                var $this = $(this);
                if (!$this.hasClass('animate-stop')) {
                    $this.animateNumber({
                        number: $this.attr("data-value")
                    }, 750);
                    $this.addClass('animate-stop');
                }
            });
        });
    }


    /*-----------------------------------------------------------------
     * Magnific
     *-----------------------------------------------------------------*/

    $('.image-popup').magnificPopup({
        closeBtnInside: true,
        type: 'image',
        mainClass: 'mfp-with-zoom'
    });

    $('.iframe-popup').magnificPopup({
        type: 'iframe',
        mainClass: 'mfp-with-zoom'
    });

    $("footer").addClass("bg-tuna");

    /*-----------------------------------------------------------------
     * Carousels
     *-----------------------------------------------------------------*/

    // Home Page Slider
    $(".slider").owlCarousel({
        singleItem: true,
        responsive: true,
        autoHeight: true,

        mouseDrag: false,
        touchDrag: false,

        responsiveRefreshRate: 0,
        transitionStyle: 'fadeUp'
    });

    // Home Page Testimonials Carousel
    $("#testimonials-carousel").owlCarousel({
        pagination: false,
        navigation: true,
        responsive: true,
        autoPlay: false,

        paginationSpeed: 400,
        slideSpeed: 300,

        items: 3,
        itemsDesktop: [1199, 3],
        itemsDesktopSmall: [991, 2],
        itemsMobile: [590, 1],

        navigationText: [
            '<i class="fa fa-angle-left"></i>',
            '<i class="fa fa-angle-right"></i>'
        ]
    });

    // Project carousel

    // Set Thumbs for Images
    var setThumbs = function () {
        $.each(this.owl.userItems, function (i) {
            $('.owl-controls .owl-page').eq(i).css({
                'background': 'url(' + $(this).find('img').attr('src') + ')',
                'background-size': 'cover'
            })
        });
    };

    // Init carousel
    $(".project-carousel").owlCarousel({
        pagination: true,
        navigation: true,
        responsive: true,
        singleItem: true,
        autoPlay: false,

        paginationSpeed: 400,
        slideSpeed: 300,

        itemsDesktop: [1199, 3],
        itemsDesktopSmall: [991, 2],
        itemsMobile: [590, 1],
        transitionStyle: 'fadeUp',

        afterInit: setThumbs,
        afterUpdate: setThumbs,

        navigationText: [
            '<i class="fa fa-angle-left"></i>',
            '<i class="fa fa-angle-right"></i>'
        ]
    });

    // Recent Projects
    $(".projects-carousel").owlCarousel({
        pagination: false,
        navigation: true,
        responsive: true,
        autoPlay: false,

        paginationSpeed: 400,
        slideSpeed: 300,

        items: 4,
        itemsDesktop: [1199, 4],
        itemsDesktopSmall: [991, 2],
        itemsMobile: [590, 1],
        navigationText: [
            '<i class="fa fa-angle-left"></i>',
            '<i class="fa fa-angle-right"></i>'
        ]
    });

    // Clients
    $(".clients-carousel").owlCarousel({
        pagination: false,
        navigation: true,
        responsive: true,
        autoPlay: false,

        paginationSpeed: 400,
        slideSpeed: 300,

        items: 4,
        itemsDesktop: [1199, 4],
        itemsDesktopSmall: [991, 2],
        itemsMobile: [590, 1],
        navigationText: [
            '<i class="fa fa-angle-left"></i>',
            '<i class="fa fa-angle-right"></i>'
        ]
    });

    /*-----------------------------------------------------------------
     * Ajax forms
     *-----------------------------------------------------------------*/

    $('.form-ajax').each(function () {

        $(this).validate({
            submitHandler: function (form) {

                var $submit_button = $(form).find('[type=submit]'),
                    submit_button_text = $submit_button.html();

                $submit_button.attr('disabled', true);
                $submit_button.html('Please wait...');

                $.ajax({

                    type: 'post',
                    url: 'sendmail.php',
                    data: $(form).serialize(),

                    success: function () {

                        $('.result-icon .icon').removeClass('fa-times').addClass('fa-check');
                        $('.modal-result').html('Message sent successfully :)');
                        $('#result').modal('show');

                        $submit_button.attr('disabled', false);
                        $submit_button.html(submit_button_text);
                    },

                    error: function () {

                        $('.result-icon .icon').removeClass('fa-check').addClass('fa-times');
                        $('.modal-result').html('Error sending message :(');
                        $('#result').modal('show');

                        $submit_button.attr('disabled', false);
                        $submit_button.html(submit_button_text);
                    }
                });
            }
        });
    });


    /*-----------------------------------------------------------------
     * Finish loading
     *-----------------------------------------------------------------*/

    $(window).load(function () {

        /* Remove preloader */

        $loader.delay(1500).fadeOut();
        $preloader.delay(500).fadeOut('slow');

        $body.addClass('loaded');

    });

});
/*-- 关于我们特效  --*/
// JavaScript Document

$(function(){

    //导航菜单
    var ytx={};
    $('[t_nav]').hover(function(){
        var _nav = $(this).attr('t_nav');
        clearTimeout( ytx[ _nav + '_timer' ] );
        ytx[ _nav + '_timer' ] = setTimeout(function(){
            $('#'+_nav).stop(true,true).slideDown(200);
        }, 150);
    },function(){
        var _nav = $(this).attr('t_nav');
        clearTimeout( ytx[ _nav + '_timer' ] );
        ytx[ _nav + '_timer' ] = setTimeout(function(){
            $('#'+_nav).stop(true,true).slideUp(200);
        }, 150);
    });

    //导航绿色标题高度处理
    $(".submenu dl").each(function(){
        var dl_h = $(this).height();
        $(this).find("dt").height(dl_h);
    })

    //首页短信、im、语音、视频动画效果
    $(".box1 ul li").hover(function(){
        $(this).find(".unhover").find("i").animate({bottom:-145,opacity: '0'},500);
        $(this).find(".unhover").find(".txt").animate({left:-125,opacity: '0'},500);
        $(this).find(".hover").show().find("i").animate({top:0},500);
        $(this).find(".hover").show().find(".txt").animate({right:0},500);
    },function(){
        $(this).find(".unhover").find("i").animate({bottom:0,opacity: '1'},500);
        $(this).find(".unhover").find(".txt").animate({left:0,opacity: '1'},500);
        $(this).find(".hover").find("i").animate({top:-125},500);
        $(this).find(".hover").find(".txt").animate({right:-110},500);
    })

    //首页“简单”、“可靠”、“专注”、“全球”动画效果
    var current = $(".index_2 span.txt.current").index();
    $(".index_2 span.txt").not(".current").hover(function(){
        var span_index = $(this).index();
        $(this).addClass("current");
        $(".txt_desc").find("span").eq(span_index).fadeIn(800).siblings("span").fadeOut(800);
    },function(){
        var span_index = $(this).index();
        $(this).removeClass("current");
        $(".txt_desc").find("span").eq(span_index).fadeOut(800).siblings("span").eq(current).fadeIn(800);
    })


    //首页客户图标鼠标放上去状态变化
    $(".index_4 ul li").hover(function(){
        var img_src = $(this).find("img").attr("src");
        var img_name = img_src.substring(7).replace(".png","");
        //alert(img_name);
        $(this).find("img").attr("src","/front/"+img_name+"_hover.png");
    },function(){
        var img_src = $(this).find("img").attr("src");
        var img_name = img_src.substring(7).replace("_hover.png","");
        $(this).find("img").attr("src","/front/"+img_name+".png");
    })

    //语音通知手风琴效果
    $(".voice_2 ul li").each(function(){
        var fold = $(this).find(".fold");
        var unfold = $(this).find(".unfold");
        if(fold.is(":hidden")){
            $(this).width(680);
        }else{
            $(this).width(100);
        }
    })

    $(".voice_2 ul li").click(function(){
        var li_index = $(this).index();
        $(this).animate({width:680},200);
        $(this).find(".unfold").show();
        $(this).find(".fold").hide();
        $(this).siblings().animate({width:100},200);
        $(this).siblings().find(".unfold").hide();
        $(this).siblings().find(".fold").show();
    })

    //下拉框处理
    $("div.select_box ul li:even").css("background","#f5f5f5");

    $("div.select_box").click(function(e){
        if("readonly" == $(this).attr('readonly')){
            return false;
        }
        e.stopPropagation();
        $(this).children("ul").toggle();
        $(this).toggleClass("focus");
    });




})
