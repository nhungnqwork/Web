<?php 

	$mysqli = new mysqli("heroku pg:psql postgresql-acute-06409 --app quynhnhungliving
","root","mysql","web_toy");

	// Check connection
	if ($mysqli->connect_errno) {
	  echo "Kết nối MYSQLi lỗi" . $mysqli->connect_error;
	  exit();
	}

?>
