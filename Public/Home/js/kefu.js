$(".side ul li").hover(function () {
    $(this).find(".sidebox").stop().animate({"width": "160px"}, 200).css({
        "opacity": "1",
        "filter": "Alpha(opacity=100)",
        "background": "#ae1c1c"
    })
}, function () {
    $(this).find(".sidebox").stop().animate({"width": "54px"}, 200).css({
        "opacity": "0.8",
        "filter": "Alpha(opacity=80)",
        "background": "#000"
    })
});