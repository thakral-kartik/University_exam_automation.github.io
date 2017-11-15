
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
$desig=$mysqli->escape_string($_POST['desig']);
$clgname = $mysqli->escape_string($_POST['clgname']);
$clgcode = $mysqli->escape_string($_POST['clgcode']);
$peremail = $mysqli->escape_string($_POST['peremail']);
$branch=$_POST['branch'];
$offemail = $mysqli->escape_string($_POST['offemail']);
$mobile = $mysqli->escape_string($_POST['mobile']);
$doj = $mysqli->escape_string($_POST['doj']);
$exp = $mysqli->escape_string($_POST['exp']);
$name = $mysqli->escape_string($_POST['name']);
$pass = $mysqli->escape_string($_POST['pass']) ;
$result = $mysqli->query("SELECT * FROM faculty WHERE offemail='$offemail'");
if ( $result->num_rows > 0 ) {
    
    $_SESSION['message'] = 'User with this email already exists!';
    header("location: error.php");
    
}
else{
$sql="INSERT INTO faculty(clgname,code,name,branch,branchcode,mobile,offemail,
peremail,doj,experience,password,designation) VALUES('$clgname',$clgcode,'$name','$branch','$branch_code',$mobile,'$offemail','$peremail','$doj',$exp,'$pass','$desig')";
if ($mysqli->query($sql))
{
$_SESSION['email']=$_POST['offemail'];
$_SESSION['name']=$_POST['name'];

$_SESSION['active']=0;
$_SESSION['login']=1;
$_SESSION['message']="Confirmation mail will be sent to $offemail after verification by web admin";
header("location: faculty_profile.php");
}

else{

	$_SESSION['message']='Registration failed!';
	header("location: error.php");
}
}
?>
