<?php
session_start();
?>

<!DOCTYPE html>
<html>
<head>
<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.2.1/jquery.min.js"></script>
<script type = "text/javascript" 
         src = "https://ajax.googleapis.com/ajax/libs/jqueryui/1.11.3/jquery-ui.min.js"></script>
<meta charset="utf-8">
<meta name="viewport" content="width=device-width, initial-scale=1.0">

<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
<link href='https://fonts.googleapis.com/css?family=Amiko' rel='stylesheet'>
<style>
::-webkit-input-placeholder {
  color:#999999;
}
body{font-family:Arial, Helvetica, sans-serif;
     background-image:url(backer3.jpg);
	 background-repeat:no-repeat;
	 background-size:cover;
	 background-color:black;
	 }
container{min-width:100%;
          min-width:100%;}

.rightform {position:absolute;
                     top:170px;
			left:32%;
			width:500px;
			height:400px;
		        z-inder:+6;
			background:transperent;
			min-width:400px;}
#firstbox {  position:absolute;
           height:49px;
           width:499px;
		   display:inline-block;
		   top:90px;
		   left:0px;}		
.box {width:172px;
      height:21px;
	  background-color:white;
      border-radius: 5px;
	  border:1px solid #bdc7d8;
	   font-size: 18px;
       padding-left:25px;
	   padding-top: 8px;
       padding-bottom: 8px;
	   margin-right:7px;
      margin-bottom:5px

	 }		

.big { background-color:white;
      border-radius: 5px;
	  border:1px solid #bdc7d8;
	   font-size: 18px;
       padding-left:25px;
	   padding-top: 8px;
       padding-bottom:8px;
       padding-right:0px;
	   height:21px;
	   width:379px;
	   margin-bottom:5px;
	   margin-top:5px;
	   }

.mail{background-color:white;
      border-radius: 0px 0px 0px 0px;
	  border:1px solid #bdc7d8;
	   font-size: 18px;
       padding-top: 8px;
       padding-bottom: 8px;
	   padding-left:25px;
	   height:21px;
	   width:379px;
	   margin-bottom:5px;
	   margin-top:5px;}	 
input[type=radio]{width:110px;
                  height:39px;
				  -webkit-appearance:none;
				  -moz-appearance:none;
				  background:#483D8B;
				  }	
input[type=radio]:checked{ background:#DC143C;
                        transition:0.8s;}		
