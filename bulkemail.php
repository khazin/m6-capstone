<?php
require 'vendor/autoload.php';

if (isset($_POST['submit'])) {
  $emails = explode(",", $_POST['email']);
  foreach ($emails as $email) {
    include_once 'vendor/phpmailer/phpmailer/examples/smtp.php';
  }
  if (!$mail->send()) {
      echo "Mailer Error: " . $mail->ErrorInfo;
  } else {
      echo "Message sent!";
  }
}
 ?>

<html lang="en" dir="ltr">
  <head>
    <meta charset="utf-8">
    <title></title>
  </head>
  <body>
<form class="" action="" method="post">
  <label for="email">Email</label>
  <textarea name="email" multiple cols="30" rows="5"></textarea>
  <input type="submit" name="submit" value="Send">
</form>
  </body>
</html>
