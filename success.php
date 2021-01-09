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
<head>
<meta charset="utf-8">
<title>Admin Panel</title>
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
	<p style="font-size: 25px" align="right"></p></h1>
	<?php 
	$n1=$row['fullname'];
	echo $n1;
	?>
</div>
</head>
<body>
<div class="menu-bar">
	<ul>
	<li><a href="Home Page.php"><i class="fa fa-home"></i>Home</a></li>
	<li><a href="requestaboutus.php"><i class="fa fa-user"></i>About Us</a>
		</li>
	<!-- <li class="active"><a href="#"><i class="fa fa-sign-in"></i>Sign In</a>
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
		</li> -->
        <li><a href="#"><i class="fa fa-wrench"></i>Utilities</a>
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
		<!-- <li><a href="success.php"><i class="fa fa-long-arrow-left"></i>Back</a>
		</li> -->
		<li><a href="logoutsearch.php"><i class="fa fa-sign-out"></i>Logout</a></li>
	</ul>
	</div>
<p>&nbsp;</p>
<p>&nbsp; </p>
	<i><h2 style="font-size:50px" align="center">Welcome To Admin Panel</h2></i>
	<p style="font-size: 40px" align="center"><?php echo $row['fullname']; ?></p>
</body>
</html>