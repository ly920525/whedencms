
	
	/*function mouse(e) {         
		if (e.type  == 'mouseover')     
		alert("鼠标移进")         
		else             
		alert("鼠标移出")     
		} */
		var meizz;
			function mouseOver()
			{
				meizz = setTimeout("funa()", 300); //设定程序延迟一秒钟执行
			}
			function mouseOverb()
			{
			    meizz = setTimeout("funb()", 300); //设定程序延迟一秒钟执行
			}
			function mouseOverc()
			{
			    meizz = setTimeout("func()", 300); //设定程序延迟一秒钟执行
			}
			function mouseOverd()
			{
			    meizz = setTimeout("fund()", 300); //设定程序延迟一秒钟执行
			}
			function mouseOut()
			{
			    clearTimeout(meizz);
			}
			function funa()
			{
			    $("#imglb02").hide(700);
				$("#imglb03").hide(700);
				$("#imglb04").hide(700);
				$("#imglb01").show(1000);
				$("#text01").hide(700);
				$("#text03").hide(700);
				$("#text04").hide(700);
				$("#text02").show(700);
			}
			
			function funb(){
				$("#imglb01").hide(700);
				$("#imglb03").hide(700);
				$("#imglb04").hide(700);
				$("#imglb02").show(1000);
				$("#text01").show(500);
				$("#text02").hide(700);
				$("#text03").hide(700);
				$("#text04").hide(700);
			}
			
			function func(){
				$("#imglb01").hide(700);
				$("#imglb02").hide(700);
				$("#imglb04").hide(700);
				$("#imglb03").show(1000);
				$("#text02").hide(700);
				$("#text01").hide(700);
				$("#text04").hide(700);
				$("#text03").show(700);
			}
			function fund(){
				$("#imglb01").hide(700);
				$("#imglb02").hide(700);
				$("#imglb03").hide(700);
				$("#imglb04").show(1000);
				$("#text01").hide(500);
				$("#text02").hide(700);
				$("#text03").hide(700);
				$("#text04").show(700);
			}
	/*$(" #timezhou01").mouseover(function(){
		$("#imglb02").hide(700);
		$("#imglb03").hide(700);
		$("#imglb04").hide(700);
		$("#imglb01").show(1000);
		$("#text01").hide(700);
		$("#text03").hide(700);
		$("#text04").hide(700);
		$("#text02").show(700);
		});
	
	
	
	$("#timezhou02").mouseover(function(){
		$("#imglb01").hide(700);
		$("#imglb03").hide(700);
		$("#imglb04").hide(700);
		$("#imglb02").show(1000);
		$("#text01").show(500);
		$("#text02").hide(700);
		$("#text03").hide(700);
		$("#text04").hide(700);
		});
	
	
	
	$("#timezhou03").mouseover(function(){
		$("#imglb01").hide(700);
		$("#imglb02").hide(700);
		$("#imglb04").hide(700);
		$("#imglb03").show(1000);
		$("#text02").hide(700);
		$("#text01").hide(700);
		$("#text04").hide(700);
		$("#text03").show(700);

		});
		
		
	$("#timezhou04").mouseover(function(){
		$("#imglb01").hide(700);
		$("#imglb02").hide(700);
		$("#imglb03").hide(700);
		$("#imglb04").show(1000);
		$("#text01").hide(500);
		$("#text02").hide(700);
		$("#text03").hide(700);
		$("#text04").show(700);
		});	*/
		
		
	
		
	
	
	
	
