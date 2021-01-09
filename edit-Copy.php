<?php
  include('connection.php');
  $id=$_GET['id'];
  $query=mysqli_query($conn,"select * from `tbl_chor_reg` where id='$id'");
  $row=mysqli_fetch_array($query);
?>
<!doctype html>
<html>
<head>
<meta charset="utf-8">
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
</style>
</head>
<body> 
<div class="header">
<h1><b>DANCE STUDIO</b></h1>
</div>
</head>
<body>
<div class="menu-bar">
  <ul>
  <li><a href="Home Page.php"><i class="fa fa-home"></i>Home</a></li>
  <li><a href="aboutus.html"><i class="fa fa-user"></i>About Us</a>
    </li>
  <li><a href="#"><i class="fa fa-sign-in"></i>Sign In</a>
    <div class="sub-menu-1">
      <ul>
      <li class="hover-me"><a href="#">Choregrapher</a><i class="fa fa-angle-right"></i>
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
  <li class="active"><a href="admined.php">Edit & Delete</a></li>
    </li>
    <li><a href="admined.php"><i class="fa fa-long-arrow-left"></i>Back</a>
    </li>
  </ul>
  </div>
<p>&nbsp;</p>
<p>&nbsp; </p>
<div class="box">
  <form method="POST" action="update.php?id=<?php echo $id; ?>" align=center>
  <h2>Edit &amp; Delete</h2>
    <div class="inputBox">
    <label>Username:</label><input type="text" value="<?php echo $row['username']; ?>" name="txtname"></div>
    <p class="gender">
    <label>Gender:</label><input type="text" value="<?php echo $row['gender']; ?>" name="rdogender"></p>
    <p>
    <label>DOB:</label><input type="text" value="<?php echo $row['dob']; ?>" name="txtdob"></p>
    <div class="inputBox">
    <label>Address:</label><input type="text" value="<?php echo $row['address']; ?>" name="txtad"></div>
    <div class="inputBox">
    <label>Mobile No:</label><input type="text" value="<?php echo $row['mobile_no']; ?>" name="txtmn"></div>
    <div class="inputBox">
    <label>Email Id:</label><input type="text" value="<?php echo $row['email_id']; ?>" name="txtmail"></div>
    <div class="inputBox">
    <label>Password:</label><input type="text" value="<?php echo $row['password']; ?>" name="txtpd"></div>
    <div class="inputBox">
    <label>Dance Type:</label><input type="text" value="<?php echo $row['dance_type']; ?>" name="combodance"></div>
    <div class="inputBox">
    <label>Any Awards:</label><input type="text" value="<?php echo $row['any_awards']; ?>" name="txtawards"></div>
    <br>
    <input type="submit" name="submit">
    <a href="admined.php">Back</a>
  </form>
</div>
</body>
</html>