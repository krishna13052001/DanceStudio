<?php
	session_start();
	include('connection.php');
?>
<!doctype html>
<html>
<head>
<meta charset="utf-8">
<title>Student Login Page</title>
	<link rel="stylesheet" href="login.css">
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
.one{
	text-decoration: none;
	color: violet;
}
.sub {
	width: 50%;
	align-self: center;
	background-color: orange;
	padding: 5px;
	margin-bottom: 10px;
}
#error{
        margin-top: 20px;
        color: aqua;
        background-color: red;
        border: 3px solid darkred;
        align-items: center center;
}    
</style>
</head>
<body> 
<div class="header">
<h1><b>Feet To The Beat</b></h1>
<p align="right"><?php
// Return date/time info of a timestamp; then format the output
$mydate=getdate(date("U"));
echo "$mydate[weekday], $mydate[month] $mydate[mday], $mydate[year]";
?>
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
			<li class="hover-me"><a href="admin.php">Admin</a>
				</li>
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
            <li><a href="Pictures.php"><i class="fa fa-picture-o"></i>Pictures</a></li>
	</ul>
	</div>
	<div class="box">
		<h2>Student Login</h2>
		<form method="POST" action="loginstu.php">
	<div class="inputBox">
			<input type="text" value="<?php if (isset($_COOKIE["user"])){echo $_COOKIE["user"];}?>" name="username" required="" autocomplete="off">
				<label> Username</label>
			</div>
			<div class="inputBox">
			<input type="password" value="<?php if (isset($_COOKIE["pass"])){echo $_COOKIE["pass"];}?>" name="password" required="" autocomplete="off"><br><br>
				<label> Password</label>
			</div>
	        <input type="submit" value="Login" name="login" class="sub">
			<p><a class="one" href="Chor Reg.php" target="_blank">New Student Click Here...</a></p>
		</form>
	    <?php
		if (isset($_SESSION['message'])){
			 ?> 
            <center><p id="error"><?php echo $_SESSION['message']; ?></p></center> <?php
		}
		unset($_SESSION['message']);
	?>
	</div>
<span>
</span>
</body>
</html>