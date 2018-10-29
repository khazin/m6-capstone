<?php
require 'vendor/autoload.php';

function send_email($emails, $subject, $body) {

    $emails = explode(",", $emails);
    for ($i = 0; $i< count($emails); $i++) {
      //send emails
      $mail = new PHPMailer;
      $mail->isSMTP();

      $mail->SMTPDebug = 0;
      $mail->Port = 587;
      $mail->SMTPSecure ='tls';
      $mail->SMTPAuth = true;
      $mail->Host = "smtp.gmail.com";
      $mail->Username = 'sender@gmail.com';
      $mail->Password = "password";

      $mail->setFrom('sender@gmail.com', 'admin');
      $mail->addAddress($emails[0], 'User');
      $mail->Subject  = $subject;
      $mail->Body     = $body;
      $mail->send();
    }
    if(!$mail->send()) {
      echo 'Message was not sent.';
      echo 'Mailer error: ' . $mail->ErrorInfo;
    } else {
      echo 'Message has been sent.';
    }
}
$emails = 'testemail1@mail.com, testemail2@mail.com';
$subject = 'test subject';
$body = 'test email';
send_email($emails, $subject, $body);
 ?>
