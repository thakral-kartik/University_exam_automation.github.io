<?php
require 'dbconnect.php';
$result=$mysqli->query("SELECT * FROM branch");
?>
<!DOCTYPE HTML>
<html>
<head>
<title>Welcome admin</title>
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
<br>
<h3>Branches Available</h3>
    <div class="col-xs-6">
    </div>
    <div class="col-xs-6">
        <center>
            <form action="branch_config.php">
                <div class="form_details">
        <div class="sub-button">
         <input type="submit" name="hlogin" value="Back">
        </div>
    </div>
                
            </form>
        </center>
    </div>
</div>


<br><br>

<div class="row">
	<div class="col-xs-3">
	</div>

	<div class="col-xs-6">


<?php
	echo '<table class="table table-hover">
    <thead>
      <tr>
        <th>Practical Subject</th>
        <th>Subject Code</th>
      </tr>
    </thead>
    <tbody>';
 while($row=mysqli_fetch_array($result)){
 	 echo '<tr>
        <td>'.$row['branch_name'].'</td>
        <td>'.$row['branch_code'].'</td>
      </tr>';
}
 echo ' </tbody>
  </table>
                    </div>

                  <div class="col-md-3">
                  </div>
                  </div>
                  ';

?>
<br><br><br>

</div>
</div>
</div>
</body>
</html>