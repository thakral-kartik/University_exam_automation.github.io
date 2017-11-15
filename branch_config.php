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
<script>
//AJAX code
function showUser(branch) {
    if (branch == "") {
        document.getElementById("txtHint").innerHTML = "";
        return;
    } else { 
        if (window.XMLHttpRequest) {
            // code for IE7+, Firefox, Chrome, Opera, Safari
            xmlhttp = new XMLHttpRequest();
        } else {
            // code for IE6, IE5
            xmlhttp = new ActiveXObject("Microsoft.XMLHTTP");
        }
        xmlhttp.onreadystatechange = function() {
            if (this.readyState == 4 && this.status == 200) {
                document.getElementById("txtHint").innerHTML = this.responseText;
            }
        };
        xmlhttp.open("GET","getuser.php?branch="+branch,true);		//Enter the name of php file here
        xmlhttp.send();
    }
}
</script>

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
            <form action="web_profile.php">
                <div class="form_details">
        <div class="sub-button">
         <input type="submit" name="hlogin" value="Back">
        </div>
    </div>
                
            </form>
        </center>
    </div>
</div>

    <div class="row">
    <!--<div class="col-xs-1">
    </div>-->
     <div class="col-xs-12">
     <br>
        <h3>View branch-wise subjects</h3> 
        <center>
            <form action="subject_view.php" method="post" autocomplete="off">
            <table class="table table-hover">
    <thead>
      <tr>
        <th></th>
        <th></th>
      </tr>
    </thead>
    <tbody>
      <tr>
        <td><label>BRANCH</label></td>
        <td><select name="branch">
    <option value="CS">COMPUTER SCIENCE</option>
    <option value="IT">INFORMATION TECHONOLOGY</option>
    <option value="CE">CIVIL</option>
    <option value="ME">MECHANICAL</option>
    <option value="EE">ELECTRICAL</option>
  </select></td>
      </tr>
      <tr>
        <td><label>SEMESTER</label></td>
        <td><select name="sem">
    <option value="1">SEMESTER 1</option>
    <option value="2">SEMESTER 2</option>
    <option value="3">SEMESTER 3</option>
    <option value="4">SEMESTER 4</option>
    <option value="5">SEMESTER 5</option>
    <option value="6">SEMESTER 6</option>
    <option value="7">SEMESTER 7</option>
    <option value="8">SEMESTER 8</option>
  </select></td>
      </tr>
      </tbody>
      </table>
  <br>
  <div class="form_details">
        <div class="sub-button">
         <input type="submit" name="hlogin" value="VIew">
        </div>
    </div>

</form>
</center>
</div>
</div>
<br>


    <div class="row">
        <div class="col-xs-12">
        <h3>Add Subjects</h3>
        <center>
            <form action="add_subject.php" method="post" autocomplete="off">
                <table class="table table-hover">
    <thead>
      <tr>
        <th></th>
        <th></th>
      </tr>
    </thead>
    <tbody>
      <tr>
        <td><label>BRANCH</label></td>
        <td><select name="branch">
    <option value="CS">COMPUTER SCIENCE</option>
    <option value="IT">INFORMATION TECHONOLOGY</option>
    <option value="CE">CIVIL</option>
    <option value="ME">MECHANICAL</option>
    <option value="EE">ELECTRICAL</option>
  </select></td>
      </tr>
       <tr>
        <td><label>SEMESTER</label></td>
        <td><select name="sem">
    <option value="1">SEMESTER 1</option>
    <option value="2">SEMESTER 2</option>
    <option value="3">SEMESTER 3</option>
    <option value="4">SEMESTER 4</option>
    <option value="5">SEMESTER 5</option>
    <option value="6">SEMESTER 6</option>
    <option value="7">SEMESTER 7</option>
    <option value="8">SEMESTER 8</option>
  </select></td>
      </tr>
      <tr>
      <td><label>Enter Practical Subject</label></td>
      <td><input type="text"  name="prac_sub" required placeholder="Practical subject"></td>
      </tr>
      <tr>
        <td><label>Enter Practical Code</label></td>
        <td><input type="text" name="prac_code" required placeholder="Pratical code"></td>
    </tr>
    </tbody>
    </table>
<br>
     <div class="form_details">
        <div class="sub-button">
         <input type="submit" name="hlogin" value="Submit">
        </div>
    </div>
</form>
</center>
</div>
</div>


<div class="row">
    <div class="col-xs-12">
    <h3>Remove Subjects</h3>
    <center>
        <form action="delete_subject.php" method="post" autocomplete="off">
        <table class="table table-hover">
    <thead>
      <tr>
        <th></th>
        <th></th>
      </tr>
    </thead>
    <tbody>
      <tr>
        <td><label>BRANCH</label></td>
        <td><select name="branch" onchange="showUser(this.value)">
    <option value="nothing">Select Subject</option>
    <option value="CS">COMPUTER SCIENCE</option>
    <option value="IT">INFORMATION TECHONOLOGY</option>
    <option value="CE">CIVIL</option>
    <option value="ME">MECHANICAL</option>
    <option value="EN">ELECTRICAL</option>
    <option value="ET">ELECTRONICS</option>
  </select></td>
      </tr>
       <tr>
       <td><div id="txtHint"><b></b></div></td>
      </tr>	

</tbody>
</table>

 <div class="form_details">
        <div class="sub-button">
         <input type="submit" name="hlogin" value="Submit">
        </div>
    </div>
</form>
<br>
</center>
</div>
</div>


<div class="row">
    <div class="col-xs-12">
    <h3>View Branches</h3>
    <form action="view_branch.php" method="post" autocomplete="off">
    <center>
    <br>
    <div class="form_details">
        <div class="sub-button">
         <input type="submit" name="hlogin" value="View Branches">
        </div>
    </div>
</center>
</form>
</div>
</div>
<br>

<div class="row">
    <div class="col-xs-12">
    <h3>Add Branch</h3>
    <center>
    <form action="add_branch.php" method="post" autocomplete="off">
        <table class="table table-hover">
    <thead>
      <tr>
        <th></th>
        <th></th>
      </tr>
    </thead>
    <tbody>
      <tr>
        <td><label>Enter Branch Name</label></td>
        <td><input type="text" name="branch" placeholder="Branch Name" required=""></td>
      </tr>
       <tr>
        <td><label>Enter Branch Code</label></td>
        <td><input type="text" name="branchcode" placeholder="Branch Code" required=""></td>
      </tr>
      </tbody>
    </table>
    

       <div class="form_details">
        <div class="sub-button">
         <input type="submit" name="hlogin" value="Submit">
        </div>
    </div>
    </form>
    </center>
    </div>
    </div>
    </div>
<br>
</body>
</html>