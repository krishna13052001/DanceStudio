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
	<title>About Us</title>
        <link rel="stylesheet" href="choreographersstyle.css">
        <link rel="stylesheet" href="requestaboutus.css">
        <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.1.3/css/bootstrap.min.css">
        <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/font-awesome/4.7.0/css/font-awesome.min.css">
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
<h1><b>Feel The Dance</b></h1>
<p><?php echo $row['username']; ?></p>
</div>
</head>
<body>
    <div class="menu-bar">
	<ul>
	<li><a href="Home Page.php"><i class="fa fa-home"></i>Home</a></li>
	<li class="active"><a href="aboutuschor.html"><i class="fa fa-user"></i>About Us</a>
		</li>
	<!-- <li><a href="#"><i class="fa fa-sign-in"></i>Sign In</a>
		<div class="sub-menu-1">
			<ul>
				<li class="hover-me"><a href="admin.php">Admin</a></li>
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
            <li><a href="Choreographers.php"><i class="#"></i>View Choreographers</a></li>
    <li><a href="pen_req.php"><i class="fa fa-user"></i>Status</a></li>
			<li><a href="Picturesstu.php"><i class="fa fa-picture-o"></i>Pictures</a></li>
            <li><a href="logoutstu.php"><i class="fa fa-sign-out"></i>Logout</a></li>
	</ul>
	</div>
<p>&nbsp;</p>
<p>&nbsp; </p>

	<section class="team">
		<div class="container">
			<h2>Our Team</h2>
                <div class="row">
                    <div class="col-md-3 profile text-center">
                        <div class="img-box">
                            <img src="1pic.jpg" class="img-responsive">
                    </div>
                    	<h3>Raju</h3>
                    	<h4>Founder / CEO</h4>
                    	<p>sfdfbgn</p>
                </div>
                    <div class="col-md-3 profile text-center">
                        <div class="img-box">
                            <img src="2pic.png" class="img-responsive">
                    </div>
                    	<h3>Subhash</h3>
                    	<h4>Business Manager</h4>
                    	<p>sfdfbgnb</p>
                </div>
                    <div class="col-md-3 profile text-center">
                        <div class="img-box">
                            <img src="3pic.png" class="img-responsive">
                    </div>
                    	<h3>Akhil</h3>
                    	<h4>Artistic Designer</h4>
                    	<p>sfdfbgnbgae</p>
                </div>
                    <div class="col-md-3 profile text-center">
                        <div class="img-box">
                            <img src="1pic.jpg" class="img-responsive">
                    </div>
                    	<h3>Mohan</h3>
                    	<h4>Incharge</h4>
                    	<p>sfdfbgnbgae</p>
                </div>
            </div>
		</div>
	</section>
</body>
</html>