<?php
include 'conn.php';
include 'session.php';

if(isset($_POST['add'])){

	$fname = $_POST['fname'];
	$lname = $_POST['lname'];

	$insert = "insert into tbl_chor_reg (username,email_id) values ('$fname','$lname')";
	
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

<html>
	<head>
		<link rel="stylesheet" type="text/css" href="mycss.css">
		<title>
			This is Sample
		</title>
		</head>
	<body bgcolor="green">
		<div id="body">
			<div id="menu">
			<ul>
				<li><a href="home.php">Home</a></li>
				<li><a href="maintenance.php">Maintenance</a></li>
				<li><a href="logout.php">Logout</a></li>
			</ul>
			</div>
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
						<td>Fisrt Name: <input type="text" name="fname" value="" placeholder="Type Firstname here" required></td>
						</tr>
						<tr>
							<td>Last Name: <input type="text" name="lname" placeholder="Type Last Name here.." required></td>
						</tr>
						<tr>
							<td><input type="submit" name="add" value="Add"></td>
						</tr>
				</table>
			</form>
				<br>
				<table align="center" border="1" cellspacing="0" width="500">
					<tr>
					<th>First Name</th>
					<th>Last Name</th>
					<th>Action</th>
					</tr>
					<?php
					$sql = "SELECT * FROM tbl_chor_reg";
					$result = $conn->query($sql);
					if($result->num_rows > 0){
					while($row = $result->fetch_array()){
						?>
						<tr>
							<td align="center"><?php echo $row['username'];?></td>
							<td align="center"><?php echo $row['email_id'];?></td>
							<td align="center"><a href="edit.php?id=<?php echo md5($row['id']);?>">Edit
							</a>/<a href="delete.php?id=<?php echo md5($row['id']);?>">Delete</a></td>
						</tr>
						<?php
							}	
						}else{
							echo "<center><p> No Records</p></center>";
						}
				
				$conn->close();
				?>
				</table>
			</div>
		</div>
		</body>

</html>