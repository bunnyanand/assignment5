



function myFunction(){
var pass1=document.getElementById("pass1");
var pass2=document.getElementById("pass2");
var check1=document.getElementById("name1");
var check2=document.getElementById("name2");
var check3=document.getElementById("mail");


if(pass1.value==pass2.value)
{
	pass1.style.border="1px solid green";
	pass2.style.border="1px solid green";
}	
else{
	
	pass1.style.border="1px solid red";
	pass2.style.border="1px solid red";
	$(".input5").effect( "shake", {times:4}, 700 );
	$(".input5").css('color','white');
//	$(".input5").css('color','black').show(1000);
	 setTimeout(function(){ 
	 
	 $(".input5").css('color','black');
	 
	 
	 },800);
	//$(".input5").css('color','black');
	
	return false;
    }
	
if(check1.value=="")
	
	{
		document.getElementById("message").innerHTML="please type your name";
		$("#message").effect( "shake", {times:2}, 500 );
		return false;
	}	
if(check2.value=="")
	
	{
		document.getElementById("message").innerHTML="please type your username";
		$("#message").effect( "shake", {times:2}, 500 );
		return false;
	}		
	
if(check3.value=="")
	
	{
		document.getElementById("message").innerHTML="please type your Email";
		$("#message").effect( "shake", {times:2}, 500 );
		return false;
	}		
		
if((pass1.value=="")||(pass1.value==""))	
    {
		document.getElementById("message").innerHTML="type your password";
		$("#message").effect( "shake", {times:2}, 500 );
		return false;
		
	}
	
	

}