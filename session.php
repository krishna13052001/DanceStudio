<?php
session_start();

if(!isset($_SESSION['id']) || (trim($_SESSION['id']) == '')){
	header('location:maintenance.php');
	exit();
}

$session_id = $_SESSION['id']; 
// $session_id = $_SESSION['username']; 

?>