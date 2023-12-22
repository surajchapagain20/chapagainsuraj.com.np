<?php

// Upload and Rename File

$allowedExts = array("pdf", "mp4", "jpg", "JPG", "png", "gif");
$temp = explode(".", $_FILES["file"]["name"]);
$extension = end($temp);
if (($_FILES["file"]["type"] == "application/pdf") && ($_FILES["file"]["size"] < 2000000000) && in_array($extension, $allowedExts))
  {
  if ($_FILES["file"]["error"] > 0)
    {
    echo "Return Code: " . $_FILES["file"]["error"] . "<br>";
    }
  else
    {
    echo "Upload: " . $_FILES["file"]["name"] . "<br>";
    echo "Type: " . $_FILES["file"]["type"] . "<br>";
    echo "Size: " . ($_FILES["file"]["size"] / 9216) . " kB<br>";
    echo "Temp file: " . $_FILES["file"]["tmp_name"] . "<br>";

    if (file_exists("upload/" . $_FILES["file"]["name"]))
      {
      echo $_FILES["file"]["name"] . " already exists. ";
      header('Location: '.site_url());
      }
    else
      {
      move_uploaded_file($_FILES["file"]["tmp_name"],
      "upload/" . $_FILES["file"]["name"]);
  echo "Stored in: " . "upload/" . $_FILES["file"]["name"];
  header('Location: '.$newURL);
      }
    }
  }
else
  {
  echo "Invalid file";
  }
 header( 'Location: http://surajchapagain.com.np/upload.html' ) ;
 ?>