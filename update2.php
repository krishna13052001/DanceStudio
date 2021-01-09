<?php
	include('connection.php');
	$id=$_GET['id'];
$student=$_POST['student_name'];
$txtname=$_POST['txtname'];
$rdogender=$_POST['rdogender'];
$combodance=$_POST['combodance'];
$txtstatus=$_POST['txtstatus'];
    
        $query="update request set student_name='$student',username='$txtname',gender='$rdogender',dance_type='$combodance',status='$txtstatus' where id=$id";
        $sql=mysqli_query($conn,$query);
//        $quer_run=mysqli_query($conn,$query);

		header('location:requests.php');
?>
