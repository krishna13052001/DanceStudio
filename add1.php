<?php
	include('connection.php');
	
$txtname=$_POST['txtname'];
$rdogender=$_POST['rdogender'];
$txtad=$_POST['txtad'];
$txtmn=$_POST['txtmn'];
$txtmail=$_POST['txtmail'];
		
	mysqli_query($conn,"insert into `tbl_stu_reg` (fullname,gender,dob,address,mobile_no,email_id,password,dance_type,expert_in,any_awards) values ('$txtname','$rdogender','$txtad','$txtmn','$txtmail')");
	header('location:admin.php');
	
?>