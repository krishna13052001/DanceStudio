<?php
	session_start();
	
	if (!isset($_SESSION['id']) ||(trim ($_SESSION['id']) == '')) {
		header('Chor Login.php');
		exit();
	}
	include('connection.php');
	$query=mysqli_query($conn,"select * from tbl_chor_reg where id='".$_SESSION['id']."'");
	$row=mysqli_fetch_assoc($query);
?>
<!DOCTYPE html>
<html>
    <head>
    	<meta charset="utf-8">
<title>Pictures</title>
	<link rel="stylesheet" href="style.css">
	<link rel="stylesheet" href="studentstyle.css">
	<link rel="stylesheet" href="requeststable.css">
	<link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/font-awesome/4.7.0/css/font-awesome.min.css">
<meta charset="utf-8">
<meta name="viewport" content="width=device-width, initial-scale=1">
        <title>Photo Gallery</title>
		
		<style>
*{
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
		img
		{
			width: 100px;
			height: 90px;
		}
		
		th
		{
			font-size: 2em;
			background-color: #f9ddff;
			padding: 20px;
		}
		
		body
		{
			font-family: sans-serif;
			font-size: 1em;
			text-align: center;
			background-color: white;
        }
		
		table
		{
			background-color: white;
			border: 10px;
			width: 60%;
		}
		
		td
		{
			padding: 25px;
		}
		#photos{
			margin-top: 75px;
			margin-left :400px;
			border-style: solid;
			border-color: black;
			width: 615px;
		}
        </style>		
    </head>
    
    <body>
         <div class="header">
<h1><b>Feet To The Beat</b></h1>
<p><?php echo $row['username']; ?></p>
</div>
    </body>
<div class="menu-bar">
	<ul>
	<li><a href="Home Page.php"><i class="fa fa-home"></i>Home</a></li>
	<li><a href="aboutusad.html"><i class="fa fa-user"></i>About Us</a>
		</li>
			<li><a href="students.php"><i class="#"></i>View Students</a></li>
			<li><a href="addrewards.php"><i class="#"></i>Add Rewards</a></li>
			<li class="active"><a href="Pictureschor.php"><i class="fa fa-picture-o"></i>Pictures</a></li>
			<li><a href="logoutchor.php"><i class="fa fa-sign-out"></i>Log Out</a></li>
	</ul>
	</div>
<p>&nbsp;</p>
<p>&nbsp; </p>
<table border="1">
			<thead>
				<th>Image</th>
				<th>Image name</th>
				<th>Date of Image Uploaded</th>
			</thead>
			<tbody>
				<?php
							require'conn.php';
							$query=mysqli_query($conn, "SELECT * FROM `image` ORDER BY `date_uploaded` ASC") or die(mysqli_error());
							while($fetch=mysqli_fetch_array($query)){
						?>
						<tr>
							<td><img src="upload/<?php echo $fetch['image_name']?>" height="80" width="120"/></td>
							<td><?php echo $fetch['image_name']?></td>
							<td><?php echo $fetch['date_uploaded']?></td>
						</tr>
						<?php
					}
				?>
			</tbody>
		</table>