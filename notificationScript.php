<?php
use PHPMailer\PHPMailer\PHPMailer;
use PHPMailer\PHPMailer\Exception;
require_once 'C:\Users\wa1sh\vendor\autoload.php';
?>
//require_once('PHPMailer/PHPMailerAutoload.php');
<?php

//Information from the form being gathered
$recEmail = $_POST['email'];
$messageSubject = $_POST['subject'];
$message = $_POST['message'];


//Email being sent with the information gathered
$mail = new PHPMailer();
$mail -> isSMTP();
//$mail -> SMTPAuth();
$mail -> SMTPAuth = true;
$mail -> SMTPSecure = 'ssl';
$mail -> Host = 'smtp.gmail.com';
$mail -> Port = '465';
$mail -> isHTML();
$mail -> Username = 'swenProjectEmailer@gmail.com';
$mail -> Password = 'SwenProjectEmailer@123';
$mail -> setFrom('swenProjectEmailer@gmail.com');
$mail -> Subject = $messageSubject;
$mail -> Body = $message;
$mail -> addAddress($recEmail);

$mail -> Send();
// $userName = $_POST['name'];
// 
// $messageSubject = $_POST['subject'];
// $message = $_POST['message'];
// $to = "akielwalsh@gmail.com";
// $body = "";

// $body .= "From:".$username. "\r\n";
// $body .= "Email:".$userEmail. "\r\n";
// $body .= "Message:".$message. "\r\n";

// mail($to,$messageSubject,$body);
// echo $userEmail
?>