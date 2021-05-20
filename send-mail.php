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

          // it's good not go to scam mail you have try.
          
    $to = "singhrec1@gmail.com";
    $subject =  $_POST['enquiry']." Enquiry";
    $txt .= "Name:".$_POST['name']." \n";
    $txt .= "Email:".$_POST['email']." \n";
    $txt .= "Phone Number:".$_POST['contact']." \n";
    $headers = "From:". $_POST["email"]. "\r\n" .
    "CC:".$_POST['contact'];
    
   $save =  mail($to,$subject,$txt,$headers);
   
    if($save) {
        print "<p class='alert alert-success'>Mail Sent Successfully</p>";
    } else {
        print "<p class='alert alert-danger'>Problem in Sending Mail.</p>";
    }
?>



=============================send mail using attachmentrs=================

<?php
$statusMsg='';
if(isset($_FILES["resume"]["name"])){
   $email = $_POST['email'];
    $name = $_POST['name'];
    $subject = $_POST['enquiry']." Enquiry";
    $education = $_POST['education'];
    $contact = $_POST['contact'];
    $department = $_POST['department'];
    $website = $_POST['website'];
    $message = $_POST['tell-us'];
$fromemail =  $email;
$subject="Uploaded file attachment";
$email_message = '<h2>Job Request Submitted</h2>
                    <p><b>Name:</b> '.$name.'</p>
                    <p><b>Email:</b> '.$email.'</p>
                    <p><b>Subject:</b> '.$subject.'</p>
                    <p><b>Contact:</b> '.$contact.'</p>
                    <p><b>Education:</b> '.$education.'</p>
                    <p><b>Department:</b> '.$department.'</p>
                    <p><b>Website:</b> '.$website.'</p>
                    <p><b>Tell us why we should hire you:</b><br/>'.$message.'</p>';
$email_message.="Please check the attachment on below";
$semi_rand = md5(uniqid(time()));
$headers = "From: ".$fromemail;
$mime_boundary = "==Multipart_Boundary_x{$semi_rand}x";
 
    $headers .= "\nMIME-Version: 1.0\n" .
    "Content-Type: multipart/mixed;\n" .
    " boundary=\"{$mime_boundary}\"";
 
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
    $email_message .= "This is a multi-part message in MIME format.\n\n" .
    "--{$mime_boundary}\n" .
    "Content-Type:text/html; charset=\"iso-8859-1\"\n" .
    "Content-Transfer-Encoding: 7bit\n\n" .
    $email_message .= "\n\n";
 
 
    $email_message .= "--{$mime_boundary}\n" .
    "Content-Type: application/octet-stream;\n" .
    " name=\"{$strFilesName}\"\n" .
    //"Content-Disposition: attachment;\n" .
    //" filename=\"{$fileatt_name}\"\n" .
    "Content-Transfer-Encoding: base64\n\n" .
    $strContent  .= "\n\n" .
    "--{$mime_boundary}--\n";
}
$toemail="singhrec1@gmail.com"; 
// $toemail="agrawalpawan10@gmail.com"; 
 
if(mail($toemail, $subject, $email_message, $headers)){
//   $statusMsg= "Email send successfully with attachment"; die;
//   echo"Email send successfully with attachment"; die;
 print "<p class='alert alert-success'>Mail Sent Successfully</p>";
}else{
//   $statusMsg= "Not sent"; die;
print "<p class='alert alert-danger'>Problem in Sending Mail.</p>";
}
}
?>

<script>
    // send mail for job enquiry
    $("#career-job-form").on('submit', function(event) {
        event.preventDefault();
        // var formData = $(this).serialize();
        // alert(formData);
        $.ajax({
            type: 'POST',
            url: 'job-contact-mail.php',
            data: new FormData(this),
            contentType: false,
            processData: false,
            cache: false,
            success: function(data) { ; 
              $("#career-job-form")[0].reset();
                $("#mail-status-for-job-enquiry").html(data);
            },
            error: function(xhr, status, error){
                console.log(xhr); 
            }
      });
    });
</script>

------------=========================sdm mail-------------------===============
<html>
   
   <head>
      <title>Sending HTML email using PHP</title>
   </head>
   
   <body>
      
      <?php
         $to = "sdmishra125@gmail.com";
         $subject = "This is subject";
         
         $message = "<b>This is HTML message.</b>";
         $message .= "<h1>This is headline.</h1>";
         
         $header = "From:abc@somedomain.com \r\n";
         $header .= "Cc:afgh@somedomain.com \r\n";
         $header .= "MIME-Version: 1.0\r\n";
         $header .= "Content-type: text/html\r\n";
         
         $retval = mail ($to,$subject,$message,$header);
         
         if( $retval == true ) {
            echo "Message sent successfully...";
         }else {
            echo "Message could not be sent...";
         }
      ?>
      
   </body>
</html>