<?php
	$conn = mysqli_connect("localhost", "root", "", "db_danweb");
	
	if(!$conn){
		die("Error: Failed to connect to database!");
	}
?>