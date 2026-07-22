<?php

$to = "mrsreejeshsreekumar@gmail.com";

$from=$_POST['email'];

$phone=$_POST['phone'];

$subject = 'A message from your site visitor Petalite.in';

$message=$_POST['message'];

$name=$_POST['name'];

$txt = "Message is recieved from ". $name;

$txt .= "Message::::".$message;
$txt .= "   && Phone number ::::";
$txt .= $phone;
$txt .= "&& Email is as :::";
$txt .= $from;


$headers = "From: Petalite.in" . "\r\n" .
"CC: prasajpp@gmail.com";

mail($to,$subject,$txt,$headers);

if(mail){
   die('MF000');
}
?>