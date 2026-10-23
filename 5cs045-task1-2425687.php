<?php 

	$mysqli = new mysqli("localhost", "db2425687", "ManUnited123#", "db2425687");

	if ($mysqli -> connect_errno) {
	  die("Failed to connect to MySQL: ".$mysqli -> connect_error);
	  exit();
	}
	
	echo ("Connection successful");
?>