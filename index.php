<?php

require 'dbconnect.php';
session_start();
?>

<!DOCTYPE HTML>
<html>
<head>
<title>Uttarakhand Technical Univesity</title>
<link href="css/bootstrap.css" rel='stylesheet' type='text/css' />
<!-- jQuery (necessary JavaScript plugins) -->
<script src="js/bootstrap.js"></script>
<!-- Custom Theme files -->
<link href="css/style.css" rel='stylesheet' type='text/css' />
<!-- Custom Theme files -->
<!--//theme-style-->
<meta name="viewport" content="width=device-width, initial-scale=1">
<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
<meta name="keywords" content="University Responsive web template, Bootstrap Web Templates, Flat Web Templates, Andriod Compatible web template, 
Smartphone Compatible web template, free webdesigns for Nokia, Samsung, LG, SonyErricsson, Motorola web design" />
<script type="application/x-javascript"> addEventListener("load", function() { setTimeout(hideURLbar, 0); }, false); function hideURLbar(){ window.scrollTo(0,1); } </script>
<script src="js/jquery.min.js"></script>
 <script src="js/bootstrap.js"></script>

</head>

<body>

<div class="banner">	  
	 <div class="header">
			 <!--<div class="logo">
				 <a href="index.html"><img src="images/logo.jpg" alt=""/></a>
			 </div>-->
			 <div class="top-menu">
				 <span class="menu"></span>
				 <ul class="navig">
					 <li class="active"><a href="index.php">Home</a></li>
					 <li><a href="about.html">About</a></li>
					 <li><a href="examination.php">Examination</a></li>
				 </ul>
			 </div>
			  <!-- script-for-menu -->
		 <script>
				$("span.menu").click(function(){
					$("ul.navig").slideToggle("slow" , function(){
					});
				});
		 </script>
		 <!-- script-for-menu -->

			 <div class="clearfix"></div>
	 </div>

<div class="banner-grids">
		  <div class="container">
			 <div class="col-md-4 banner-grid">
				 <h3>Deans go here:</h3>
				 <div class="banner-grid-sec">
					 <div class="grid_info">

					 	<form action="dean_login.php" method="post" autocomplete="off">
					 	<center><p>Already a user?</p></center>
					 	<br>
						 <input type="submit" name="dlogin" value="LOG IN">
						 <br>
						 </form>
						 <form action="dean_signup.php" method="post" autocomplete="off">
						 <center><p>New here?</p></center>
						 <br>
						 <input type="submit" name="dsignup" value="SIGN UP">
					 	</form>
					 </div>
				 </div>
				</div> 

 			<div class="col-md-4 banner-grid">
				 <h3>HODs go here:</h3>
				 <div class="banner-grid-sec">
					 <div class="grid_info">

					 	<form action="hod_login.php" method="post" autocomplete="off">
					 	<center><p>Already a user?</p></center>
					 	<br>
						 <input type="submit" name="hlogin" value="LOG IN">
						 <br>
						 </form>

						 <form action="hod_signup.php" method="post" autocomplete="off">
						 <center><p>New here?</p></center>
						 <br>
						 <input type="submit" name="hsignup" value="SIGN UP">
					 	</form>
					 </div>
				 </div>
			 </div>

 			<div class="col-md-4 banner-grid">
				 <h3>Faculty go here:</h3>
				 <div class="banner-grid-sec">
					 <div class="grid_info">
						<form action="faculty_login.php" method="post" autocomplete="off">
					 	<center><p>Already a user?</p></center>
					 	<br>
						 <input type="submit" name="flogin" value="LOG IN">
						 <br>
						 </form>
						 <form action="faculty_signup.php" method="post" autocomplete="off">
						 <center><p>New here?</p></center>
						 <br>
						 <input type="submit" name="fsignup" value="SIGN UP">
					 	</form>
				 </div>
			 </div>
			 <div class="clearfix"></div>
		  </div>
	  </div>
	</div>
</div>

</body>
</html>