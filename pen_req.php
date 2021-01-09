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

<html>
<head>
<meta charset="utf-8">
<title>View Status</title>
	<link rel="stylesheet" href="choreographersstyle.css">
	<link rel="stylesheet" href="studentstyle.css">
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
			<li><a href="Choreographers.php"><i class="#"></i>View Choreographers</a></li>
    	    <li class="active"><a href="pen_req.php"></i>Status</a></li>
			<li><a href="viewrewards.php"></i>View Rewards</a></li>
			<li><a href="Picturesstu.php"><i class="fa fa-picture-o"></i>Pictures</a></li>
			<li><a href="logoutstu.php"><i class="fa fa-sign-out"></i>Log Out</a></li>
	</ul>
	</div>
<p>&nbsp;</p>
<p>&nbsp; </p>
	<table border="1">
			<thead>
				<th>Username</th>
                <th>Gender</th>
				<th>Dance Type</th>
				<th>status</th>
			</thead>
			<tbody>
				<?php
					include('connection.php');
                    $name=$row['username'];
//                $query=mysqli_query($conn,"select * from tbl_stu_reg where id='".$_SESSION['id']."'");
//	           $row=mysqli_fetch_assoc($query);
					$query1=mysqli_query($conn,"select Distinct * from `request` where student_name='$name'");
//                    $row1=mysqli_fetch_assoc($query1);
					while($row1=mysqli_fetch_array($query1)){
                        ?>
						<tr>	
				      			<td><input type="text" name="name" value="<?php echo $row1['username']; ?>" readonly=""  style="border: 0; background-color:#fafafa ; "></td>
								<td ><input type="text" name="gen" value="<?php echo $row1['gender']; ?>" readonly="" style="border: 0; backgrounf-color:#fafafa; "></td>
								<td><input type="text" name="dance_type" readonly="" value="<?php echo $row1['dance_type']; ?>" style="border: 0; background-color:#fafafa ;"></td>	
								<td><input type="text" name="status" readonly="" value="<?php echo $row1['status']; ?>" style="border: 0; background-color:#fafafa ;"></td>
						</tr>
						<?php
                        
					}
				?>
			</tbody>
		</table>
</body>
</html>