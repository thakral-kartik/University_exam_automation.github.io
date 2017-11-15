<!DOCTYPE HTML>
<html>
<head>
<title>Admin Login</title>
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

<!---->

	<div class="contact">
	 <div class="container">
		 <div class="main-head-section">
		 	<h2>For Admin</h2>
		 </div>
		 <div class="contact_top">			 		
		 	<div class="col-md-2 company-right">
			 </div>	
			 <div class="col-md-8 contact_left">
			 		
			 		<h4>Log In</h4>

			 		<form action="webadmin.php" method="post" autocomplete="off">
					  <div class="form_details">
					  	  <input type="text" name="name" autocomplete="off" class="text" placeholder="User Name" onfocus="this.value = '';" onblur="if (this.value == '') {this.value = 'User Name';}"  required="true">

					  	  <input type="password" name="pass" autocomplete="off" class="text" placeholder ="password" onfocus="this.value = '';" onblur="if (this.value == '') {this.value = 'password';}"  required="true">	
					  	  
						  <div class="clearfix"> </div>
						 <div class="sub-button">
							 <input type="submit" name="login" value="Log In">
						 </div>
					  </div>
				   </form>
				   
			 </div>
			 <div class="col-md-2 company-right">
			 </div>		
			 
				<div class="clearfix"> </div>
		  </div>
	 </div>
</div>

</body>
</html>


