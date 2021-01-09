<?php
	session_start();

	if (!isset($_SESSION['id']) ||(trim ($_SESSION['id']) == '')) {
		header('admin.php');
		exit();
	}
	include('connection.php');
	$query=mysqli_query($conn,"select * from tbl_admin_login where id='".$_SESSION['id']."'");
	$row=mysqli_fetch_assoc($query);
?>
<!doctype html>
<html>
<head><script type="text/javascript">
alert("Login Success");</script>
<meta charset="utf-8">
<title>Login Success</title>
	<link rel="stylesheet" href="style.css">
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
	<li><a href="aboutus.html"><i class="fa fa-user"></i>About Us</a>
		</li>
	<li  class="active"><a href="#"><i class="fa fa-sign-in"></i>Sign In</a>
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
		<li><a href="Photo Gallery.php"><i class="fa fa-picture-o"></i>Photo Gallery</a>
		</li>
		<li><a href="admined.php"><i class=""></i>Edit & Delete</a></li>
		</li>
		<li><a href="iuadmin.php"><i class=""></i>Image Upload</a></li>
	<li><a href="admin.php"><i class="fa fa-sign-out"></i>Sign Out</a>
		</li>
	</ul>
	</div>
</body>
</html>
