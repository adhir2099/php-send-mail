<?php  

  $name  = $_POST['name'];
  $email = $_POST['email'];
  $msg   = $_POST['message'];

  $sender = "dinosandfashion@gmail.com";
  $subject = "Prueba mail php de hoy 07/05/2022";

  $body = "From: $name \n";
  $body .= "Mail: $email \n";
  $body .= "Message: $msg";

  // Sending mail
  mail($sender, $subject, $body);
  echo "send";
?>