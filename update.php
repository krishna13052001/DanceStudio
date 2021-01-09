<?php
	include('connection.php');
	$id=$_GET['id'];
	
$txtname=$_POST['txtname'];
$rdogender=$_POST['rdogender'];
$txtdob=$_POST['txtdob'];
$txtad=$_POST['txtad'];
$txtmn=$_POST['txtmn'];
$txtmail=$_POST['txtmail'];
$txtpd=$_POST['txtpd'];
$combodance=$_POST['combodance'];
$txtawards=$_POST['txtawards'];
	
	mysqli_query($conn,"update `tbl_chor_reg` set username='$txtname', gender='$rdogender',
dob='$txtdob',address='$txtad',mobile_no='$txtmn',email_id='$txtmail',password='$txtpd',dance_type='$combodance',any_awards='$txtawards' where id='$id'");
	header('location:admined.php');
?>