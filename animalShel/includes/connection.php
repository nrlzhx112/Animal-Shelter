<?php

	$host = "localhost";
	$user = "b032010235";
	$pass = "10626040100";
	$db = "student_b032010235";

 
$conn = new mysqli($host, $user, $pass, $db );

	if($conn->connect_error) {
		echo"cannot connect to the database". $conn->connect_error ;

	}

	echo "connected succesfully";
?>