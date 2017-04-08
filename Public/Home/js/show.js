function funa() {
	$("#im02").show(1000,function(){
		$("#im03").show(1000,function(){
			$("#im05").show(1000,function(){
				$("#im04").show(1000,function(){
					$("#im06").show(1000,function(){
						$("#im07").show(1000);
					});
				});
			});
		});
	});
}
var pcontent_right_height = $("#projects").offset().top;
$(window).scroll(function(){
	if($(window).scrollTop()>pcontent_right_height){
		funa();
		/*$(".pcontent_left").show();*/
	}

});
