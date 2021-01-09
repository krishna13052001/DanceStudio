<?php
include 'conn1.php';
include 'session.php';
if(isset($_POST['add'])){

	$txtname=$_POST['txtname'];
	$rdogender=$_POST['rdogender'];
	$txtdob=$_POST['txtdob'];
	$txtad=$_POST['txtad'];
	$txtmn=$_POST['txtmn'];
	$txtmail=$_POST['txtmail'];
	$txtpd=$_POST['txtpd'];
	$combodance=$_POST['combodance'];
	$txtawards=$_POST['txtawards'];

	$insert = "insert into tbl_chor_reg (username,gender,dob,address,mobile_no,email_id,password,dance_type,any_awards) values ('$txtname','$rdogender','$txtdob','$txtarea','$txtmn','$txtmail','$txtpd','$combodance','$txtawards')";
	
	
	if($conn->query($insert)== TRUE){

			echo "Sucessfully add data";
			header('location:maintenance.php');
	}else{

		echo "Ooppss cannot add data" . $conn->connect_error;
		header('location:maintenance.php');
	}
	$insert->close();
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
		<li><a href="maintenance.php"><i class="fa fa-long-arrow-left"></i>Back</a>
		</li>
		<li><a href="logoutserach.php"><i class="fa fa-sign-out"></i>Logout</a>
	</ul>
	</div>
<p>&nbsp;</p>
<p>&nbsp; </p>
	<head>
		<!-- <link rel="stylesheet" type="text/css" href="mycss.css"> -->
		<title>
			This is Sample
		</title>
		</head>
	<body>
			<div id="content">
				<form action="result.php" method="get" ecntype="multipart/data-form">
						<table align="center">
							<tr>
								<td>Search: <input type="text" name="query"><input type="submit" value="Search" name="search"></td>
							</tr>
						</table>
				</form>
				<form action="maintenance.php" method="POST">
				<table align="center">
					<tr>
						<td>Username: <input type="text" name="txtname" value="" placeholder="Type Firstname here" required></td>
						</tr>
						<tr>
						<td>Gender: <input type="text" name="txtname" value="" placeholder="Type Firstname here" required></td>
						</tr>
						<tr>
							<td>Date Of Birth: <input type="text" name="lname" placeholder="Type Last Name here.." required></td>
						</tr>
						<tr>
						<td>Address: <input type="text" name="txtname" value="" placeholder="Type Firstname here" required></td>
						</tr>
						<tr>
						<td>Mobile No: <input type="text" name="txtname" value="" placeholder="Type Firstname here" required></td>
						</tr>
						<tr>
						<td>Email Id: <input type="text" name="txtname" value="" placeholder="Type Firstname here" required></td>
						</tr>
						<tr>
						<td>Password: <input type="text" name="txtname" value="" placeholder="Type Firstname here" required></td>
						</tr>
						<tr>
						<td>Dance Type: <input type="text" name="txtname" value="" placeholder="Type Firstname here" required></td>
						</tr>
						<tr>
						<td>Any Awards: <input type="text" name="txtname" value="" placeholder="Type Firstname here" required></td>
						</tr>
						<tr>
							<td><input type="submit" name="add" value="Add"></td>
						</tr>
				</table>
			</form>
				<br>
				<table align="center" border="1" cellspacing="0" width="1000">
					<tr>
					<th>Username</th>
					<th>Gender</th>
					<th>Date Of Birth</th>
					<th>Address</th>
					<th>Mobile No</th>
					<th>Email Id</th>
					<th>Password</th>
					<th>Dance Type</th>
					<th>Any Awards</th>
					<th>Action</th>
					</tr>
					<?php
					
					if(isset($_GET['search'])){
						$query = $_GET['query'];

						$sql = "select * from tbl_chor_reg where username like '%$query%'";

						$result = $conn->query($sql);
						if($result->num_rows > 0){
							while($row1 = $result->fetch_array()){
								$txtname=$row1['username'];
								$rdogender=$row1['gender'];
								$txtdob=$row1['dob'];
								$txtad=$row1['address'];
								$txtmn=$row1['mobile_no'];
								$txtmail=$row1['email_id'];
								$txtpd=$row1['password'];
								$combodance=$row1['dance_type'];
								$txtawards=$row1['any_awards'];
		
						?>
						<tr>
							<td align="center"><?php echo $txtname;?></td>
							<td align="center"><?php echo $rdogender;?></td>
							<td align="center"><?php echo $txtdob;?></td>
							<td align="center"><?php echo $txtad;?></td>
							<td align="center"><?php echo $txtmn;?></td>
							<td align="center"><?php echo $txtmail;?></td>
							<td align="center"><?php echo $txtpd;?></td>
							<td align="center"><?php echo $combodance;?></td>
							<td align="center"><?php echo $txtawards;?></td>
							<td align="center"><a href="editsearch.php?id=<?php echo md5($row['id']);?>">Edit
							</a><a href="deletesearch.php?id=<?php echo md5($row['id']);?>">Delete
							</a></td>
						</tr>
						<?php
					
							}

						}else{
							echo "<center>No records</center>";
						}
					}
				$conn->close();
				?>
				</table>
			</div>
		</div>
		</body>

</html>