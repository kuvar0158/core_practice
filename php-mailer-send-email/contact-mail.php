<!-- <?php
    // $toEmail = ['sunil.b@thedigitalstreet.in', 'siddhant.m@thedigitalstreet.in'];
    // $subject =  $_POST['enquiry']." Enquiry";
    // $txt .= "Name:".$_POST['name']." \n";
    // $txt .= "Email:".$_POST['email']." \n";
    // $txt .= "Phone Number:".$_POST['contact']." \n";
    // $headers = "From:". $_POST["email"]. "\r\n" .
    // "CC:".$_POST['contact'];
    // $x = 0;
    // if(count($toEmail) > 0){
    //     foreach($toEmail as $to){
    //         $save =  mail($to,$subject,$txt,$headers);
    //         if($save){
    //             $x = 1;
    //         }
    //     }
    // }
    // if($x == 1) {
    //     print "<p class='alert alert-success'>Mail Sent Successfully</p>"; die('ok');
    // } else {
    //     print "<p class='alert alert-danger'>Problem in Sending Mail.</p>";
    //     die('lok');
    // }
?> -->
<?php

// PHPMailer classes into the global namespace
use PHPMailer\PHPMailer\PHPMailer; 
use PHPMailer\PHPMailer\Exception;
// Base files 
require 'PHPMailer/src/Exception.php';
require 'PHPMailer/src/PHPMailer.php';
require 'PHPMailer/src/SMTP.php';
// create object of PHPMailer class with boolean parameter which sets/unsets exception.
$mail = new PHPMailer(true);                              
try {
    $mail->isSMTP(); // using SMTP protocol                                     
    $mail->Host = 'smtp.zoho.com'; // SMTP host as gmail 
  
    $mail->SMTPAuth = true;  // enable smtp authentication                             
    $mail->Username = 'noreply@raztechnology.com';  // sender gmail host              
    $mail->Password = 'Qwerty!@#123'; // sender gmail host password                          
    $mail->SMTPSecure = 'ssl';  // for encrypted connection                           
    $mail->Port = 465;   // port for SMTP     

    $mail->setFrom('noreply@raztechnology.com', "Sender"); // sender's email and name

    $mail->addAddress('singhrec1@gmail.com', "Receiver");  // receiver's email and name


    $txt = "Name:".$_POST['name']." \n";
    $txt .= "Email:".$_POST['email']." \n";
    $txt .= "Phone Number:".$_POST['contact']." \n";

    $mail->Subject = $_POST['enquiry']." Enquiry";
    $mail->Body    =  $txt;

    $mail->send();
    echo 'Message has been sent';

    print "<p class='alert alert-success'>Mail Sent Successfully</p>";

} catch (Exception $e) { // handle error.
    echo 'Message could not be sent. Mailer Error: ', $mail->ErrorInfo;
    print "<p class='alert alert-danger'>Problem in Sending Mail.</p>";
}


    // $toEmail = ['sunil.b@thedigitalstreet.in', 'siddhant.m@thedigitalstreet.in'];
    // $subject =  $_POST['enquiry']." Enquiry";
   
    // $txt .= "Name:".$_POST['name']." \n";
    // $txt .= "Email:".$_POST['email']." \n";
    // $txt .= "Phone Number:".$_POST['contact']." \n";

    // $headers = "From:". $_POST["email"]. "\r\n" .
    // "CC:".$_POST['contact'];
    // $x = 0;
    // if(count($toEmail) > 0){
    //     foreach($toEmail as $to){
    //         $save =  mail($to,$subject,$txt,$headers);
    //         if($save){
    //             $x = 1;
    //         }
    //     }
    // }
    // if($x == 1) {
    //     print "<p class='alert alert-success'>Mail Sent Successfully</p>";
    // } else {
    //     print "<p class='alert alert-danger'>Problem in Sending Mail.</p>";
    // }
?>