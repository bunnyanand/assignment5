<?php
session_start();
if(!isset($_SESSION['username']))
{   header("Location:login.php");}
?>
<!DOCTYPE html>
<html>

   <head>
<link href="https://fonts.googleapis.com/css?family=Fresca|Patrick+Hand+SC" rel="stylesheet"> 
<link href="https://fonts.googleapis.com/css?family=Titillium+Web" rel="stylesheet">
        <script src = "https://ajax.googleapis.com/ajax/libs/jquery/2.1.3/jquery.min.js"></script>
		
      <script type = "text/javascript" language = "javascript">
           
  function users(clicked_id){
 var p,q;
     
        p=$('#'+clicked_id).html();
       //   p=document.getElementById(clicked_id).html;
       // document.getElementById("header").html=p;
           $("#header").html(p);
         //    $("#receiver").val()=p;
      //  document.getElementById("receiver").value=p;
      //    document.getElementById("message").value=;
           //$("#message").val()=p;
         //   var receiver = $("#receiver").val();
               
           //    $("#two").load('send.php',{ "receiver":receiver,"message":message    } );
          
}

         $(document).ready(function(){



          $(".names").load('users.php');
            $("#driver1").click(function(event) {
             
                var receiver = $("#receiver").val();
                var message = $("#message").val();
                $("#two").load('send.php',{ "receiver":receiver,"message":message    } );
               


$("#one").load('send1.php',{"receiver":receiver,"message":message  } )








  });

         });
      </script>
<style>

#one {
      padding:10px;
	display:inline-table;
	
      margin:15px;}

#display{width:79%;
      
       
	font-family: 'Patrick Hand SC', cursive;
	 font-size:30px;
    border:2px solid red;
    position:absolute;
      left:0px;
     bottom:0px;
      }	  
#two{margin-right:20px;
	 
	display:inline-table; 
	float:right;
        border-radius:15px;
        margin:15px;}	

.mr{width:490px;
    min-height:100px;
	background:yellow;}	
	
  .ms{width:490px;
    min-height:100px;
	background:orange;}	


.form{position:absolute;
      left:0px;
      top:0px;}

.users{position:absolute;
      right:0px;
      top:0px;
      width:20.5%;
      height:99%;
     border:2px solid orange;}
.names{background:#800033;
       margin-top:0px;
      font-size:25px;
     overflow-y: scroll;
    
     height:73.1%;
    font-family: 'Titillium Web', sans-serif;}
#aa{position:absolute;
    top:100px;}
#header{width:79.8%;
        height:10%;
        background:#b366ff;
top:30.5%;
position:absolute;
left:0px;
margin-bottom:0px;
 font-size:30px;
 color:white;}

#c1,#c2,#c3,#c4,#c5,#c6,#c7,#c8,#c9,#c10,#c11{background: #001a66;
    padding:10px;
    cursor:pointer;
   left:0px;
 color:white;
 margin-top:10px; }
#message{width:750px;
        height:150px;
        position:absolute;
       left:200px;
       top:1px;
      font-size:29px;}
#receiver{position:absolute;
          left:0px;
         top:90%;
         height:40px;
         width:136px;
        font-size:25px;}
.left{
      background:#4da6ff;
     border-radius:10px;
     padding;2px;}
#driver{position:absolute;
        left:10%;
        top:1%;
        height:50%;}

#driver1{position:absolute;
        left:87%;
        top:2%;
        height:50%;
      background:url("send.png") 0 0 no-repeat;
	      height:100px;
		  width:100px;
		border:2px solid white;}
form{width:1100px;}
#logout{left:990px;
   top:300px;
    background:white;
    font-size:20px;
   position:absolute;

font-family: 'Patrick Hand SC', cursive;}
</style>
   </head>
	
   <body>
<div class="box">
<div id="logout"><a href="way.html" logout</a></div>
<div id="header"></div>	
<div id="display" style="overflow-y: scroll; height:59%;"  >
<div id="one"></div>
<div id="two"></div>
</div>
<div class="users">
<img src="users.png" style="width:100%;  background:#00b3b3;">

<div class="names"></div>
</div>


</div>
<div class="form">
	<form method="post">
    <div>	
       <img src="male.png" style="width:140px; height:140px;">
       <input type=text name="receiver" id="receiver" placeholder="name">
   </div>
       <textarea name="message" id="message"></textarea>
     
      <input type = "button" id = "driver1" value = "">
	</form>
</div>	
   </body>
	
</html>