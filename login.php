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
body{font-family:Arial, Helvetica, sans-serif;
     background-image:url(backer.jpg);
	 background-repeat:no-repeat;
	 background-size:cover;
	 background-color:black;
	 }
#message{  position:absolute;
                color:red;
		 top:10px;
		 font-weight:bold;
		 font-size:15px;
         margin-left:39px;}

.loginform{width:390px;
           height:330px;
           background:#4d4d4d;
           position:absolute;
           top:150px;
           left:450px;
           border-radius:5px;}
.sec{width:266px;
      height:40px;
     margin-left:50px;
    margin-top:10px;
    margin-down:10px;
     font-size:15px;
 padding-left:30px;
 padding-top:auto;
 padding-bottom:auto;
border:1px solid black;}
#user{margin-top:65px;}
.lb{width:300px;
      height:45px;
	  color:black;
	  background:#39e600;
	  font-weight:bold;
	  font-size:15px;
	  border:none;
	   margin-left:34px;
           margin-top:10px;}
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
</style>
</head>
<body>
<div class="header"><a  href="way.html"><img src="home.png" class="img"></a></div>

<div class="loginform">
<div id="message"></div>
<form  method="post" action="login.php" class="reg" onsubmit="return myFunction2()">
<input type="text" name="uname2" class="sec" placeholder="UserId" id="user">
<input type="password" name="password2" class="sec" placeholder="Password" id="password">
<input type="submit" value="login" class="lb">
<form>
</div>


<script src="java2.js"></script>

<?php
$server="localhost";
$user="id2113870_123456";
$password1="anand9930";
$database="id2113870_firstweb";

$con=mysqli_connect($server,$user,$password1,$database);
if (isset($_POST['uname2']) and isset($_POST['password2']))
{
$_SESSION["username"]= $_POST['uname2'];
 $uname2 = $_POST['uname2'];
 $password2 = $_POST['password2'];

 $check="SELECT * FROM inf0 WHERE username='$uname2'and password='$password2'";
$result = mysqli_query($con, $check) or die(mysqli_error($con));
 //if( $check==true)
 //{echo "lkakhdlkad";}
//else{echo "you are not registered ";}
$count = mysqli_num_rows($result);

//3.1.2 If the posted values are equal to the database values, then session will be created for the user.

if ($count == 1){

 header("Location:testing.php");
  
}else{

?>


<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.2.1/jquery.min.js"></script>
<script type = "text/javascript" 
         src = "https://ajax.googleapis.com/ajax/libs/jqueryui/1.11.3/jquery-ui.min.js"></script>
 <script>
                  //  alert('You pressed OK!');
             //  $('#message').html("ergrgrgrgrgrttg");
		//$('#message').effect( 'shake', {times:2}, 500 );
                // document.write("dfdfefe");
                
                document.getElementById("message").innerHTML="you dont have account";
                $('#message').effect( 'shake', {times:2}, 500 );
</script>
<?php
}

}
?>
</body>

</html>