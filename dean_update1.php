
<?php
session_start();
require 'dbconnect.php';


//$peremail = $mysqli->escape_string($_POST['peremail']);
//$branch=$_POST['branch'];
//$offemail = $mysqli->escape_string($_POST['offemail']);
$peremail = $mysqli->escape_string($_POST['peremail']);
$email = $_SESSION['email'] ;
$mobile = $mysqli->escape_string($_POST['mobile']);
//$doj = $mysqli->escape_string($_POST['doj']);
$exp = $mysqli->escape_string($_POST['exp']);
$name = $mysqli->escape_string($_POST['name']);
$pass = $mysqli->escape_string($_POST['pass']) ;
$sql="UPDATE dean set name='$name',mobile='$mobile', experience='$exp',password='$pass',peremail='$peremail' where offemail= '$email' ";
if ($mysqli->query($sql))
{
echo 'it is updated';
header("location: dean_profile.php");
}

else{

	$_SESSION['message']='updation failed!';
	header("location: error.php");
}

?>
