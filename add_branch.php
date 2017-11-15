<?php
session_start();
require 'dbconnect.php';

$branch=$_POST['branch'];
$branchcode=$_POST['branchcode'];
echo $branch;
echo $branchcode;
//echo $prac;
//echo $sem;
$q="INSERT into branch values('$branch','$branchcode')";
if($mysqli->query($q))
{
	echo '<script>
	window.alert("successfully entered into db");
	window.location.href="branch_config.php";
	</script>';
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
//header('location:branch_config.php');

?>