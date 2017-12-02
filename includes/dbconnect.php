<?php
	//Define the connection params
	$mysql_host = "";
	$mysql_database = "";
	$mysql_user = "";
	$mysql_password = "";
	
	//Connect to the host
	$con = mysql_connect($mysql_host, $mysql_user, $mysql_password);	
	if (!$con) {
		die("Could not connect to host: " . mysql_error() . "<br/>");
	}
	
	//Connect to the database
	$db_selected = mysql_select_db($mysql_database, $con);
	if (!$db_selected) {
		die ("Could not connect to database '" . $mysql_database . "': " . mysql_error()). "<br/>";
	}
?>