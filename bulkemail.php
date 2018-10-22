<?php
require 'vendor/autoload.php';

if (isset($_POST['submit'])) {
  $emails = explode(",", $_POST['email']);
  foreach ($emails as $email) {
    //include smtp.php file
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
  <body style="background-color:#00ffff">
    <div class="container">
<form class="myform" action="" method="post">
  <label for="email">Send to:</label><br>
  <textarea name="email" multiple cols="30" rows="5"></textarea><br>
  <input type="submit" name="submit" value="Send">
</form>
  </body>
  <footer>
    <h6>By: Khazin</h6>
  </footer>
</div>
</html>

<style media="screen">
.container {
    position: relative;
    text-align: center;
    border-radius: 5px;
    top: 100px;
}
</style>
