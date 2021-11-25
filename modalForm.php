<?php
$name = $_POST['name'];
$email1 = $_POST["email"];
$phone = $_POST["number"];
// $message = $_POST["message"];
// header("Location:index.php");
// echo "hello " ."  ".$name."  " .$email1."  " .$phone
$to = "sales@cretmark.com";
$subject = "Mail For Get Free Consultation";
$txt = "Name = " . $name . "\r\n  Email = " . $email1 .  "\r\n phone =" . $phone;
$headers = "From: sales@cretmark.com" . "\r\n" .
  "CC: lasth324@gmail.com";
if ($email1 != NULL) {
  if (mail($to, $subject, $txt, $headers)) {
    
  } else {
    echo "error";
    

  }
}

header("Location:index.php");
?>