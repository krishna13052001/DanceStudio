	<?php
	include('connection.php');
	
$txtname=$_POST['txtname'];
$rdogender=$_POST['rdogender'];
$txtdob=$_POST['txtdob'];
$txtad=$_POST['txtad'];
$txtmn=$_POST['txtmn'];
$txtmail=$_POST['txtmail'];
$txtpd=$_POST['txtpd'];
$combodance=$_POST['combodance'];
$txtawards=$_POST['txtawards'];
$txtstatus=$_POST['txtstatus'];
		
	mysqli_query($conn,"insert into `tbl_stu_reg` (fullname,gender,dob,address,mobile_no,email_id,password,dance_type,expert_in,any_awards,status) values ('$txtname','$rdogender','$txtdob','$txtad','$txtmn','$txtmail','$txtpd','$combodance','$txtawards', '$txtstatus')");
	header('location:requests.php.php');
	
?>