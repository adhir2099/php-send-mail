<?php  

  $name  = $_POST['name'];
  $email = $_POST['email'];
  $msg   = $_POST['message'];

  $sender = "youremail@gmail.com";
  $subject = "Subject here";

  $body = "From: $name \n";
  $body .= "Mail: $email \n";
  $body .= "Message: $msg";

  // Sending mail
  mail($sender, $subject, $body);
  echo "send";
?>