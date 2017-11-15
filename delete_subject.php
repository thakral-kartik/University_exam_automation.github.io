<?php
session_start();
require 'dbconnect.php';

$bc=$_POST['branch'];
$sub=$_POST['prac_sub'];
//echo $bc;
//echo $code;
//echo $prac;
//echo $sem;
$q="DELETE FROM subject WHERE branch='$bc' and prac_sub='$sub'";
if($mysqli->query($q))
{
	/*echo '<script>
	window.alert("successfully deleted into db");
	</script>

	';*/
	echo "deleted ";
	//header('location: branch_config.php');
}
else
{
	/*echo '<script>
	window.alert("failed deleted into db");
	</script>';*/
	echo "error";
	//header('location:branch_config.php');
}
header('location:branch_config.php');

?>