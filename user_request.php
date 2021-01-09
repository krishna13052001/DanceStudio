<!DOCTYPE html>
<html>
<head>
<meta charset="utf-8">
<title>Requests</title>
	<link rel="stylesheet" href="style.css">
	<link rel="stylesheet" href="requeststable.css">
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
		<li><a href="logoutsearch.php"><i class="fa fa-sign-out"></i>Logout</a></li>
	</ul>
	</div>
<p>&nbsp;</p>
<p>&nbsp; </p>
	<table border="1">
			<thead>
				<th>Username</th>
				<th>Gender</th>
				<th>Address</th>
				<th>Mobile No</th>
				<th>Email Id</th>
				<th></th>
			</thead>
			<tbody>
				<?php
					include('connection.php');
					$query=mysqli_query($conn,"select * from `request`");
					while($row=mysqli_fetch_array($query)){
						?>
						<tr>
						    <td><?php echo $row['username']; ?></td>
							<td><?php echo $row['gender']; ?></td>
							<td><?php echo $row['address']; ?></td>
							<td><?php echo $row['mobile_no']; ?></td>
							<td><?php echo $row['email_id']; ?></td>
							<td>
								<!-- <button><a href="edit1.php?id=<?php echo $row['id']; ?>">Edit</a></button> -->
								<!-- <button><a href="delete1.php?id=<?php echo $row['id']; ?>">Delete</a></button> -->
								<form>
									<input type="submit" name="submit" action="edit1.php?id=<?php echo $row['id']; ?>">
									<input type="submit" name="submit" action="delete1.php?id=<?php echo $row['id']; ?>">
								</form>
							</td>
						</tr>
						<?php
					}
				?>
			</tbody>
		</table>
	</body>
</html>