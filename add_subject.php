<?php
session_start();
require 'dbconnect.php';

$bc=$_POST['branch'];
$sem=$_POST['sem'];
$prac=$_POST['prac_sub'];
$code=$_POST['prac_code'];
//echo $bc;
//echo $code;
//echo $prac;
//echo $sem;
$q="INSERT into subject values('$sem','$bc','$prac','$code')";
if($mysqli->query($q))
{
	echo '<script>
	window.alert("successfully entered into db");
	window.location.href="branch_config.php";
	</script>

	';
	//header('location: branch_config.php');
}
else
{
	echo '<script>
	window.alert("failed entered into db");
	window.location.href="branch_config.php";
	</script>';
	//header('location:branch_config.php');
}
//header('location:');

?>