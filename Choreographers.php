<?php
	session_start();
	
	if (!isset($_SESSION['id']) ||(trim ($_SESSION['id']) == '')) {
		header('Stu Login.php');
		exit();
	}
	include('connection.php');
	$query=mysqli_query($conn,"select * from tbl_stu_reg where id='".$_SESSION['id']."'");
	$row=mysqli_fetch_assoc($query);
?>
<!DOCTYPE html>
<html>
<head>
	<meta charset="utf-8">
	<title>Book Choreographers</title>
	<link rel="stylesheet" type="text/css" href="choreographersstyle.css">
    <link rel="stylesheet" href="studentstyle.css">
	<link rel="stylesheet" href="requeststable.css">    	
	<link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/font-awesome/4.7.0/css/font-awesome.min.css">
<meta charset="utf-8">
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
<p><?php echo $row['username']; ?></p>
</div>
</head>
<body>
<div class="menu-bar">
	<ul>
	<li><a href="Home Page.php"><i class="fa fa-home"></i>Home</a></li>
	<li><a href="aboutusad.html"><i class="fa fa-user"></i>About Us</a>
		</li>
			<li class="active"><a href="Choreographers.php"><i class="#"></i>View Choreographers</a></li>
    	    <li><a href="pen_req.php"></i>Status</a></li>
			<li><a href="viewrewards.php"></i>View Rewards</a></li>
			<li><a href="Picturesstu.php"><i class="fa fa-picture-o"></i>Pictures</a></li>
			<li><a href="logoutstu.php"><i class="fa fa-sign-out"></i>Log Out</a></li>
	</ul>
	</div>
	Explore by clicking Pictures.
	<div class="container">
	<div class="card">
		<div class="imgbox">
			<a href="ballet.php"><img src="pic-1.png" alt="Ballet Dance"></a>
		</div>
		<div class="content">
			<h2>Ballet Dance</h2>
			<p>Ballet (French: [balɛ]) is a type of performance dance that originated during the Italian Renaissance in the fifteenth century</p>
		</div>
	</div>

	<div class="card">
		<div class="imgbox">
			<a href="western.php"><img src="pic-2.png" alt="Western Dance"></a>
		</div>
		<div class="content">
			<h2>Western Dance</h2>
			<p>Country/western dance, also called country and western dance, encompasses many dance forms or styles, which are typically danced to country-western music</p>
		</div>
	</div>

	<div class="card">
		<div class="imgbox">
			<a href="hiphop.php"><img src="pic-4.png" alt="Hip-Hop Dance"></a>
		</div>
		<div class="content">
			<h2>Hip-Hop Dance</h2>
			<p>Hip-hop dance refers to street dance styles primarily performed to hip-hop music or that have evolved as part of hip-hop culture.</p>
		</div>
	</div>

	<div class="card">
		<div class="imgbox">
			<a href="modern.php"><img src="pic-5.png" alt="Modern Dance"></a>
		</div>
		<div class="content">
			<h2>Modern Dance</h2>
			<p>Modern dance is a broad genre of western concert or theatrical dance, primarily arising out of Germany and the United States.</p>
		</div>
	</div>

	<div class="card">
		<div class="imgbox">
			<a href="jazz.php"><img src="pic-3.png" alt="Jazz Dance"></a>
		</div>
		<div class="content">
			<h2>Jazz Dance</h2>
			<p>Jazz dance is a performance dance technique and style that first emerged in the United States in the early twentieth century.</p>
		</div>
	</div>	

	<div class="card">
		<div class="imgbox">
			<a href="ballroom.php"><img src="pic-6.png" alt="Ballroom Dance"></a>
		</div>
		<div class="content">
			<h2>Ballroom Dance</h2>
			<p>Ballroom dance is a set of partner dances, which are enjoyed both socially and competitively around the world.</p>
		</div>
	</div>
	</div>

</body>

</html>