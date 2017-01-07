<?php 
	$host ="localhost";
	$user ="root";
	$pass ="";
	$db = "test";
	$con = mysqli_connect($host, $user, $pass, $db);

	if(!$con){
		die("failed".mysqli_connect_error());
	}
	echo "yey";
?>