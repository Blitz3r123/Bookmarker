<?php
	$link = mysqli_connect("localhost", "root", "1234", "islamunited");

	if ($link === false){
		die("ERROR: Could not connect to databse. " . mysqli_connect_error());
	}
?>