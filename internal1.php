
<?php
session_start();
require 'dbconnect.php';

$ext_name=$mysqli->escape_string($_POST['external_name']);
$ext_clgname = $mysqli->escape_string($_POST['clgname']);
$ext_clgcode = $mysqli->escape_string($_POST['clgcode']);
$examiner_branch = $mysqli->escape_string($_POST['examiner_branch']);
$paper_branch=$mysqli->escape_string($_POST['paper_branch']);
$paper = $mysqli->escape_string($_POST['paper']);
$papercode = $mysqli->escape_string($_POST['papercode']);
$doe = $mysqli->escape_string($_POST['doe']);
$student = $mysqli->escape_string($_POST['student']);
$at = $mysqli->escape_string($_POST['at']);
$ad = $mysqli->escape_string($_POST['ad']);
$dt = $mysqli->escape_string($_POST['dt']);
$dd = $mysqli->escape_string($_POST['dd']);
$feedback = $mysqli->escape_string($_POST['feedback']) ;
$sql="INSERT INTO external VALUES('$ext_name','$ext_clgname','$ext_clgcode','$examiner_branch','$paper_branch','$paper','$papercode','$doe','$student','$ad','$at','$dd','$dt','$feedback')";
if ($mysqli->query($sql))
{
	$_SESSION['message']='feedback submitted successfully';
header("location: error.php");
}

else{

	$_SESSION['message']='feeback submission failed!';
	header("location: error.php");
}


?>
