<?php
session_start();
require 'dbconnect.php';
if ( $_SESSION['login'] != 1 ) {
  $_SESSION['message'] = "You must log in before viewing your profile page!";
   header("location: error.php");    
}//to make sure that user may not open the profile page with link
else {
   
    $email = $_SESSION['email'];
     $result1=$mysqli->query("SELECT * from faculty WHERE offemail = '$email' ");
      $row1=mysqli_fetch_array($result1);
      $name=$row1['name'];
    $active = $_SESSION['active'];
}
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
    <div class="col-xs-6 col-xs-push-8">
      <form action="logout.php" method="post" autocomplete="off">
        <div class="form_details">
          <div class="sub-button">
            <input type="submit" name="logout" value="Log Out">
          </div>
        </div>
      </form>
    </div>
    <div class="contact">
      <div class="col-xs-6 col-xs-pull-4">
          <h2>Welcome <?php echo $name?><sub>(<?= $email ?>)</sub></h2>
      </div>
    </div>
  </div>
</div>

           <?php 

            if ( !$active ){
              echo "<center><br> Your account is not verified yet.. <br><br><br><br><b>Contents not available</b></center>";
          }else{
                $result= $mysqli->query("SELECT * FROM faculty WHERE offemail = '$email'");
                 $row=mysqli_fetch_array($result);
                 //$row['name'] ;
                 $clgname=$row['clgname'];
                 $branch=$row['branch'];
                 $_SESSION['branch']=$row['branchcode'];
                 $desig=$row['designation'];
                 $mobile=$row['mobile'];
                 $doj=$row['doj'];
                 $exp=$row['experience']; 
                 $pe=$row['peremail'];    

                 echo '<div class="container-fluid">
                  <div class="col-md-3">
                  </div>

                  <div class="col-md-6">
                  <center><h2>Profile</h2><br></center>
                  <table class="table table-hover">
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
        <td><label>Branch</label></td>
        <td>'.$branch.'</td>
      </tr>
      <tr>
        <td><label>Designation</label></td>
        <td>'.$desig.'</td>
      </tr>
       <tr>
        <td><label>College Name</label></td>
        <td>'.$clgname.'</td>
      </tr>
      <tr>
        <td><label>Mobile Number</label></td>
        <td>'.$mobile.'</td>
      </tr>
      <tr>
        <td><label>Official email id</label></td>
        <td>'.$email.'</td>
      </tr>

       <tr>
        <td><label>Personal email id</label></td>
        <td>'.$pe.'</td>
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
                  </div> ';


                  echo'   
             <div class="container-fluid">
          <div class="row">
          
          <div class="col-md-12">
          <center>
                <form action="faculty_update.php" method="post" autocomplete="off">
                          <div class="form_details">
                            <div class="sub-button">
                              <input type="submit" name="update" value="Update">
                            </div>
                          </div>
                        </form>

                          <form action="select_subject.php" method="post" autocomplete="off">
                          <div class="form_details">
                            <div class="sub-button">
                              <input type="submit" name="update" value="Select Subjects">
                            </div>
                          </div>
                        </form>
                        <form action="view_assigned_clg.php" method="post" autocomplete="off">
                          <div class="form_details">
                            <div class="sub-button">
                              <input type="submit" name="View Assigned college" value="View Assigned college">
                            </div>
                          </div>
                        </form>
                
                  </center>      
          </div>          
          </div>
          </div>';

              }
          ?>
       

 </body>
</html>
