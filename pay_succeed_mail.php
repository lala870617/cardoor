<?php
use PHPMailer\PHPMailer\PHPMailer;
use PHPMailer\PHPMailer\Exception;

require 'vendor/phpmailer/phpmailer/src/Exception.php';
require 'vendor/phpmailer/phpmailer/src/PHPMailer.php';
require 'vendor/phpmailer/phpmailer/src/SMTP.php';


$mail = new PHPMailer;
// Enable verbose debug output
// $mail->SMTPDebug = 2;                               
 
// Set mailer to use SMTP
$mail->isSMTP();

// smtp 伺服器, 支援多台smtp server備援
$mail->Host = 'smtp.gmail.com';
 
// Enable SMTP authentication
$mail->SMTPAuth = true;
 
// SMTP username
$mail->Username = 'q72ZgmQQPS@gmail.com';
 
// SMTP password , If you must use the gmail application password

// $mail->Password = 'GC&EF2Pgh&5*MY%';

$mail->Password = 'pnchtbdkqryrdomm';
 
// Enable TLS encryption, `ssl` also accepted
$mail->SMTPSecure = "ssl";
 
// TCP port to connect to
$mail->Port = 465;
 
// $mail->setFrom('from@example.com', 'Mailer');
$mail->setFrom('q72ZgmQQPS@gmail.com.tw', "=?UTF-8?B?".base64_encode('辛普森')."?=");

// Add a recipient , name is optional
// $mail->addAddress('joe@example.net', 'Joe User');
// $mail->addAddress('ellen@example.com');
 
// Add a recipient , 
// $mail->addReplyTo('info@example.com', 'Information');
// $mail->addCC('cc@example.com');
// $mail->addBCC('bcc@example.com');
 
// Add attachments , optional name
// $mail->addAttachment('/var/tmp/file.tar.gz');
// $mail->addAttachment('/tmp/image.jpg', 'new.jpg');
 
// Set email format to HTML
$mail->isHTML(true);
 
// $mail->Subject = 'Here is the subject';
// $mail->Body    = 'This is the HTML message body <b>in bold!</b>';
// $mail->AltBody = 'This is the body in plain text for non-HTML mail clients';


?>