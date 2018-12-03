<?php

	$servername = "den1.mysql3.gear.host";
	$username = "accountit";
	$password = "Ru8tmg~976-i";
	$dbname = "accountit";

    $conn = mysqli_connect($servername, $username, $password, $dbname);
	
	if($conn->connect_error){
		die("Connection faild: " . $con->connect_error);
	}
?>
