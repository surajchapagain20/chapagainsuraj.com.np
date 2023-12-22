<?php

//function bytesToSize1024
//($bytes, $precision = 2) 
//{
//    $unit = array('B','KB','MB');
//    return @round($bytes / pow(1024, ($i = floor(log($bytes, 1024)))), $precision).' '.$unit[$i];
//}

//$sFileName = $_FILES['image_file']['name'];
//$sFileType = $_FILES['image_file']['type'];
//$sFileSize = bytesToSize1024($_FILES['image_file']['size'], 1);

//echo EOF
//<p>Yourfile: {$sFileName} has been successfully received.</p>
//<p>Type: {$sFileType}</p>
//<p>Size: {$sFileSize}</p>
//EOF;
//Util::redirect('../LOGIN/index.html');


//if(isset($_FILES['image'])){
////      $errors= array();
//      $file_name = $_FILES['image']['name'];
//      $file_size = $_FILES['image']['size'];
//      $file_tmp = $_FILES['image_file']['tmp_name'];
//      $file_type = $_FILES['image']['type'];
//      $file_ext=strtolower(end(explode('.',$_FILES['image']['name'])));
//      
//      $expensions= array("jpeg","jpg","png");
      
//      if(in_array($file_ext,$expensions)=== false){
//         $errors[]="extension not allowed, please choose a JPEG or PNG file.";
//      }
//      
//      if($file_size > 2097152) {
//         $errors[]='File size must be excately 2 MB';
//      }
//      
//      if(empty($errors)==true) {
//         move_uploaded_file($file_tmp,"image_file/".$file_name);
//         echo "Success";
//      }else{
//         print_r($errors);
//      }
//   }
?>
  <?php
if(isset($_FILES["photo"]["error"])){
    if($_FILES["photo"]["error"] > 0){
        echo "Error: " . $_FILES["photo"]["error"] . "<br>";
    } else{
        $allowed = array("jpg" => "image/jpg", "jpeg" => "image/jpeg", "gif" => "image/gif", "png" => "image/png", "JPG" => "image/JPG", "pdf" => "pdf/pdf");
        $filename = $_FILES["photo"]["name"];
        $filetype = $_FILES["photo"]["type"];
        $filesize = $_FILES["photo"]["size"];
    
        // Verify file extension
        $ext = pathinfo($filename, PATHINFO_EXTENSION);
        if(!array_key_exists($ext, $allowed)) die("Error: Please select a valid file format.");
    
        // Verify file size - 5MB maximum
        $maxsize = 10 * 1024 * 1024;
        if($filesize > $maxsize) die("Error: File size is larger than the allowed limit.");
    
        // Verify MYME type of the file
        if(in_array($filetype, $allowed)){
            // Check whether file exists before uploading it
            if(file_exists("upload" . $_FILES["photo"]["name"])){
                echo $_FILES["photo"]["name"] . " is already exists.";
            } else{
                move_uploaded_file($_FILES["photo"]["tmp_name"], "upload/" . $_FILES["photo"]["name"]);
                echo "Your file was uploaded successfully.";
            } 
        } else{
            echo "Error: There was a problem uploading your file - please try again."; 
        }
    }
} else{
    echo "Error: Invalid parameters - please contact your server administrator.";
}
header( 'Location: http://surajchapagain.com.np/upload.html' ) ;
?>