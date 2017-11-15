<?php
session_start();
require 'dbconnect.php';
$email=$_POST['email'];
$result = $mysqli->query("SELECT * FROM faculty WHERE offemail='$email'");
?><!DOCTYPE HTML>
<html>
<head>
<title>Welcome Faculty></title>
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
          <h2>Welcome Faculty</h2>
        </div>  
      </div>
    </div>
    </div>






<?php
if ( $result->num_rows == 0 ){ // User doesn't exist
    echo '<script>
  window.alert("User with that email doesnt exist!");
  window.location.href="examination.php";
  </script>';
    //$_SESSION['message'] = "";
    //header("location: error.php");
}
else
 { 
    $user = $result->fetch_assoc();
    if (strcmp($_POST['pass'],$user['password'])==0){
        $_SESSION['email'] = $user['offemail'];
        $_SESSION['active'] = $user['active'];
        $_SESSION['login'] = 1;


        echo '  <div class="container-fluid">
         
         
           <div class="col-sm-12">
           <center>
            <form action="internal.php" method="post" autocomplete="off">
                <div class="form_details">
                  <div class="sub-button">
                  <br>
                      <input type="submit" name="l2" value="Internal Faculties go here">
                  </div>
                </div>
              </form>
              </center>
           </div>
           <br>
                 
           <center>
                <form action="external.php" method="post" autocomplete="off">
                          <div class="form_details">
                            <div class="sub-button">
                              <input type="submit" name="update" value="External Faculties go here">
                            </div>
                          </div>
                        </form>
                        </center>
                </div>
                       
          </div>
          </div>';


      
    }
     else{
      echo '<script>
  window.alert("You have entered wrong password, try again!");
  window.location.href="examination.php";
  </script>';

        /*$_SESSION['message'] = "You have entered wrong password, try again!";
         header("location: error.php" );*/
    } 
}
?>
</body>
</html>