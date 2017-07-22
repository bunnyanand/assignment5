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



$name=$_SESSION['username'];
$info="SELECT username FROM inf0 WHERE username!='$name' "; 
$result = mysqli_query($con,$info);
$count=1;
while($row = mysqli_fetch_assoc($result))
{ 
echo "<div id='c$count'  onclick='users(this.id)'> ".$row['username']."</div>";     
    
$count++;  
  }



?>