<?php
include 'conn1.php';
include 'session.php';

$id = $_GET['id'];
$view = "SELECT * from tbl_chor_reg where md5(id) = '$id'";
$result = $conn->query($view);
$row = $result->fetch_assoc();

if(isset($_POST['update'])){

	$ID = $_GET['id'];

	$txtname=$_POST['txtname'];
	$rdogender=$_POST['rdogender'];
	$txtdob=$_POST['txtdob'];
	$txtad=$_POST['txtad'];
	$txtmn=$_POST['txtmn'];
	$txtmail=$_POST['txtmail'];
	$txtpd=$_POST['txtpd'];
	$combodance=$_POST['combodance'];
	$txtawards=$_POST['txtawards'];

	$insert = "UPDATE tbl_chor_reg set username = '$txtname', gender = '$rdogender', dob = '$txtdob', address = '$txtad', mobile_no = '$txtmn', email_id = '$txtmail', password = '$txtpd', dance_type = '$combodance', any_awards = '$txtawards' where md5(id) = '$ID'";
	
	if($conn->query($insert)== TRUE){

			echo "Sucessfully update data";
			header('location:maintenance.php');			
	}else{

		echo "Ooppss cannot add data" . $conn->error;
		header('location:maintenance.php');
	}
	$conn->close();
}
?>

<!DOCTYPE html>
<html>
<head>
<meta charset="utf-8">
<title>Admin</title>
	<link rel="stylesheet" href="style.css">
	<!-- <link rel="stylesheet" href="admintable.css"> -->
	<link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/font-awesome/4.7.0/css/font-awesome.min.css">
<meta charset="utf-8">
<meta name="viewport" content="width=device-width, initial-scale=1">
<style>
body 
{
margin: 0;
font-family: comic sans ms;
}
.topnav {
 overflow: hidden;
 background-color: #F2A124;
}
.topnav a {
float: left;
color: #;
text-align: center;
padding: 14px 16px;
text-decoration: none;
font-size: 17px;
}
.topnav a:hover {
color: black;
}
.topnav a.active {
background-color: #B7E9F7;
color: rebeccapurple;
}
body 
{
margin: 0;
}
/* Style the header */
.header {
background-color: #F2A124;
padding: 20px;
text-align: center;
}
</style>
</head>
<body> 
<div class="header">
<h1><b>Feet To The Beat</b></h1>
</div>
</head>
<body>
<div class="menu-bar">
	<ul>
	<li><a href="Home Page.php"><i class="fa fa-home"></i>Home</a></li>
	<li><a href="requestaboutus.php"><i class="fa fa-user"></i>About Us</a>
		</li>
	<li><a href="#"><i class="fa fa-sign-in"></i>Sign In</a>
		<div class="sub-menu-1">
			<ul>
			<li class="hover-me"><a href="#">Choreographer</a><i class="fa fa-angle-right"></i>
				<div class="sub-menu-2">
				<ul>
					<li><a href="Chor Login.php">Login</a></li>
					<li><a href="Chor Reg.php">Regestration</a></li>
					</ul>
				</div>
                </li>
			<li class="hover-me"><a href="#">Student</a><i class="fa fa-angle-right"></i>
				<div class="sub-menu-2">
				<ul>
					<li><a href="Stu Login.php">Login</a></li>
					<li><a href="Stu Reg.php">Regestration</a></li>
					</ul>
				</div>
                </li>
			</ul>
			</div>
		</li>
        <li class="active"><a href="#"><i class="fa fa-wrench"></i>Utilities</a>
		<div class="sub-menu-1">
			<ul>
			<li class="hover-me"><a href="admined.php">Edit & Delete</a><i class="#"></i>
                </li>
			<li class="hover-me"><a href="iuadmin.php">Image Upload</a><i class="#"></i>
                </li>
			<li class="hover-me"><a href="requests.php">Requests</a><i class="#"></i>
                </li>
            <li class="hover-me"><a href="maintenance.php">Search</a><i class="#"></i>
                </li>    
			</ul>
			</div>
		</li>
	<li><a href="Picturesad.php"><i class="fa fa-picture-o"></i>Pictures</a>
		</li>
		<li><a href="success.php"><i class="fa fa-long-arrow-left"></i>Back</a>
		</li>
		<li><a href="logoutsearch.php"><i class="fa fa-sign-out"></i>Logout</a>
	</ul>
	</div>
<p>&nbsp;</p>
<p>&nbsp; </p>
	<head>
		<link rel="stylesheet" type="text/css" href="mycss.css">
		<title>
			This is Sample
		</title>
		</head>
	<body bgcolor="green">
			<div id="content">
				<form action="" method="POST">
				<table align="center">
					<tr>
						<td>Username: <input type="text" name="txtname" value="<?php echo $row['username'];?>" placeholder="Type Username here" required></td>
						</tr>
						<tr>
							<td>Gender: <input type="text" name="rdogender"  value="<?php echo $row['gender'];?>" placeholder="Type Gender here.." required></td>
						</tr>
						<tr>
							<td>Date Of Birth: <input type="text" name="txtdob"  value="<?php echo $row['dob'];?>" placeholder="Type Daye Of Birth here.." required></td>
						</tr>
						<tr>
							<td>Address: <input type="text" name="txtad"  value="<?php echo $row['address'];?>" placeholder="Type Address here.." required></td>
						</tr>
						<tr>
							<td>Mobile No: <input type="text" name="txtmn"  value="<?php echo $row['mobile_no'];?>" placeholder="Type Mobile No here.." required></td>
						</tr>
						<tr>
							<td>Email Id: <input type="text" name="txtmail"  value="<?php echo $row['email_id'];?>" placeholder="Type Email Id here.." required></td>
						</tr>
						<tr>
							<td>Password: <input type="text" name="txtpd"  value="<?php echo $row['password'];?>" placeholder="Type Password here.." required></td>
						</tr>
						<tr>
							<td>Dance Type: <input type="text" name="combodance"  value="<?php echo $row['dance_type'];?>" placeholder="Type Dance Type here.." required></td>
						</tr>
						<tr>
							<td>Any Awards: <input type="text" name="txtawards"  value="<?php echo $row['any_awards'];?>" placeholder="Type Any Awards here.." required></td>
						</tr>
						<tr>
							<td><input type="submit" name="update" value="Update"></td>
						</tr>
				</table>
			</form>
				<br>
			
			</div>
		</div>
		</body>

</html>