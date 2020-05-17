<?php 
// Path configuration 
$targetDir = "images/"; 
$watermarkImagePath = 'images/tk12.png'; 
 
// $statusMsg = ''; 
if(isset($_POST["submit"])){ 
    if(!empty($_FILES["file"]["name"])){ 
        // File upload path 
        $fileName = basename($_FILES["file"]["name"]); 
        $targetFilePath = $targetDir . $fileName; 
        $fileType = pathinfo($targetFilePath,PATHINFO_EXTENSION); 
         
        // Allow certain file formats 
        $allowTypes = array('jpg','png','jpeg'); 
        if(in_array($fileType, $allowTypes)){ 
            // Upload file to the server 
            if(move_uploaded_file($_FILES["file"]["tmp_name"], $targetFilePath)){ 
                // Load the stamp and the photo to apply the watermark to 
                $watermarkImg = imagecreatefrompng($watermarkImagePath); 
                switch($fileType){ 
                    case 'jpg': 
                        $im = imagecreatefromjpeg($targetFilePath); 
                        break; 
                    case 'jpeg': 
                        $im = imagecreatefromjpeg($targetFilePath); 
                        break; 
                    case 'png': 
                        $im = imagecreatefrompng($targetFilePath); 
                        break; 
                    default: 
                        $im = imagecreatefromjpeg($targetFilePath); 
                } 
                 
                // Set the margins for the watermark 
                $marge_right = 10; 
                $marge_bottom = 10; 
                 
                // Get the height/width of the watermark image 
                $sx = imagesx($watermarkImg); 
                $sy = imagesy($watermarkImg); 
                 
                // Copy the watermark image onto our photo using the margin offsets and  
                // the photo width to calculate the positioning of the watermark. 
                imagecopy($im, $watermarkImg, imagesx($im) - $sx - $marge_right, imagesy($im) - $sy - $marge_bottom, 0, 0, imagesx($watermarkImg), imagesy($watermarkImg)); 
                 
                // Save image and free memory 
                imagepng($im, $targetFilePath); 
                imagedestroy($im); 
     
                // if(file_exists($targetFilePath)){ 
                //     $statusMsg = "The image with watermark has been uploaded successfully."; 
                // }else{ 
                //     $statusMsg = "Image upload failed, please try again."; 
                // }  
            }else{ 
                $statusMsg = "Sorry, there was an error uploading your file."; 
            } 
        }else{ 
            $statusMsg = 'Sorry, only JPG, JPEG, and PNG files are allowed to upload.'; 
        } 
    }
} 
 
// Display status message 
//echo $statusMsg; ?>
<!DOCTYPE html>
<html>
<head>
    <title>mark image</title>
</head>
<body>
<form action="" method="post" enctype="multipart/form-data">
    Select Image File to Upload:
    <input type="file" name="file">
    <input type="submit" name="submit" value="Upload">
</form>
</body>
</html>