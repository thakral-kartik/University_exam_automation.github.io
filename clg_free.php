<?php
session_start();
require 'dbconnect.php';
?>
<!DOCTYPE HTML>
<html>
<head>
<title>Colleges not assigned</title>
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
      <form action="web_profile.php" method="post"  autocomplete="off">
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



<?php

$result=$mysqli->query("SELECT clg_name,prac_sub from automate where ext_faculty is NULL");
if($result->num_rows == 0)
{
	$_SESSION['message']='All practical papers are assigned to all colleges';
	header("location:error.php");
}

else{
	echo' <div class="container-fluid">
	<div class="col-sm-12"> <table class="table table-hover">
    <thead>
      <tr>
        <th>College Name</th>
        <th>prac_sub</th>
      </tr>
    </thead>
    <tbody>';
while($row=mysqli_fetch_array($result))
{
  
 
  echo '<tr>';
  $clg_name=$row['clg_name'];
  $prac_sub=$row['prac_sub'];

  echo '<td>'.$clg_name.'</td>';
  echo '<td>'.$prac_sub.'</td>';
  echo '<tr>';
}

}

?>
 </tbody>
  </table>
</div>
</div>
</body>
</html>