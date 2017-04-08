
/*window.onload=function(){
	step1();
}*/
var url=window.location.href;
	index=url.indexOf("page=20");
	if(index !=-1){
		step1();
	}
var url02=window.location.href;
	index02=url.indexOf("page=21");
	if(index02 !=-1){
		step2();
	}
var url03=window.location.href;
	index03=url.indexOf("page=22");
	if(index03 !=-1){
		step3();
	}	

function step1()
	{
		document.getElementById('step_2').style.display='none';
		document.getElementById('step_3').style.display='none';
		document.getElementById('step_4').style.display='none';
		document.getElementById('step_1').style.display='block';


	}
	function step2()
	{
		document.getElementById('step_1').style.display='none';
		document.getElementById('step_3').style.display='none';
		document.getElementById('step_4').style.display='none';
		document.getElementById('step_2').style.display='block';

	}
	function step3(){
		document.getElementById('step_1').style.display='none';
		document.getElementById('step_2').style.display='none';
		document.getElementById('step_4').style.display='none';
		document.getElementById('step_3').style.display='block';
	}
function step4(){
	document.getElementById('step_1').style.display='none';
	document.getElementById('step_2').style.display='none';
	document.getElementById('step_3').style.display='none';
	document.getElementById('step_4').style.display='block';
}
	/*function up2()
	{
		document.getElementById('step_1').style.display='block';
		document.getElementById('step_2').style.display='none';
		
	}
	function up3()
	{
		document.getElementById('step_2').style.display='block';
		document.getElementById('step_3').style.display='none';
	}
	function up4()
	{
		document.getElementById('step_3').style.display='block';
		document.getElementById('step_4').style.display='none';
	}*/
	
