<html>
<body>
<?php
session_start();
require 'dbconnect.php';
$email=$_GET['email'];
$_SESSION['demail']= $email;
$result=$mysqli->query("SELECT * from dean where offemail='$email'");
$row=mysqli_fetch_array($result);
                 $clgname=$row['clgname'];
                 $clgcode=$row['code'];
                 $mobile=$row['mobile'];
                 $exp=$row['experience'];                
                 $name=$row['name'];
                 $doj=$row['doj'];
?>
<!DOCTYPE HTML>
<html>
<head>
<title>Welcome <?= $name?></title>
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
            <form action="confirm_dean.php">
                <div class="form_details">
        <div class="sub-button">
         <input type="submit" name="hlogin" value="Back">
        </div>
    </div>
                
            </form>
        </center>
    </div>
</div>
</div>
<?php
                echo '<div class="container-fluid">
                  <div class="col-md-3">
                  </div>

                    <div class="col-md-6">';
                echo '<center><h2>DEAN DETAILS</h2><br></center>';
                echo '<table class="table table-hover">
    <thead>
      <tr>
        <th></th>
        <th></th>
      </tr>
    </thead>
    <tbody>
      <tr>
        <td><label>Name</label></td>
        <td>'.$name.'</td>
      </tr>
       <tr>
        <td><label>College Name</label></td>
        <td>'.$clgname.'</td>
      </tr>
      <tr>
        <td><label>College Code</label></td>
        <td>'.$clgcode.'</td>
      </tr>
      <tr>
        <td><label>Mobile Number</label></td>
        <td>'.$mobile.'</td>
      </tr>
      <tr>
        <td><label>Date of Joining</label></td>
        <td>'.$doj.'</td>
      </tr>
      <tr>
        <td><label>Experience</label></td>
        <td>'.$exp.'</td>
      </tr>
          </tbody>
  </table>
                    </div>

                  <div class="col-md-3">
                  </div>
                  </div>
                  ';

           echo '  <div class="container-fluid">
         <div class="row">
         <div class="col-sm-2">
         </div>
           <div class="col-sm-8">
           <center>
            <form action="user4_admin_email.php" method="post" autocomplete="off">
                <div class="form_details">
                  <div class="sub-button">
                      <input type="submit" name="l2" value="Confirm Dean">
                  </div>
                </div>
              </form>
              </center>
           </div>            
              
              <center>
                <form action="user5_admin_email.php" method="post" autocomplete="off">
                          <div class="form_details">
                            <div class="sub-button">
                              <input type="submit" name="l1" value="Reject">
                            </div>
                          </div>
                        </form>
                        </center>
                      </div>
                </div>
                <div class="col-sm-2">
                </div>
          </div>
          </div>';                   
?>

</body>
</html>
