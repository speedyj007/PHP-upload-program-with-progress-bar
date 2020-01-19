
<?php

$fileName = $_FILES["file"]["name"];
$fileTempLoc = $_FILES["file"]["tmp_name"];
$fileType = $_FILES["file"]["type"];
$fileSize = $_FILES["file"]["size"];
$fileError = $_FILES["file"]["error"];

if(!$fileTempLoc)
{
	echo "Error : please select file";
	exit();
}

if(move_uploaded_file($fileTempLoc,"uploads\\$fileName" ))
{
	echo "<strong>$fileName</strong> upload is complete";
}
else{
	echo "move_uploaded_file function failed";
}

?>