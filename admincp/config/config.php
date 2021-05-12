<?php 

	$mysqli = new mysqli("sql6.freesqldatabase.com","sql6411964","HK8sUN5DUt","sql6411964");

	// Check connection
	if ($mysqli->connect_errno) {
	  echo "Kết nối MYSQLi lỗi" . $mysqli->connect_error;
	  exit();
	}

?>
