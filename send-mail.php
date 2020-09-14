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












// ------=====================another mail formate------------==============================

<?php
  $toEmail =['dslexpressmovers@gmail.com', 'sales@webaxis.info', 'professionalideas1@gmail.com'];

    $subject = "Shifting Enquiry Pune";
    $body .= "Name:".$_POST['name']." \n";
    // $body .= "Email:".$_POST['email']." \n";
	$body .= "Phone Number:".$_POST['contact']." \n";
    $body .= "Date:".$_POST['date']." \n";
    $body .= "Shifting From:".$_POST['Shifting_From']." \n";
    $body .= "Shifting To:".$_POST['Shifting_To']." \n";
	// $body .= "Message:".$_POST['messages']." \n";
    
    $mailHeaders = "From: " . $_POST["name"] . "<". $_POST["contact"] .">\r\n";
    $x = 0;
    if(count($toEmail) > 0){
        foreach($toEmail as $to){
            mail($to, $subject, $body, $mailHeaders);
            $x = 1;
        }
    }
    if($x == 1) {
        print "<p class='alert alert-success'>Mail has been sent successfully</p>";
    } else {
        print "<p class='alert alert-danger'>Problem in Sending Mail.</p>";
    }
?>



<!-- -------------======================another mail formate-----------============================== -->


<?php
         $to = "kuvarpratapsingh90@gmail.com";
         $subject = "This is subject";
         
         $message = "<b>This is HTML message.</b>";
         $message .= "<h1>This is headline.</h1>";
         
         $header = "From:singhrec1@gmail.com \r\n";
         $header .= "Cc:singhrec1@gmail.com \r\n";
         $header .= "MIME-Version: 1.0\r\n";
         $header .= "Content-type: text/html\r\n";
         
         $retval = mail ($to,$subject,$message,$header);
         
         if( $retval == true ) {
            echo "Message sent successfully..."; die;
         }else {
            echo "Message could not be sent..."; die;
          }