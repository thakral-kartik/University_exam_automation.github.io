
<?php
session_start();
require 'dbconnect.php';
if(strcmp($_POST['branch'],'computer science')==0)
$branch_code="CS";
else if(strcmp($_POST['branch'],'information technology')==0)
$branch_code="IT";
else if(strcmp($_POST['branch'],'civil')==0)
$branch_code="CE";
else if(strcmp($_POST['branch'],'mechanical')==0)
$branch_code="ME";
else if(strcmp($_POST['branch'],'electrical')==0)
$branch_code="EE";

//$peremail = $mysqli->escape_string($_POST['peremail']);
//$branch=$_POST['branch'];
//$offemail = $mysqli->escape_string($_POST['offemail']);
$peremail = $mysqli->escape_string($_POST['peremail']);
$email = $_SESSION['email'] ;
$mobile = $mysqli->escape_string($_POST['mobile']);
//$doj = $mysqli->escape_string($_POST['doj']);
$branch = $mysqli->escape_string($_POST['branch']);

$exp = $mysqli->escape_string($_POST['exp']);
$name = $mysqli->escape_string($_POST['name']);
$pass = $mysqli->escape_string($_POST['pass']) ;
$desig = $mysqli->escape_string($_POST['desig']);
$sql="UPDATE faculty set name='$name',mobile='$mobile', experience='$exp',password='$pass',peremail='$peremail',branch='$branch', designation='$desig' ,branchcode='$branch_code'where offemail= '$email' ";
if ($mysqli->query($sql))
{
echo 'it is updated';
header("location: faculty_profile.php");
}

else{

	$_SESSION['message']='updation failed!';
	header("location: error.php");
}

?>
