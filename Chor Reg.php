<!doctype html>
<html>
<head>
<meta charset="utf-8">
<title>Choreographer Regestration Page</title>
	<link rel="stylesheet" href="login1.css">
	<link rel="stylesheet" href="style.css">
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
    width: 30%;
    margin-left: 38%;
}
</style>
</head>
<body>
<div class="header">
<h1><b>Feet To The Beat</b></h1>
<!-- <p align="left">
<?php
	$attendance=array("1","2");
	//echo count($attendance);
?> -->
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
<p>&nbsp;</p>
<p>&nbsp;</p>
<div class="box">
            <h2>Choreographer Registration</h2>
            <form action="Chor Reg.php" method="post">
                <div class="inputBox">
                    <input type="text" name="txtname" id="textfield" autocomplete="off" required="">
                    <label>Username</label></p>
                </div>
                <p class="gender">
                    <span class="gen" required><font color="red">Gender</span>
                    <select name="rdogender" id="select">
                        <option>---NONE---</option>
                        <option>Male</option>
                        <option>Female</option>
                        <option>Other</option>
                    </select>
                </p>
                <br>
                <p class="gender">
                    <span class="gen" required="">Date Of Birth</span>
                        <input type="date" name="txtdob" class="genm">
                </p>
                <br>
                <div class="inputBox">
                    <input type="text" name="txtad" id="textarea" autocomplete="off" required="">
                    <label>Address</label>
                </div>
                <div class="inputBox" class="form-control">
                    <input type="text" name="txtmn" minlength="10" maxlength="10" autocomplete="off" required="">
                    <label>Mobile number</label>
                </div>
                <div class="inputBox">
                    <input type="email" name="txtmail" id="email" autocomplete="off" required="">
                    <label>E-Mail</label>
                </div>
                <div class="inputBox">
                    <input type="password" name="txtpd" id="password" required="">
                    <label>Password</label>
                </div>
                <div class="inputBox">
                    <input type="password" name="txtcpd" id="password2" required="">
                    <label>Confirm Password</label>
                </div>
                <br>
                <p class="gender">
                    <span class="gen" required>Dance Type</span>
                    <select name="combodance" id="select">
                        <option>---NONE---</option>
                        <option>Ballet Dance</option>
                        <option>Western Dance</option>
                        <option>Hip-Hop Dance</option>
                        <option>Jazz Dance</option>
                        <option>Modern Dance</option>
                        <option>Ballroom Dance</option>
                    </select>
                </p><br>
                <br>
                <div class="inputBox">
                    <input type="text" name="txtawards" id="textfield4" autocomplete="off" required="">
                    <label>Any Awards</label>
                </div>
                <br>
                    <p><input type="submit"  name="btnsubmit" value="Register" class="sub"></p>
            </form>
    </div>
		<?php
		include_once("function.php");
		$insertdata=new DB_con();
		if(isset($_POST['btnsubmit']))
		{
			$txtname=$_POST['txtname'];
			$rdogender=$_POST['rdogender'];
			$txtdob=$_POST['txtdob'];
			$txtad=$_POST['txtad'];
			$txtmn=$_POST['txtmn'];
			$txtmail=$_POST['txtmail'];
			$txtpd=$_POST['txtpd'];
			$txtcpd=$_POST['txtcpd'];
			$combodance=$_POST['combodance'];
			$txtawards=$_POST['txtawards'];
			if($txtpd === $txtcpd){
				$sql=$insertdata->choreographerreg($txtname,$rdogender,$txtdob,$txtad,$txtmn,$txtmail,$txtpd,$combodance,$txtawards);
				if($sql)
				{
					echo "<script>alert('Choreographer Registration Success');</script>";
				}
				else
				{
					echo "<script>alert('Choreographer Registration Failed');</script>";
				}
			}
            else{
                ?>
                <p id="error" style="text-align: center;">Password and confirm passwords should be same</p>
                <br>
                <br>
                <?php
            }

		}
		?>
</body>
</html>
