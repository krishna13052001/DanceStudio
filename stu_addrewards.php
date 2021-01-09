<?php
include_once("function.php");
$insertdata=new DB_con();
if(isset($_POST['submit']))
{
  $sname=$row['student_name'];
  $dance_type=$row['dance_type'];
  $rewards=$row['Rewards'];
  echo $row['student_name'];
}
?>
