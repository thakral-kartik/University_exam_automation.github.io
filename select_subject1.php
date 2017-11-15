<?php
session_start();
require 'dbconnect.php';
$checkBox=array();
$id=$_SESSION['email'];
$checkBox=$_POST['sub'];
foreach($_POST['sub']as $value)
{
	$result=$mysqli->query("SELECT * FROM subject where subjectcode='$value'");
$row=mysqli_fetch_array($result);
$sub=$row['prac_sub'];
$result=$mysqli->query("INSERT INTO interest_sub values('$id','$sub','$value')");
}
header('location:faculty_profile.php');
?>