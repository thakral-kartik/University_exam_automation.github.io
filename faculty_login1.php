<?php
session_start();
require 'dbconnect.php';
$email=$_POST['email'];
$result = $mysqli->query("SELECT * FROM faculty WHERE offemail='$email'");
if ( $result->num_rows == 0 ){ // User doesn't exist
    $_SESSION['message'] = "User with that email doesn't exist!";
    header("location: error.php");
}
else
 { 
    $user = $result->fetch_assoc();
    if (strcmp($_POST['pass'],$user['password'])==0){
        $_SESSION['email'] = $user['offemail'];
        $_SESSION['active'] = $user['active'];
        $_SESSION['login'] = 1;
        //$_SESSION['branch']=$user
      header("location: faculty_profile.php");
    }
     else{

        $_SESSION['message'] = "You have entered wrong password, try again!";
         header("location: error.php" );
    } 
}
?>