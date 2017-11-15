<?php

session_start();
?>
<!DOCTYPE HTML>
<html>
<head>
<title>External Examiner</title>
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

                
            </form>
        </center>
    </div>
</div>

<div class="contact">
     <div class="container-fluid">
         <div class="main-head-section">
            <h2>Post your feedback</h2>
         </div>
     <div class="contact_top">                  
            <div class="col-md-3">
            </div>
             <div class="col-md-7">
                    <h4>External Faculty</h4>
                        <center>

<form action="external1.php" method="post" autocomplete="off">
<table class="table table-hover">
    <thead>
      <tr>
        <th></th>
        <th></th>
      </tr>
    </thead>
    <tbody>
      <tr>
       <td><label>COLLEGE NAME</label></td>
       <td><input type="text" required autocomplete="off" name="clgname"></td>
      </tr>
      <tr>
       <td><label>COLLEGE CODE</label></td>
       <td><input type="text" required autocomplete="off" name="clgcode"></td>
      </tr>
      <tr>
       <td><label>PRACTICAL PAPER</label></td>
       <td><input type="text" required autocomplete="off" name="paper"></td>
      </tr>
      <tr>
       <td><label>PAPER CODE</label></td>
       <td><input type="text" required autocomplete="off" name="papercode"></td>
      </tr>
      <tr>
       <td><label>DATE OF EXAM</label></td>
       <td><input type="date" required autocomplete="off" name="doe"></td>
      </tr>
       <tr>
       <td><label>TOTAL STUDENTS</label></td>
       <td><input type="text" required autocomplete="off" name="student"></td>
      </tr>
      <tr>
       <td><label>DATE OF ARRIVING</label></td>
       <td><input type="date" required autocomplete="off" name="ad"></td>
      </tr>
      <tr>
       <td><label>TIME OF ARRIVING</label></td>
       <td><input type="time" required autocomplete="off" name="at"></td>
      </tr>
      <tr>
       <td><label>DATE OF DEPARTURE</label></td>
       <td><input type="date" required autocomplete="off" name="dd"></td>
      </tr>
      <tr>
       <td><label>TIME OF DEPARTURE</label></td>
       <td><input type="time" required autocomplete="off" name="dt"></td>
      </tr>
      <tr>
       <td><label>INTERNAL EXAMINER FEEDBACK</label></td>
       <td><input type="text" required autocomplete="off" name="exam_feedback"></td>
      </tr>
      <tr>
       <td><label> COLLEGE FEEDBACK</label></td>
       <td><input type="text" required autocomplete="off" name="clg_feedback"></td>
      </tr>
      </tbody>
      </table>      	
<div class="form_details">
        <div class="sub-button">
         <input type="submit" name="submit" value="Submit">
        </div>
    </div>
</form>
</center>
</div>
</div>
</div>
</div>
</div>
</body>
</html>