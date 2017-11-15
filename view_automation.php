<?php
session_start();
require 'dbconnect.php';
?>
<!DOCTYPE HTML>
<html>
<head>
<title>View Automation</title>
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
<div class="container-fluid">
	<div class="col-sm-12"> <table class="table table-hover">
    <thead>
      <tr>
        <th>College Name</th>
        <th>College Code</th>
        <th>College Location</th>
        <th>Zone</th>
        <th>Branch</th>
        <th>practical Subject</th>
        <th>subject Code</th>
        <th>external Faculty</th>
        <th>External College</th>
        <th>External College Code</th>
      </tr>
    </thead>
    <tbody>


<?php
$result=$mysqli->query("SELECT * from automate");
while($row=mysqli_fetch_array($result))
{
	echo '<tr>';
$clg_name=$row['clg_name'];
$collegecode=$row['collegecode'];
$clg_loc=$row['clg_loc'];
$zone=$row['zone'];
$branch=$row['branch'];
$prac_sub=$row['prac_sub'];
$subjectcode=$row['subjectcode'];
$ext_faculty=$row['ext_faculty'];
$ext_clg=$row['ext_clg'];
$ext_clgcode=$row['ext_clgcode'];
echo '<td>'.$clg_name.'</td>';
echo '<td>'.$collegecode.'</td>';
echo '<td>'.$clg_loc.'</td>';
echo '<td>'.$zone.'</td>';
echo '<td>'.$branch.'</td>';
echo '<td>'.$prac_sub.'</td>';
echo '<td>'.$subjectcode.'</td>';
echo '<td>'.$ext_faculty.'</td>';
echo '<td>'.$ext_clg.'</td>';
echo '<td>'.$ext_clgcode.'</td>';
echo'</tr>';
}
?>
 </tbody>
  </table>
</div>
</div>
</body>
</html>
