<?php
session_start();
?>

<!DOCTYPE html>
<html>
<head>
	<title>  RAILWAY SYSTEM </title>
	<link rel="shortcut icon" href="images/favicon.png"></link>
	<meta charset="utf-8">
	<meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta name="description" content="">
    <meta name="author" content="">
	<link href="css/bootstrap.min.css" rel="stylesheet" ></link>
	<link href="css/bootstrap.css" rel="stylesheet" ></link>
	<link href="css/Default.css" rel="stylesheet" >	</link>
	<link href="css/bootstrap1.min.css" rel="stylesheet" ></link>
	<script type="text/javascript" src="js/jquery.js"></script>
	<script>
		$(document).ready(function()
		{
			var x=(($(window).width())-1024)/2;
			$('.wrap').css("left",x+"px");
		});
	</script>
	
	<script type="text/javascript" src="js/bootstrap.min.js"></script>
	<script type="text/javascript" src="js/bootstrap.js"></script>
	<script type="text/javascript" src="js/man.js"></script>
	
	
</head>
<body>

	<div class="wrap" id="ssd" style="float:left;height:150%;width:100%;background-image:url(images/desktop-wallpaper-background-midnight-train-dark-blue.jpg);">
		<!-- Header -->
		<div class="header">
			<div style="float:left;width:150px;">
				<img src="images/5c5ebb82714d1567467b95f833f9d014.jpg"/>
			</div>		
			<div>
			<div style="float:right; font-size:20px;margin-top:20px;">
			<?php
			 if(isset($_SESSION['name']))	
			 {
			 echo "Welcome,".$_SESSION['name']."&nbsp;&nbsp;&nbsp;<a href=\"logout.php\" class=\"btn btn-info\">Logout</a>";
			 }
			 else
			 {
			 ?>
				<a href="login1.php" class="btn btn-info">Login</a>&nbsp;&nbsp;&nbsp;&nbsp;
				<a href="signup.php?value=0" class="btn btn-info">Signup</a>
			<?php } ?>
			
			
			</div>
			<div id="heading">
				<a href="index.php"> RAILWAY SYSTEM</a>
			</div>
			</div>
		</div>
		
		<!-- Navigation bar -->
		<div class="navbar navbar-inverse">
			<div class="navbar-inner">
				<div class="container" >
				<a class="brand" href="index.php" >HOME</a>
				<a class="brand" href="train.php" >FIND TRAIN</a>
				<a class="brand" href="reservation.php">RESERVATION</a>
				<a class="brand" href="profile.php">PROFILE</a>
				</div>
			</div>
		</div>
		<div class="span12 well">
			<!-- Photos slider -->
			<div id="myCarousel" class="carousel slide" style="width:600px; float:left;margin-bottom:3px;">		
				<div class="carousel-inner">
				<div class="active item"><img src="images/106401402.webp" style="width:600px;height:350px;"/></div>
				<div class="item"><img src="images/download (1).jpeg" style="width:600px;height:350px;"/> </div>
				<div class="item"><img src="images/download.jpeg" style="width:600px;height:350px;"/></div>
				<div class="item"><img src="images/11.png" style="width:600px;height:350px;"/></div>
				<div class="item"><img src="images/Gatiman-Express-1.webp" style="width:600px;height:350px;"/> </div>
				<div class="item"><img src="images/images.jpeg"style="width:600px;height:350px;"/></div>
				
				</div>
				<a class="carousel-control left" href="#myCarousel" data-slide="prev">&lsaquo;</a>
				<a class="carousel-control right" href="#myCarousel" data-slide="next">&rsaquo;</a>
			</div>
			<!-- News and Alert-->
			<div class="news" Style="float:right;">
			<marquee behavior="scroll" id="marq"  scrollamount=3 direction="up" height="294px" onmouseover="nestop()" onmouseout="nestrt()">
				<div>
				<p><b>Vandhe bharat has given high signal priority and can overtake any train ahead of them.</b></p>
				</br>
				<p><b>Second higher priority has given to Rajhadhani Duronto Shatabdhi and Gattiman overtaking trains below priority of this.</b></p></br>
				<p><b>It is manidatory for all train to stop atleast at 5 junction and 5 main and central station.</b></p></br>
				<p><b>Railway issues new catering policy for better food.</b></p></br>
				<p><b>Super fast mail has given higher priority than express passengers and other trains.</b><p></br>
			
				
				</div>
			</marquee>
			</div>
		</div>
		
		<!-- Copyright -->
<footer >
		</footer>	</div>
	
</body>
</html>

<?php

if(isset($_SESSION['error']))
{
session_destroy();
}

?>