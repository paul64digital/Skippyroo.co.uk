<?php
	//Start the session
	session_start();
	
	$IPAddr = $_SERVER['REMOTE_ADDR'];
	if( substr($IPAddr,0,3) == "124" ) {
		header("Location: http://www.stopspammingmysite.com");
	}
?>