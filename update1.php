<?php
	include('connection.php');
	$id=$_GET['id'];
	
$txtname=$_POST['txtname'];
$rdogender=$_POST['rdogender'];
$txtad=$_POST['txtad'];
$txtmn=$_POST['txtmn'];
$txtmail=$_POST['txtmail'];
	
	mysqli_query($conn,"update `ballet` set username='$txtname', gender='$rdogender',address='$txtad',mobile_no='$txtmn',email_id='$txtmail' where id='$id'");
	header('location:requests.php');
?>