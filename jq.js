$(document).ready(function (){
var pass1=document.getElementById("pass1");
var pass2=document.getElementById("pass2");
$("#name1").focus(function(){
	
 $(".input1").css('color','#800080');	
	
	
});
$("#name1").focusout(function(){
	
 $(".input1").css('color','black');	
 
});

$("#name2").focus(function(){
	
 $(".input2").css('color','#800080');	
	
	
});
$("#name2").focusout(function(){
	
 $(".input2").css('color','black');	
 
});

$("#mail").focus(function(){
	
 $(".input3").css('color','#800080');	
	
	
});
$("#mail").focusout(function(){
	
 $(".input3").css('color','black');	
 
});

$("#pass1").focus(function(){
	
 $(".input4").css('color','#800080');	
	
	
});
$("#pass1").focusout(function(){
	
 $(".input4").css('color','black');	
 if(pass1.value==pass2.value)
{
	pass1.style.border="1px solid green";
	pass2.style.border="1px solid green";
	 $(".input4").css('color','black');	
}	
 
});
$("#pass2").focus(function(){
	
 $(".input5").css('color','#800080');	
	
	
});
$("#pass2").focusout(function(){
	
$(".input5").css('color','black');
 if(pass1.value==pass2.value)
{   
	pass1.style.border="1px solid green";
	pass2.style.border="1px solid green";
	 $(".input5").css('color','black');	
}	
 });
	
$(".rightform").show(5000);


});