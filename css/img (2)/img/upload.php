<?php

	date_default_timezone_set("Etc/GMT+8");
	
	require_once 'conn.php';
	
	if(ISSET($_POST['upload'])){
		$file_name = $_FILES['image']['name'];
		$file_temp = $_FILES['image']['tmp_name'];
		$date_upload = date("Y-m-d");
		$allowed_ext = array("jpeg", "jpg", "gif", "png");
		$exp = explode(".", $file_name);
		$ext = end($exp);
		$path = "upload/".$file_name;
		if(in_array($ext, $allowed_ext)){
			if(move_uploaded_file($file_temp, $path)){
				mysqli_query($conn, "INSERT INTO `image` VALUES('', '$file_name', '$date_upload')") or die(mysqli_error());
				echo "<center><h5 class='text-success'>Image uploaded!</h5></center>";
			}
		}else{
			echo "<center><h5 class='text-danger'>Image only is allowed!</h5></center>";
		}
	}
?>