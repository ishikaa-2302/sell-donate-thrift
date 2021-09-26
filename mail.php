<?php
  $name = $_POST['name'];
  $email= $_POST['email'];
  $message= $_POST['message'];
 $to = "ishikagupta2108@gmail.com";
 $subject = "Mail From website";
 $txt ="Name = ". $name . "\r\n  Email = " . $email . "\r\n Message =" . $message;
 $headers = "From: noreply@thrift-sell-donate.infinityfreeapp.com" . "\r\n" .
 "CC: somebodyelse@example.com";
 if($email!=NULL){
     mail($to,$subject,$txt,$headers);
 }
 //redirect
 header("Location:thankyou.html");
 ?>
