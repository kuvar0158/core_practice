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
    $mail->addAttachment($_FILES["resume"]["tmp_name"], $_FILES["resume"]["name"]);  
    // $mail->isHTML(true);
    $txt = "Name:".$_POST['name']." \n";
    $txt .= "Email:".$_POST['email']." \n";
    $txt = "Education:".$_POST['education']." \n";
    $txt .= "Contact:".$_POST['contact']." \n";
    $txt .= "Department:".$_POST['department']." \n";
    $txt .= "Website:".$_POST['website']." \n";
    $txt .= "Tell Us:".$_POST['tell-us']." \n";
    if($_FILES["resume"]["name"]!= ""){
        $strFilesName = $_FILES["resume"]["name"];  
        $strContent = chunk_split(base64_encode(file_get_contents($_FILES["resume"]["tmp_name"])));
        $valid_extensions = array('jpeg', 'png','pdf' , 'doc', 'docx'); // valid extensions
        $ext = strtolower(pathinfo($strFilesName, PATHINFO_EXTENSION));
       if(!in_array($ext, $valid_extensions)) { 
            print "<p class='alert alert-danger'>Please select pdf, docx, doc
            formate</p>";
            exit();
        }
    }

    $mail->Subject = "Job Application";
    $mail->Body    =  $txt;

    if(!$mail->send()) {
        echo 'Message could not be sent.';
        echo 'Mailer Error: ' . $mail->ErrorInfo;
    } else {
        print "<p class='alert alert-success'>Mail Sent Successfully</p>";
    }

    // $mail->send();
    // echo 'Message has been sent';
} catch (Exception $e) { // handle error.
    echo 'Message could not be sent. Mailer Error: ', $mail->ErrorInfo;
    print "<p class='alert alert-danger'>Problem in Sending Mail.</p>";
}
?>