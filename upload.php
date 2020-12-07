<?php
$msg = ""; 

if (isset($_POST['upload'])) { 

    $filename = $_FILES["uploadfile"]["name"]; 
	$tempname = $_FILES["uploadfile"]["tmp_name"];	 
	$folder = "image/".$filename; 
	
		
		if (move_uploaded_file($tempname, $folder)) { 
			echo "Ảnh đã tải lên thành công"; 
		}else{ 
			echo "Ảnh tải lên không thành công"; 
	} 
} 
?> 

<!DOCTYPE html> 
<html> 
<head> 
<title>TRÌNH TẢI ẢNH</title> 
<link rel="stylesheet" type= "text/css" href ="style.css"/> 
<div id="content"> 

<form method="POST" action="" enctype="multipart/form-data"> 
	<input type="file" name="uploadfile" value=""/> 
		
	<div> 
		<button type="submit" name="upload">TẢI LÊN</button> 
		</div> 
</form> 

<p><button><a href="index.php">QUAY VỀ TRANG CHỦ</a></button></p>
</div> 
</body> 
</html> 
