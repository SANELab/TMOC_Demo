<?php
$mysql_host = "163.152.126.96";
$mysql_port = "3306";
$mysql_user = "root";	# ID
$mysql_password = "Qwerty1!";	# PW
$mysql_db = "user_db";			# DB name

$dbconn = mysqli_connect($mysql_host, $mysql_user, $mysql_password, $mysql_db, $mysql_port) or die("DB connect failed.");
?>