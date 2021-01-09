<?php
	if(isset($_POST['login'])){
		
		session_start();
		include('connection.php');
	
		$username=$_POST['username'];
		$password=$_POST['password'];
	
		$query=mysqli_query($conn,"select * from `tbl_stu_reg` where username='$username' && password='$password'");
	
		if (mysqli_num_rows($query) == 0){
			$_SESSION['message']="Login Failed. User not Found!";
			header('location:Stu Login.php');
		}
		else{
			$row=mysqli_fetch_array($query);
			
			if (isset($_POST['remember'])){
				//set up cookie
				setcookie("user", $row['username'], time() + (86400 * 30)); 
				setcookie("pass", $row['password'], time() + (86400 * 30)); 
			}
			
			$_SESSION['id']=$row['id'];
			header('location:successstu.php');
		}
	}
	else{
		header('location:Stu Login.php');
		$_SESSION['message']="Please Login!";
	}
?>