<?php 
session_start();
$email=$_SESSION['email'];
echo $email;
?>
<!DOCTYPE HTML>
<html>
<head>
<title>Send mail</title>
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
<div class="container-fluid">
<div class="row">
    <div class="col-xs-6">
    </div>
    <div class="col-xs-6">
        <center>
            <form action="dean_profile.php">
                <div class="form_details">
        <div class="sub-button">
         <input type="submit" name="hlogin" value="Profile">
        </div>
    </div>
                
            </form>
        </center>
    </div>
</div>


<div class="contact">
     <div class="container-fluid">
         <div class="main-head-section">
            <h2>Log In to your gmail account to send mail.</h2>
         </div>
     <div class="contact_top">                  
            <div class="col-md-3">
            </div>
             <div class="col-md-7">
             <center>
    <form action="confirm_mail.php" method="post">
    <input type="password" name="password" autocomplete="off" class="text" placeholder="password" onfocus="this.value = '';" onblur="if (this.value == '') {this.value = 'password';}"  required="true">	
					  	  
<div class="form_details">
                  <div class="sub-button">
                      <input type="submit" name="submit" value="Sign In">
                  </div>
                </div>
<input type="submit" name="submit" value="submit">
</form>
</center>
</div>
</div>
</div>
</div>
</div>
</body>
</html>