<?php

session_start();
$server="localhost";
$user="id2113870_123456";
$password1="anand9930";
$database="id2113870_firstweb";
$con=mysqli_connect($server,$user,$password1,$database);
if (mysqli_connect_errno()) {
  echo "Failed to connect to MySQL: " . mysqli_connect_error();
}



if (isset($_POST['receiver']) and isset($_POST['message']))

{ 
 $sender =$_SESSION['username'];
$receiver = mysqli_real_escape_string($con, $_POST['receiver']);
$message = mysqli_real_escape_string($con, $_POST['message']);




$info="SELECT message FROM messages WHERE sender='$receiver' and receiver='$sender' "; 
$result = mysqli_query($con,$info);

while($row = mysqli_fetch_assoc($result))
{ echo "<div class='left'>" .$row['message']."</div>";     
 echo"<br>";         }












}

?>