<?php 
session_start();
require 'dbconnect.php';

$email = $_SESSION['email'];
     $result1=$mysqli->query("SELECT * from dean WHERE offemail = '$email' ");
          $row1=mysqli_fetch_array($result1);
           $name=$row1['name'];
           $mobile=$row1['mobile'];
           $email=$row1['peremail'];
           $exp=$row1['experience'];
           $pass=$row1['password'];
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
            <h2>For Deans</h2>
         </div>
     <div class="contact_top">                  
            <div class="col-md-3">
            </div>
             <div class="col-md-7">
                    <h4>Update</h4>
                        <center>
<form action="dean_update1.php" method="post" autocomplete="off">
<table class="table table-hover">
    <thead>
      <tr>
        <th></th>
        <th></th>
      </tr>
    </thead>
    <tbody>
         <tr>
        <td><label>FULL NAME</label></td>
        <td><input type="text" required autocomplete="off" name="name"value=<?php echo $name?>></td>
      </tr>
     <tr>
        <td> <label>MOBILE NUMBER</label></td>
        <td> <input type="text" required autocomplete="off" name="mobile"value=<?php echo $mobile;?>></td>
      </tr>
      <tr>
        <td> <label>PERSONAL EMAIL</label></td>
        <td> <input type="email" required autocomplete="off" name="peremail"value=<?php echo $email;?>></td>
      </tr>
      <tr>
        <td><label>OVERALL EXPERIENCE</label></td>
        <td><input type="text" required autocomplete="off" name="exp" value=<?php echo $exp;?>></td>
      </tr>
      <tr>
        <td><label>PASSWORD</label></td>
        <td><input type="password" required autocomplete="off" name="pass" value=<?php echo $pass;?>></td>
      </tr>  
    </tbody>
  </table>
   <div class="form_details">
        <div class="sub-button">
         <input type="submit" value="Update">
        </div>
    </div>
</div>
</form>
</center>
</div>
<div class="col-md-2">
</div>
</div>
</div>
</div>
</body>
</html>