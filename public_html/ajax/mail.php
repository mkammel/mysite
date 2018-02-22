<?php

if (! empty($_POST['email'])
&& filter_var($_POST['email'], FILTER_SANITIZE_EMAIL) != false
&& ! empty($_POST['message'])
&& ! empty($_POST['name']))  {

    require('PHPMailerAutoload.php');

    $mail = new PHPMailer();

    $mail->SMTPSecure = 'tls';
    //$mail->IsSMTP();                 // set mailer to use SMTP
    $mail->Host = "smtp.gmail.com";  // specify main and backup server
    $mail->SMTPAuth = true;     // turn on SMTP authentication
    $mail->Username = "mk@mkammel.net";  // SMTP username
    $mail->Password = "1amrd0sC$666%"; // SMTP password
    $mail->Port = '587';
    $mail->From = "mk@mkammel.net";
    $mail->FromName = "Mailer";
    $mail->AddAddress('mk@mkammel.net', $_POST['name']); //'Matt Kammel'
    //$mail->AddAddress('jboullion83@gmail.com', 'Matt Kammel');
    $mail->AddReplyTo($_POST['email'], $_POST['name']);
    $mail->SetFrom("mk@mkammel.net", 'Matt Kammel');

    //$mail->WordWrap = 50;                                 // set word wrap to 50 characters
    //$mail->IsHTML(true);                                  // set email format to HTML

    $mail->Subject = "Message From: ".$_POST['name'];
    $mail->Body    = "<strong>Message Received From:</strong> ".$_POST['name']." - ".$_POST['email']."<br /><br /><strong>Message:</strong><br />".$_POST['message'];
    $mail->AltBody = $_POST['message'];

    if(!$mail->Send())
    {
       echo "Message could not be sent. <p>";
       echo "Mailer Error: " . $mail->ErrorInfo;
       exit;
    }

    echo "Message has been sent";

}

//echo 'Empty';
exit();
