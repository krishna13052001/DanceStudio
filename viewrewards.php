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
<!doctype html>
<html>
<head>
<meta charset="utf-8">
<title>Rewards</title>
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
    input{
        color: aqua;
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
    	    <li><a href="pen_req.php"></i>Status</a></li>
			<li class="active"><a href="viewrewards.php"></i>View Rewards</a></li>
			<li><a href="Picturesstu.php"><i class="fa fa-picture-o"></i>Pictures</a></li>
			<li><a href="logoutstu.php"><i class="fa fa-sign-out"></i>Log Out</a></li>
	</ul>
	</div>
<p>&nbsp;</p>
<p>&nbsp; </p>
	<table border="1">
			<thead>
			    <th>Cherographer Name</th>
				<th>Rewards</th>
				<th>Dance Type</th>
				<th>Date</th>
			</thead>
			<tbody>
				<?php
					include('connection.php');
                    $name=$row['username'];
					$query=mysqli_query($conn,"select * from `add_rewards` where username='$name'");
					while($row=mysqli_fetch_array($query)){
						?>
						<tr>
                            
							<form method="POST">
							<?php 
                                $cname=$row['cname'];
                                $rewards=$row['rewards'];
                                $dance_type=$row['dance_type'];
                                $date=$row['date'];
//                                echo "$username"." hello";
                                ?>
							<?php 
//                                echo "$name"; 
                                ?>
				      		<td><p><?php echo "$cname"; ?></p></td>
				      		<td><p><?php echo "$rewards"; ?></p></td>
				      		<td><p><?php echo "$dance_type"; ?></p></td>
				      		<td><p><?php echo "$date"; ?></p></td>
<!--
                              	<td><input type="text" name="name" value="<?php $row['rewards']; ?>" readonly=""  style="border: 0; background-color:#fafafa ; "></td>
				      	        <td><input type="text" value="<?php $row['dance_type']; ?>"></td>
            					<td><input type="text" value="<?php $row['date']; ?>"></td>
-->
							</form>
						</tr>
						<?php
					}
				?>

			</tbody>
		</table>
</body>
</html>