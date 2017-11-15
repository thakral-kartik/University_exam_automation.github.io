<?php 
session_start();
require 'dbconnect.php';

$email = $_SESSION['email'];
     $result1=$mysqli->query("SELECT * from faculty WHERE offemail = '$email' ");
          $row1=mysqli_fetch_array($result1);
           $name=$row1['name'];
           $mobile=$row1['mobile'];
           $email=$row1['peremail'];
           $exp=$row1['experience'];
           $desig=$row1['designation'];
           $br=$row1['branch'];
           $pass=$row1['password'];
?>

<!DOCTYPE HTML>
<html>
<head>
<title>Update</title>
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
            <h2>For Faculties</h2>
         </div>
         <div class="row">
    <div class="col-xs-6">
    </div>
    <div class="col-xs-6">
        <center>
            <form action="faculty_profile.php">
                <div class="form_details">
        <div class="sub-button">
         <input type="submit" name="hlogin" value="Back">
        </div>
    </div>
                
            </form>
        </center>
    </div>
     <div class="contact_top">                  
            <div class="col-md-3">
            </div>
             <div class="col-md-7">
                    <h4>Update</h4>
                        <center>
<form action="faculty_update1.php" method="post" autocomplete="off">

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
        <td>    <input type="text" required autocomplete="off" name="name" value=<?=htmlspecialchars($name)?>>
      </tr>
     <tr>
        <td> <label>MOBILE NUMBER</label></td>
        <td>    <input type="text" required autocomplete="off" name="mobile" value=<?php echo $mobile ;?>>
      </tr>
      <tr>
        <td> <label>PERSONAL EMAIL</label></td>
        <td>    <input type="email" required autocomplete="off" name="peremail" value=<?php echo $email;?>>
      </tr>
      <tr>
        <td><label>OVERALL EXPERIENCE</label></td>
        <td><input type="text" required autocomplete="off" name="exp" value=<?php echo$exp;?>>
      </tr>
      <tr>
        <td><label>BRANCH</label></td>
        <td><select name="branch" value=<?php echo $br;?>>
    <option value="computer science">COMPUTER SCIENCE</option>
    <option value="information technology">INFORMATION TECHONOLOGY</option>
    <option value="civil">CIVIL</option>
    <option value="mechanical">MECHANICAL</option>
    <option value="electrical">ELECTRICAL</option>
  </select></td>
      </tr>
    <tr>
        <td><label>DESIGNATION</label></td>
        <td>    <select name="desig" value=<?php echo $desig;?>>
    <option value="Assistant Professor">Assistant Professor</option>
    <option value="Associate Professor">Associate Professor</option>
    <option value="Professor">Professor</option>
  </select></td>
      </tr>
   <tr>
        <td><label>PASSWORD</label></td>
        <td><input type="password" value=<?php echo $pass?> autocomplete="off" name="pass"></td>
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