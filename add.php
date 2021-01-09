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
		
	mysqli_query($conn,"insert into `tbl_chor_reg` (fullname,gender,dob,address,mobile_no,email_id,password,dance_type,expert_in,any_awards) values ('$txtname','$rdogender','$txtdob','$txtad','$txtmn','$txtmail','$txtpd','$combodance','$txtawards')");
	header('location:admin.php');
	
?>