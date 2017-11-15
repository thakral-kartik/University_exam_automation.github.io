
<?php
session_start();
require 'dbconnect.php';
$_SESSION['clgname']=$_POST['clgname'];
$_SESSION['branch']=$_POST['branch'];
$_SESSION['clgcode']=$_POST['clgcode'];
$_SESSION['name']=$_POST['name'];
$_SESSION['moblile']=$_POST['mobile'];
$_SESSION['peremail']=$_POST['peremail'];
$_SESSION['doj']=$_POST['doj'];
$_SESSION['exp']=$_POST['exp'];
$_SESSION['offemail']=$_POST['offemail'];
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
$result = $mysqli->query("SELECT * FROM hod WHERE offemail='$offemail'");
if ( $result->num_rows > 0 ) {
    
    $_SESSION['message'] = 'User with this email already exists!';
    header("location: error.php");
    
}
else{
$sql="INSERT INTO hod(clgname,code,name,branch,branchcode,mobile,offemail,
peremail,doj,experience,password) VALUES('$clgname',$clgcode,'$name','$branch','$branch_code',$mobile,'$offemail','$peremail','$doj',$exp,'$pass')";
if ($mysqli->query($sql))
{
$_SESSION['email']=$_POST['offemail'];
$_SESSION['active']=0;
$_SESSION['login']=1;
$_SESSION['message']="Confirmation link will be sent to $offemail after verification from web admin";
header("location: hod_profile.php");
}

else{

	$_SESSION['message']='Registration failed!';

	header("location: error.php");
}
}
?>
