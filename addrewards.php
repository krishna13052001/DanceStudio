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
<!doctype html>
<html>
<head>
<meta charset="utf-8">
<title>Rewards</title>
	<link rel="stylesheet" href="choreographersstyle.css">
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
#text{
  border: 3px solid blue;
}
.sub {
	width: 50%;
	align-self: center;
	background-color: orange;
	padding: 5px;
	margin-bottom: 10px;
}
    table{
        width:90%;
    }
</style>
</head>
<body>
<div class="header">
<h1><b>Feet To The Beat</b></h1>
<p><?php
    $cname =$row['username'];
    echo $row['username']; ?></p>
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
<p>&nbsp;</p>
<p>&nbsp; </p>
<table border="1">
      <thead>
        <th>Student Name</th>
        <th>Dance Type</th>
        <th>Rewards</th>
        <th>Date</th>
        <th></th>
      </thead>
      <tbody>
        <?php
          include('connection.php');
          $name=$row['username'];
          $query=mysqli_query($conn,"select * from `request` where status='Accepted' and username='$name'");
          while($row=mysqli_fetch_array($query)){
            ?>
            <tr>
             
              <form action="addrewards.php" method="POST">
              <!-- <form action="stu_addrewards.php" method="post"> -->
                <td><input type="text" name="name" value="<?php echo $row['student_name']; ?>" readonly=""  style="border: 0; background-color:#fafafa ; "></td>
                <td><input type="text" name="dance_type" readonly="" value="<?php echo $row['dance_type']; ?>" style="border: 0; background-color:#fafafa ;"></td>
                <td>  <input id="text" type="number" name="Rewards" value=""></td>
                <td><input id="text" type="date" name="date"></td>
                <td><input class="sub" type="submit" name="submit" value="submit"></td>
              </form>
            </tr>
            <?php
          }
        ?>
      </tbody>
    </table>
</body>
</html>
<?php
include_once("function.php");
$insertdata=new DB_con();
if(isset($_POST['submit']))
{
  $sname=$_POST['name'];
  $dance_type=$_POST['dance_type'];
  $rewards=$_POST['Rewards'];
  echo $row['student_name'];
  $date=$_POST['date'];

  $sql=$insertdata->add_rewards($sname,$cname,$dance_type,$rewards,$date);
if($sql)
{
  // echo "<script>alert("$sname")</script>";
  echo "<script>alert('Added Rewards Success');</script>";
}
else
{
  echo "<script>alert('Rewards Not Sent');</script>";
}
}

?>
