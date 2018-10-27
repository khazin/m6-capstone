<?php
require 'vendor/autoload.php';

function send_email($emails, $subject, $body) {

    $emails = explode(",", $emails);
    for ($i = 0; $i< count($emails); $i++) {
      //send email
      $mail = new PHPMailer;
      $mail->isSMTP();

      $mail->Port = 25;
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
$emails = 'test1@mail.com, test2@mail.com';
$subject = 'test subject';
$body = 'test email';
send_email($emails, $subject, $body);
 ?>
