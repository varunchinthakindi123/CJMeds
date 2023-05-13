<?php
//get data from form  

$fname = $_POST['name'];
$lname = $_POST['name'];
$email= $_POST['email'];
$password= $_POST['password'];
$message= $_POST['message'];
$to = "mssofttechnologies123@gmail.com";
$subject = "Mail From website";
$txt ="Name = ". $name . "\r\n  Email = " . $email . "\r\n Message =" . $message;
$headers = "From: noreply@yoursite.com" . "\r\n" .
"CC: mssofttechnologies123@gmail.com";
if($email!=NULL){
    mail($to,$subject,$txt,$headers);
}
//redirect
header("Location:thankyou.html");
?>