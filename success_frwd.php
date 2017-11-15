<?php
require 'dbconnect.php';
session_start();
 $email=$_SESSION['femail'];
$result=$mysqli->query("UPDATE  faculty set frwd=1 where offemail='$email'");
echo '<script>
window.alert("faculty request forwarded to Dean for confirmation.");
window.location.href="hod_profile.php";
</script>';
//header('location: hod_profile.php');
?>