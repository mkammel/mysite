<?php
require('PHPMailerAutoload.php');

$mail = new PHPMailer();

$mail->SMTPSecure = 'tls';
//$mail->IsSMTP();                                      // set mailer to use SMTP
$mail->Host = "smtp.gmail.com";  // specify main and backup server
$mail->SMTPAuth = true;     // turn on SMTP authentication
$mail->Username = "jboullion83@gmail.com";  // SMTP username
$mail->Password = "MadisonDev1"; // SMTP password
$mail->Port = '587';
$mail->From = "jboullion83@gmail.com";
$mail->FromName = "Mailer";
$mail->AddAddress("jboullion83@gmail.com", "James Boullion");

$mail->WordWrap = 50;                                 // set word wrap to 50 characters
$mail->IsHTML(true);                                  // set email format to HTML

$mail->Subject = "Here is the subject";
$mail->Body    = "This is the HTML message body <b>in bold!</b>";
$mail->AltBody = "This is the body in plain text for non-HTML mail clients";

if(!$mail->Send())
{
   echo "Message could not be sent. <p>";
   echo "Mailer Error: " . $mail->ErrorInfo;
   exit;
}

echo "Message has been sent";
?>
