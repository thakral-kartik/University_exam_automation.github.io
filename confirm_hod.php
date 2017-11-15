<?php
session_start();
require 'dbconnect.php';
$code=$_SESSION['code']; 
$result = $mysqli->query("SELECT * from hod WHERE code ='$code' and active <> 1 ");
$count=mysqli_num_rows($result);
//echo $count;
?>
<!DOCTYPE HTML>
<html>
<head>
<title>New HODs registered</title>
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
  <div class="row">
    <div class="col-xs-6">
    </div>
    <div class="col-xs-6">
    <center>
      <form action="dean_profile.php" method="post"  autocomplete="off">
                          <div class="form_details">
                            <div class="sub-button">
                              <input type="submit" name="back" value="Back">
                            </div>
                          </div>
                        </form>
                        </center>
    </div>
</div>
</div>


	 <div class="container">
		 <div class="main-head-section">
		 	<h2>New HODs registered:</h2>
		 </div>
		  </div>
  </div>
</div>
			 		

<center>
<?php
 if($count == 0)
  {
  echo "<br>no new hod registered";
}else{
while($row=mysqli_fetch_array($result))
{
 
$email= $row['offemail'];
  echo $row['name'];
 echo '<form action="hod_view.php" method="get">
 <div class="form_details">
        <div class="sub-button">
    <input type="hidden" name="email" value = "'.$email.'">
    <input type="submit" value="view details">
    </div>
    </div>
    </form>';

}
}
?>