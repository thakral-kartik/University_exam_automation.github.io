<?php
session_start();
require 'dbconnect.php';
$femail=$_SESSION['femail'];
$email=$_SESSION['email'];
echo "<h1>";
echo $email;
echo $femail;
echo "</h1>";
$pass=$_POST['password'];
echo $email;
 $mysqli->query("DELETE from faculty where offemail='$femail'");
  
use PHPMailer\PHPMailer\PHPMailer;
use PHPMailer\PHPMailer\Exception;

//Load composer's autoloader
require 'vendor/autoload.php';

$mail = new PHPMailer(true);                              // Passing `true` enables exceptions
try {
    //Server settings
    $mail->SMTPDebug = 1;                                 // Enable verbose debug output
    $mail->isSMTP();                                      // Set mailer to use SMTP
    $mail->Host = 'smtp.gmail.com';  // Specify main and backup SMTP servers
    $mail->SMTPAuth = true;                               // Enable SMTP authentication
    $mail->Username = $email;                 // SMTP username
    $mail->Password = $pass;                           // SMTP password
    $mail->SMTPSecure = 'ssl';                            // Enable TLS encryption, `ssl` also accepted
    $mail->Port = 465;                                    // TCP port to connect to

    //Recipients
    $mail->setFrom($email);
     // Add a recipient
    $mail->addAddress("tharkalkartik@gmail.com");
   // $mail->addAddress('thakral.kartik@gmail.com');               // Name is optional
    
    //Content
    $mail->isHTML(true);                                  // Set email format to HTML
    $mail->Subject = 'ACCOUNT REJECTED';
    $mail->Body    = 'RESPECTED FACULTY,<br>
    YOUR DETAILS CANNOT BE VERIFIED DUE TO DISCREPANCIES IN YOUR DETAILS.YOU ARE REQUESTED TO SIGN UP AGAIN WITH PROPER DETAILS.<br><br>
    REGARDS';
    $mail->AltBody = 'This is computer generated email please do not reply to it.';

    $mail->send();
   /* echo '<script>window.alert("Your mail has been sent");
                window.location.href="hod_profile.php";
    </script>';*/
 //header("location: hod_profile.php");
} catch (Exception $e) {    
    echo 'Message could not be sent.';
    echo 'Mailer Error: ' . $mail->ErrorInfo;
}  