<?php

$to = "prasajpp@gmail.com";

$from=$_POST['email'];



$subject = 'A message from your site visitor Petalite.in';

$message=$_POST['message'];

$name=$_POST['name'];

$txt = "Message is recieved from ". $name;

$txt .= "Message::::".$message;
$txt .= "   && Phone number ::::";

$txt .= "&& Email is as :::";
$txt .= $from;


$headers = "From: Petalite.in" . "\r\n" .
"CC: mrsreejeshsreekumar@gmail.com";
mail($to,$subject,$txt,$headers);

if(mail){
   die('MF000');
}
?>