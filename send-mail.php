<?php
$subject = 'testing';
$email = 'test@gmail.com';
$message = 'test message';          
$headers  = 'MIME-Version: 1.0' . "\r\n";
$headers .= 'Content-type: text/html; charset=iso-8859-1' . "\r\n";
$headers .= "From: The test site" . "\r\n";


$to=$toEmail;
$subject=$sub;
$from="info@mypropick.com"; 
$headers = "MIME-Version: 1.0\n";
$headers .= "Content-type: text/html; charset=iso-8859-1\n";
$headers .= "From: <".$from.">\n";
$headers .= "X-Priority: 1\n";
$message='<div style=" width:700px; margin:0 auto; border:1px solid #e2e2e2; padding:20px;">
<h3>MYPROPICK Services:</h3>'.$msg.'</div>';
$message .= "<br/>Regards <br />MYPROPICK.COM";


if (mail($to, $subject, $message, $headers )) {
  $data['msg']="Message send successfully";
} 
else {
  $data['msg']="Please try again, Message could not be sent!";
} 