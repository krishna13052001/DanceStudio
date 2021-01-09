<?php
	include 'conn.php';
	$id = $_GET['id'];
	$sql = "Delete from tbl_chor_reg where md5(infoID) = '$id'";
	if($conn->query($sql) === true){
		echo "Sucessfully deleted data";
		header('location:maintenance.php');
	}else{
		echo "Oppps something error ";
	}
	$conn->close();
?>