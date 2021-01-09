	<?php
	session_start();

	if (!isset($_SESSION['id']) ||(trim ($_SESSION['id']) == '')) {
		header('Stu Login.php');
		exit();
	}
	include('connection.php');
	$query=mysqli_query($conn,"select * from tbl_chor_reg where id='".$_SESSION['id']."'");
	$row=mysqli_fetch_assoc($query);

?>
<!doctype html>
<html>
<head>
<meta charset="utf-8">
<title>View Students</title>
	<link rel="stylesheet" href="westernstyle.css">
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
<p><?php echo $row['username']; ?></p>
</div>
</head>
<body>
<div class="menu-bar">
	<ul>
	<li><a href="Home Page.php"><i class="fa fa-home"></i>Home</a></li>
	<li><a href="aboutusad.html"><i class="fa fa-user"></i>About Us</a>
		</li>
			<li><a href="students.php"><i class="#"></i>View Students</a></li>
			<li><a href="addrewards.php"><i class="#"></i>Add Rewards</a></li>
			<li><a href="Pictureschor.php"><i class="fa fa-picture-o"></i>Pictures</a></li>
			<li><a href="logoutchor.php"><i class="fa fa-sign-out"></i>Log Out</a></li>
	</ul>
	</div>

<table border="1">
			<thead>
				<th>Username</th>
				<th>Gender</th>
				<th>Dance Type</th>
			</thead>
			<tbody>
				<?php
					include('connection.php');
                    $name=$row['username'];
					$query=mysqli_query($conn,"select * from `request` where status='Accepted' and username='$name'");
					while($row=mysqli_fetch_array($query)){
						?>
						<tr>

							<form method="POST">

				      			<td><input type="text" name="name" value="<?php echo $row['student_name']; ?>" readonly=""  style="border: 0; background-color:#fafafa ; "></td>
								<td><?php echo $row['gender']; ?></td>
								<td><input type="text" name="dance_type" readonly="" value="<?php echo $row['dance_type']; ?>" style="border: 0; background-color:#fafafa ;"></td>
<!--								<td><?php echo $row['any_awards']; ?></td>	-->
							</form>
						</tr>
						<?php
					}
				?>

			</tbody>
		</table>
<p>&nbsp;</p>
<p>&nbsp; </p>

</body>
</html>
