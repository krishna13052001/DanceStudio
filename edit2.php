<?php
  include('connection.php');
  $id=$_GET['id'];
  $query=mysqli_query($conn,"select * from `tbl_stu_reg` where id='$id'");
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
    table,h2{
        padding-left: 40%;
        padding-top: 30px;
    }
</style>
</head>
<body> 
<div class="header">
<h1><b>DANCE STUDIO</b></h1>
<?php
          include('connection.php');
          $query=mysqli_query($conn,"select * from `tbl_admin_login`");
          while($row=mysqli_fetch_array($query)){
            ?>
            <tr>
                <td><?php echo $row['fullname']; ?></td>
            </tr>
            <?php
          }
        ?>
</div>
<div class="menu-bar">
  <ul>
  <li><a href="Home Page.php"><i class="fa fa-home"></i>Home</a></li>
  <li><a href="requestaboutus.php"><i class="fa fa-user"></i>About Us</a>
    </li>
  <!-- <li><a href="#"><i class="fa fa-sign-in"></i>Sign In</a>
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
    </li> -->
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
    <!-- <li><a href="success.php"><i class="fa fa-long-arrow-left"></i>Back</a>
    </li> -->
    <li><a href="logout.php"><i class="fa fa-sign-out"></i>Logout</a>
  </ul>
  </div>
<p>&nbsp;</p>
<p>&nbsp; </p>
<table>
<div class="box">
  
      <form method="POST" action="update2.php?id=<?php echo $id; ?>" align=center>
      <?php 
          $query=mysqli_query($conn,"select * from request where id='".$_GET['id']."'");
          $row=mysqli_fetch_assoc($query);  
        ?>
  <table>
  <thead>
      <h2>Edit &amp; Delete</h2>
   </thead>
   <tbody>
    <div class="inputBox">
        <tr>
            <td><label>Student Name</label></td>
            <td style="padding-left:2px;"><input type="text" value="<?php echo $row['student_name']; ?>" name="student_name" disabled></td>
        </tr>
    </div>
    <div class="inputBox">
        <tr>
            <td><label>Username</label></td>
            <td style="padding-left:2px;"><input type="text" value="<?php echo $row['username']; ?>" name="txtname" disabled></td>
        </tr>
    </div>
    <p class="gender">
        <tr>
            <td><label>Gender</label></td>
            <td style="padding-left:2px;"><input type="text" value="<?php echo $row['gender']; ?>" name="rdogender" disabled></td>
        </tr>
    </p>
    <div class="inputBox">
        <tr>
            <td ><label>Dance Type</label></td>
            <td style="padding-left:2px;"><input type="text" value="<?php echo $row['dance_type']; ?>" name="combodance" disabled></td>
        </tr>
    </div>
    <div class="inputBox">
        <tr>
            <td><label>Status</label></td>
            <td><select <input type="text" value="<?php echo $row['status']; ?>" name="txtstatus" id="select">
            <option>Pending</option>
            <option>Accepted</option>
            </select></td>
        </tr>
    </div>
    <br>
    <tr>
        <td></td>
        <td><input type="submit" name="submit">
        <button onclick="window.location.href='requests.php';">Back</button></td>
    </tr>    
    </tbody>
    </table>
  </form>
  
</div>
</table>
</body>
</html>