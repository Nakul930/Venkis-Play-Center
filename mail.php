<?php
//get data from form  

$name = $_POST['name'];
$number = $_POST['mobile'];
$email= $_POST['email'];
$message= $_POST['message'];

$to = "kavitasut24@gmail.com";
$subject = "Mail From Website";

$txt ="Name = ". $name . "\r\n Mobile Number = " . $number . "\r\n  Email = " . $email . "\r\n Message = " . $message;

$headers = "From: noreply@gamil.com";
// . "\r\n" ."CC: somebodyelse@example.com";

if($email!=NULL){
    mail($to,$subject,$txt,$headers);
    header("Location:contact.html");
}
//redirect
//header("Location:thankyou.html");
?>