.radio1{position:absolute;
        border-radius:10px 0px 0px 10px;
		left:89px;
		top:190px;
		border:2px solid #8B008B;}						
.radio2{position:absolute;
        border-radius:0px 10px 10px 0px;
        left:199px;
		top:190px;
		border:2px solid #8B008B;}
.img1{position:absolute;
     left:120px;
	 top:200px;
	 }
.img2{position:absolute;
     left:250px;
	 top:200px;}	
	

.input1::before{content:"\f007";
               position:absolute;         
			   font-family:"FontAwesome";
			   font-size:25px;
			   padding-top:6px; 	  
			   padding-left:3px; 
			   }
.input2::before{content:"\f21b";
               position:absolute;         
			   font-family:"FontAwesome";
			   font-size:25px;
			   padding-top:6px; 	  
			   padding-left:3px; 
			   }	
.input3::before{content:"\f0e0";
               position:absolute;         
			   font-family:"FontAwesome";
			   font-size:20px;
			   padding-top:13px; 	  
			   padding-left:3px; 
			   }	
.input4::before{content:"\f023";
               position:absolute;         
			   font-family:"FontAwesome";
			   font-size:25px;
			   padding-top:6px; 	  
			   padding-left:3px;
			   left:0px;
			   top:97px;}				   
.input5::before{content:"\f023";
                  position:absolute;          
			   font-family:"FontAwesome";
			   font-size:25px;
			   padding-top:6px; 	  
			   padding-left:3px; 
			   left:0px;
			   top:146px;}	
.submit{position:absolute;
        left:60px;
		top:250px;
		}
.submiter{width:300px;
          height:45px;
          color:white;
          background:#529ecc;
         border:none;
         border-radius:5px;
         font-size:20px;}

#message{position:absolute;
         color:red;
		 top:66px;
		 font-weight:bold;
		 font-size:15px;}


.sec{width:150px;
     height:30px;}
.header{width:100%;
        height:60px;
        position:absolute;
        top:0px;
        left:0px;
       background:#330033;
       }

.img{position:absolute;
     left:610px;
     top:7px;
    cursor:pointer;
   }
.img:hover{ border-bottom:5px solid white;
           transition:0.6s;}

.backer{position:absolute;
        background:#010101;
        width:470px;
        height:400px;
        left:30%;
        top:160px;
   opacity: 0.5;
    filter: alpha(opacity=50);}
			   
</style>
</head>
<body>
<div class="backer"></div>
<div class="header"><a  href="way.html"><img src="home.png" class="img"></a></div>
<div class="container">


<div class="rightform">
<div id="message"></div>
<div id="firstbox">
<form action="register.php" method="post" onsubmit="return myFunction()" >
<span class="input1">
<input type="text" placeholder="name"class="box" name="name" id="name1">
</span>
<span class="input2">
<input type="text" placeholder="user name" class="box" id="name2" name="uname">
</span>
<div id="bigbox">
<span class="input3">
<input type="email" placeholder="email address"class="mail" id="mail" name="email"></span>
<span class="input4">
<input type="password" placeholder="New password" class="big" id="pass1" name="password"></span>
<span class="input5">
<input type="password" placeholder="re-password" class="big" id="pass2"></span>
<input type="radio" name="gender" value="male" class="radio1">
<input type="radio" name="gender" value="female"class="radio2">
<img src="male1.png" class="img1">
<img src="female.png"class="img2">
<div class="submit">
<input type="submit" value="register" class="submiter">
</div>
</div>
</div>


</form>


</div>


</div>

<?php
$server="localhost";
$user="id2113870_123456";
$password1="anand9930";
$database="id2113870_firstweb";
$con=mysqli_connect($server,$user,$password1,$database);
if (mysqli_connect_errno()) {
  echo "Failed to connect to MySQL: " . mysqli_connect_error();
}
if (isset($_POST['name']) and isset($_POST['uname']) and isset($_POST['email']) and isset($_POST['password']))
{$name = mysqli_real_escape_string($con, $_POST['name']);
$uname = mysqli_real_escape_string($con, $_POST['uname']);
$_SESSION["username"]=$uname;
$email = mysqli_real_escape_string($con, $_POST['email']);

$password= mysqli_real_escape_string($con, $_POST['password']);

 $check="SELECT * FROM inf0 WHERE username='$uname' and email='$email '";
$result = mysqli_query($con, $check) or die(mysqli_error($con));
$count = mysqli_num_rows($result);

if ($count == 1){
echo "this account already exists";





?>


<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.2.1/jquery.min.js"></script>
<script type = "text/javascript" 
         src = "https://ajax.googleapis.com/ajax/libs/jqueryui/1.11.3/jquery-ui.min.js"></script>
 <script>
                
                
                document.getElementById("message").innerHTML="THIS ACCOUNT ALREADY EXISTS!!! ";
                $('#message').effect( 'shake', {times:2}, 500 );
</script>
<?php










}


$sql="INSERT INTO inf0(id,name,username,email,password)
    VALUES('','$name','$uname','$email','$password')";
if (!mysqli_query($con,$sql)) {
  die('Error: ' . mysqli_error($con));
}
echo "1 record added";
$_SESSION["value"]=1;


?>


<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.2.1/jquery.min.js"></script>
<script type = "text/javascript" 
         src = "https://ajax.googleapis.com/ajax/libs/jqueryui/1.11.3/jquery-ui.min.js"></script>
 <script>
                
                
                document.getElementById("message").innerHTML="YOU ARE SUCCESSFULLY REGISTERED!!! ";
                $('#message').css('color','green');
                $('#message').effect( 'shake', {times:2}, 500 );
             var myVar = setInterval(myTimer, 1800);

             function myTimer() {
    window.location = 'testing.php';
   
}
               
</script>
<?php





 












mysqli_close($con);
 
}
 ?>


<script src="java.js"></script>
<script src="jq.js"></script>

</body>

</html>