
<?php
session_start();
require 'dbconnect.php';

$clgname = $mysqli->escape_string($_POST['clgname']);
$clgcode = $mysqli->escape_string($_POST['clgcode']);
$paper = $mysqli->escape_string($_POST['paper']);
$papercode = $mysqli->escape_string($_POST['papercode']);
$doe = $mysqli->escape_string($_POST['doe']);
$student = $mysqli->escape_string($_POST['student']);
$at = $mysqli->escape_string($_POST['at']);
$ad = $mysqli->escape_string($_POST['ad']);
$dt = $mysqli->escape_string($_POST['dt']);
$dd = $mysqli->escape_string($_POST['dd']);
$feedback = $mysqli->escape_string($_POST['exam_feedback']) ;
$clg_feedback = $mysqli->escape_string($_POST['clg_feedback']) ;
$sql="INSERT INTO internal VALUES('$clgname','$clgcode','$paper','$papercode','$doe','$student','$ad','$at','$dd','$dt','$feedback','$clg_feedback')";
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
