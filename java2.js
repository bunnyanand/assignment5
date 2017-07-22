function myFunction2(){
var user=document.getElementById("user");
var password=document.getElementById("password");

if(user.value=="")
	
	{
		document.getElementById("message").innerHTML="please type your UserId";
		$("#message").effect( "shake", {times:2}, 500 );
		return false;
	}

if(password.value=="")
	
	{
		document.getElementById("message").innerHTML="please type your password";
		$("#message").effect( "shake", {times:2}, 500 );
		return false;
	}	
	
	

}