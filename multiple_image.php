<?php
$conn = mysqli_connect('localhost','root', '', 'core_practice');
if(isset($_FILES['files'])){
    $errors= array();
	foreach($_FILES['files']['tmp_name'] as $key => $tmp_name ){
		$file_name = $_FILES['files']['name'][$key];
		$file_size =$_FILES['files']['size'][$key];
		$file_tmp =$_FILES['files']['tmp_name'][$key];
		$file_type=$_FILES['files']['type'][$key];	
        if($file_size > 2097152){
			$errors[]='File size must be less than 2 MB';
        }		
        $query="INSERT into upload_data (`FILE_NAME`,`FILE_SIZE`,`FILE_TYPE`) VALUES('$file_name','$file_size','$file_type'); ";
        $desired_dir="images";
        if(empty($errors)==true){
            if(is_dir($desired_dir)==false){
                mkdir("$desired_dir", 0700);		// Create directory if it does not exist
            }
            if(is_dir("$desired_dir/".$file_name)==false){
                move_uploaded_file($file_tmp,"$desired_dir/".$file_name);
            }else{									// rename the file if another one exist
                $new_dir="$desired_dir/".$file_name.time();
                 rename($file_tmp,$new_dir) ;				
            }
		 mysqli_query($conn, $query);			
        }else{
                print_r($errors);
        }
    }
	if(empty($error)){
		echo "Success";
	}
}
?>


<form action="" method="POST" enctype="multipart/form-data">
	<input type="file" name="files[]" multiple/>
	<input type="submit"/>
</form>
