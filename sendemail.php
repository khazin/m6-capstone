<?php
require 'vendor/autoload.php';

function send_email($emails, $subject, $body) {
    $emails = explode(",", $emails);
    foreach ($emails as $email) {
      //send email
      $mail = new PHPMailer;
      $mail->isSMTP();

      $mail->Port = 25;
      $mail->SMTPAuth = true;
      $mail->Host = "smtp.gmail.com";
      $mail->Username = 'lithanm6@gmail.com';
      $mail->Password = "H245hyt12";

      $mail->setFrom('lithanm6@gmail.com', 'admin');
      $mail->addAddress($email, 'User');
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
$emails = 'khazin316@gmail.com, khazingekko@gmail.com';
$subject = 'test subject';
$body = 'test email'
send_email($emails, $subject, $body);
 ?>
