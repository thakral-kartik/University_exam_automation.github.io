<?php
session_start();
require 'dbconnect.php';
$name=$_POST['name'];
$result = $mysqli->query("SELECT * FROM webadmin WHERE username='$name'");
if ( $result->num_rows == 0 ){ // User doesn't exist
    $_SESSION['message'] = "ENTERED WRONG USERNAME";
    header("location: error.php");
}
else
 { 
    $user = $result->fetch_assoc();
    if (strcmp($_POST['pass'],$user['password'])==0){
      //  $_SESSION['email'] = $user['offemail'];
        $_SESSION['name'] = $user['username'];
        echo "<h2>HELLO</h2> ";
        //$_SESSION['active'] = $user['active'];
        $_SESSION['login'] = 1;

      header("location: web_profile.php");
    }
     else{

        $_SESSION['message'] = "You have entered wrong password, try again!";
         header("location: error.php" );
    } 
}
?>