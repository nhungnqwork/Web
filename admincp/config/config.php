<?php 

	$mysqli = new mysqli("postgres://desoffpbmattvu:4522fe8fc7c51d2419d27c66dfdf33076c2f9e2b8f3a1c452cecb9f8a74c1516@ec2-54-163-254-204.compute-1.amazonaws.com:5432/d1er9npltf36tp
","d1er9npltf36tp","mysql","web_toy");

	// Check connection
	if ($mysqli->connect_errno) {
	  echo "Kết nối MYSQLi lỗi" . $mysqli->connect_error;
	  exit();
	}

?>
