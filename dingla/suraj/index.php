<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
<meta http-equiv="Content-Type" content="text/html; charset=iso-8859-1" />
<title>NEPAL LIFE INSURANCE COMPANY INDEPENDENT EMPLOYEE UNION</title>
<style type="text/css">
<!--
li{
	list-style-type:none;
	margin-right:10px;
	margin-bottom:10px;
	float:left;
}
-->
</style></head>
<body>
<pre> <h1>
  NEPAL LIFE INSURANCE COMPANY INDEPENDENT EMPLOYEE UNION
   		  4TH CONFERENCE
			   2074
		    FALGUN 04_05
	    KHARIPATI, BHAKTAPUR

  </h1></pre>


<ul>
	<?php
		$dirname = "images/";
		$images = scandir($dirname);
		shuffle($images);
		$ignore = array(".", "..");
		foreach($images as $curimg){
			if(!in_array($curimg, $ignore)) {
				echo "<li><a href=\"$dirname$curimg\"><img src='img.php?src=$dirname$curimg&w=300&zc=1' alt='' /></a></li>\n ";
			}
		} 				
	?>
</ul>
</body>
</html>