<?php
session_start();
require 'dbconnect.php';

if ( $_SESSION['login'] != 1 ) {
  $_SESSION['message'] = "You must log in before viewing your profile page!";
  header("location: error.php");    
}//to make sure that user may not open the profile page with link
else 
{
      $name = $_SESSION['name'];
     
     // $_SESSION['code']=$row1['code'];
    //$active = $_SESSION['active'];
}
?>
<!DOCTYPE HTML>
<html>
<head>
<title>Welcome Admin</title>
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
            <form action="logout.php" method="post"  autocomplete="off">
                          <div class="form_details">
                            <div class="sub-button">
                              <input type="submit" name="logout" value="Log Out">
                            </div>
                          </div>
                        </form>
                      </div>
      <div class="contact">
        <div class="col-xs-6 col-xs-pull-4"> 
        <!--<div class="main-head-section">-->
          <h2>Welcome Admin</h2>
        </div>  
      </div>
    </div>
    </div>

          <div class="container-fluid">
            

            <div class="col-md-12">
            <center>
              <form action="confirm_dean.php" method="post"  autocomplete="off">
                <div class="form_details">
                  <div class="sub-button">
                    <input type="submit" name="12" value="Confirm Dean">
                    </div>
                  </div>
                </form>
            
              <form action="branch_config.php" method="post"  autocomplete="off">
                          <div class="form_details">
                            <div class="sub-button">
                              <input type="submit" name="11" value="Branch Details">
                            </div>
                          </div>
                        </form>

                         <form action="clg_free.php" method="post"  autocomplete="off">
                          <div class="form_details">
                            <div class="sub-button">
                              <input type="submit" name="11" value="clg not assigned">
                            </div>
                          </div>
                        </form>

              <form action="automations.php" method="post"  autocomplete="off">
                          <div class="form_details">
                            <div class="sub-button">
                              <input type="submit" name="15" value="Automate Exam">
                            </div>
                          </div>
                        </form>

                  

                   <form action="view_automation.php" method="post"  autocomplete="off">
                          <div class="form_details">
                            <div class="sub-button">
                              <input type="submit" name="15" value="View Automation">
                            </div>
                          </div>
                        </form>

                        </center>
                  </div>
          
  </div>
</body>
</html>
