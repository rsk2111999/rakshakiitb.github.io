<?php
$to = 'animeshsingh98@gmail.com';
$subject = 'New Email From Your web site:Rakshak';
$name = $_POST['name'];
$email = $_POST['email'];
$message = $_POST['message'];
$message = $message."from".$name."emailID".$email;
$message=wordwrap($message,70);


if($_POST){
   mail($to, $subject, $message)
   $feedback = 'your information has been successfully Send it';
}
?>
