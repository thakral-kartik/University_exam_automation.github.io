<?php
session_start();
require 'dbconnect.php';
$email=$_SESSION['femail'];
echo $email;
 $mysqli->query("DELETE from faculty where offemail='$email'");
  
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
    $mail->Username = 'lenovohp3469@gmail.com';                 // SMTP username
    $mail->Password = 'pa$$word';                           // SMTP password
    $mail->SMTPSecure = 'ssl';                            // Enable TLS encryption, `ssl` also accepted
    $mail->Port = 465;                                    // TCP port to connect to

    //Recipients
    $mail->setFrom("lenovohp3469@gmail.com");
     // Add a recipient
    $mail->addAddress("bansalapaar99@gmail.com");
    $mail->addAddress('thakral.kartik@gmail.com');               // Name is optional
    
    //Content
    $mail->isHTML(true);                                  // Set email format to HTML
    $mail->Subject = 'ACCOUNT REJECTED';
    $mail->Body    = 'RESPECTED FACULTY,<br>
    YOUR DETAILS CANNOT BE VERIFIED DUE TO DISCREPANCIES IN YOUR DETAILS.YOU ARE REQUESTED TO SIGN UP AGAIN WITH PROPER DETAILS.<br><br>
    REGARDS';
    $mail->AltBody = 'This is computer generated email please do not reply to it.';

    $mail->send();
    echo '<script>window.alert("Your mail has been sent");
                window.location.href="dean_profile.php";
    </script>';
 //header("location: hod_profile.php");
} catch (Exception $e) {    
    echo 'Message could not be sent.';
    echo 'Mailer Error: ' . $mail->ErrorInfo;
}  