<?php
session_start();
?>
<!DOCTYPE HTML>
<html>
<head>
<title>Dean Sign Up</title>
<link href="css/bootstrap.css" rel='stylesheet' type='text/css' />
<!-- jQuery (necessary JavaScript plugins) -->
<script src="js/bootstrap.js"></script>
<!-- Custom Theme files -->
<link rel="stylesheet" href="css/touchTouch.css" type="text/css" media="all" />
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
<!-- banner --> 
<div class="banner2">	  
	 <div class="header">
			 <div class="top-menu">
				 <span class="menu"></span>
				 <ul class="navig">
					 <li><a href="index.php">Home</a></li>
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
</div>


<div class="contact">
	 <div class="container-fluid">
		 <div class="main-head-section">
		 	<h2>For HODs</h2>
		 </div>

		 <div class="contact_top">			 		
		 	<div class="col-md-3">
		 	</div>
			 <div class="col-md-5">
			 		<h4>Sign Up</h4>
			 			<center>
						<form action="hod_submit.php" method="post" autocomplete="off">

<table class="table table-hover">
    <thead>
      <tr>
        <th></th>
        <th></th>
      </tr>
    </thead>
    <tbody>
      <tr>
        <td><label>COLLEGE NAME</label></td>
        <td><input type="text" required autocomplete="off" name="clgname"></td>
      </tr>
      <tr>
        <td><label>COLLEGE CODE</label></td>
        <td><input type="text" required autocomplete="off" name="clgcode"></td>
      </tr>
      <tr>
      	<td><label>BRANCH</label></td>
      	<td><select name="branch">
    <option value="computer science">COMPUTER SCIENCE</option>
    <option value="information technology">INFORMATION TECHONOLOGY</option>
    <option value="civil">CIVIL</option>
    <option value="mechanical">MECHANICAL</option>
    <option value="electrical">ELECTRICAL</option>
  </select></td>
      </tr>
      <tr>
        <td><label>FULL NAME</label></td>
        <td><input type="text" required autocomplete="off" name="name"></td>
      </tr>
       <tr>
        <td><label>MOBILE NUMBER</label></td>
        <td><input type="text" required autocomplete="off" name="mobile"></td>
      </tr>
       <tr>
        <td><label>OFFICIAL EMAIL</label></td>
        <td><input type="email" required autocomplete="off" name="offemail"></td>
      </tr>
       <tr>
        <td><label>PERSONAL EMAIL</label></td>
        <td><input type="email" required autocomplete="off" name="peremail"></td>
      </tr>
       <tr>
        <td><label>DATE OF JOINING</label></td>
        <td><input type="date" required autocomplete="off" name="doj"></td>
      </tr>
       <tr>
        <td><label>OVERALL EXPERIENCE</label></td>
        <td><input type="text" required autocomplete="off" name="exp"></td>
      </tr>
       <tr>
        <td><label>PASSWORD</label></td>
        <td><input type="password" required autocomplete="off" name="pass"></td>
      </tr>
    </tbody>
  </table>
   <div class="form_details">
		<div class="sub-button">
		 <input type="submit" value="Sign Up">
		</div>
  </div>
</div>
</form>
</center>
</div>
<div class="col-md-4">
</div>
</div>
</div>
</div>
</body>
</html>