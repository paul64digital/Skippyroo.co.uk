<?php 
	$IPAddr = $_SERVER['REMOTE_ADDR'];
	$Referer = $_SERVER['HTTP_REFERER'];
	$Start_URL = 'http://' . $_SERVER['HTTP_HOST'] . dirname($_SERVER['PHP_SELF']);
	$Redirect_URL = $Start_URL;
	
	/*Stop Chinese hackers*/
	if( substr($IPAddr,0,3) == "124" ) {
		$Redirect_URL = 'http://www.www.nicetry-getlost.com';
	}
	elseif( substr($IPAddr,0,3) == "114" ) {
		$Redirect_URL = 'http://www.nicetry-getlost.com';
	}
	
	/*Fiter out validation requests and crawlers*/
	if ($Redirect_URL==$Start_URL) {
		$Redirect_URL = $Start_URL . 'home.php';
		if (substr($_SERVER['HTTP_USER_AGENT'],0,3)=="W3C") {
			mail("paul@skippyroo.co.uk", "W3C validation request", 
				"Site was validated at: " . date("d/m/Y H:i:s") . "\n");
		}
		
		/*Spiders*/
		elseif (!strstr($_SERVER['HTTP_USER_AGENT'],'Ask Jeeves')==false) {
			/*Do Nothing*/
		}
		elseif (!strstr($_SERVER['HTTP_USER_AGENT'],'Yahoo')==false) {
			/*Do Nothing*/
		}
		elseif (!strstr($_SERVER['HTTP_USER_AGENT'],'Twiceler')==false) {
			/*Do Nothing*/
		}
		elseif (!strstr($_SERVER['HTTP_USER_AGENT'],'bot')==false) {
			/*Do Nothing*/
		}
		elseif (!strstr($_SERVER['HTTP_USER_AGENT'],'crawler')==false) {
			/*Do Nothing*/
		}
		
		/*Browsers*/
		elseif (!strstr($_SERVER['HTTP_USER_AGENT'],'Firefox')==false) {
			/*Do Nothing*/
		}
		elseif (!strstr($_SERVER['HTTP_USER_AGENT'],'MSIE')==false) {
			/*Do Nothing*/
		}
		elseif (!strstr($_SERVER['HTTP_USER_AGENT'],'Safari')==false) {
			if (!strstr($_SERVER['HTTP_USER_AGENT'],'Apple')==false) {
				/*iPhone
				mail("paul@skippyroo.co.uk", "Site visited from iPhone", "Date/Time: " . date("d/m/Y H:i:s") . "\n" . 
					"IP Address: " . $IPAddr . "\n" . 
					"Browser: " . $_SERVER['HTTP_USER_AGENT'] );*/
			}
			else {
				/*Safari*/
			}
		}
		
		/*What is it?*/
		else {
			/*Email me the type of visit*/
			if($Referer>"") {
				mail("paul@skippyroo.co.uk", "User found site", "Date/Time: " . date("d/m/Y H:i:s") . "\n" . 
					"IP Address: " . $IPAddr . "\n" . 
					"Browser: " . $_SERVER['HTTP_USER_AGENT'] . "\n" .
					"Referer: '" . $Referer . "'");
			}
			elseif ($_SERVER['HTTP_USER_AGENT']>"") {
				mail("paul@skippyroo.co.uk", "Site re-visited", "Date/Time: " . date("d/m/Y H:i:s") . "\n" . 
					"IP Address: " . $IPAddr . "\n" . 
					"Browser: " . $_SERVER['HTTP_USER_AGENT'] );
			}
			else {
				/*mail("paul@skippyroo.co.uk", "Site re-visited", "Date/Time: " . date("d/m/Y H:i:s") . "\n" . 
					"IP Address: " . $IPAddr . "\n" . 
					"PHP_SELF: " . $_SERVER['PHP_SELF'] . "\n" .
					"argv: " . $_SERVER['argv'] . "\n" .
					"argc: " . $_SERVER['argc'] . "\n" .
					"GATEWAY_INTERFACE: " . $_SERVER['GATEWAY_INTERFACE'] . "\n" .
					"SERVER_ADDR: " . $_SERVER['SERVER_ADDR'] . "\n" .
					"SERVER_NAME: " . $_SERVER['SERVER_NAME'] . "\n" .
					"SERVER_SOFTWARE: " . $_SERVER['SERVER_SOFTWARE'] . "\n" .
					"SERVER_PROTOCOL: " . $_SERVER['SERVER_PROTOCOL'] . "\n" .
					"REQUEST_METHOD: " . $_SERVER['REQUEST_METHOD'] . "\n" .
					"REQUEST_TIME: " . $_SERVER['REQUEST_TIME'] . "\n" .
					"QUERY_STRING: " . $_SERVER['QUERY_STRING'] . "\n" .
					"DOCUMENT_ROOT: " . $_SERVER['DOCUMENT_ROOT'] . "\n" .
					"HTTP_ACCEPT: " . $_SERVER['HTTP_ACCEPT'] . "\n" .
					"HTTP_ACCEPT_CHARSET: " . $_SERVER['HTTP_ACCEPT_CHARSET'] . "\n" .
					"HTTP_ACCEPT_ENCODING: " . $_SERVER['HTTP_ACCEPT_ENCODING'] . "\n" .
					"HTTP_ACCEPT_LANGUAGE: " . $_SERVER['HTTP_ACCEPT_LANGUAGE'] . "\n" .
					"HTTP_CONNECTION: " . $_SERVER['HTTP_CONNECTION'] . "\n" .
					"HTTP_HOST: " . $_SERVER['HTTP_HOST'] . "\n" .
					"HTTP_REFERER: " . $_SERVER['HTTP_REFERER'] . "\n" .
					"HTTP_USER_AGENT: " . $_SERVER['HTTP_USER_AGENT'] . "\n" .
					"HTTPS: " . $_SERVER['HTTPS'] . "\n" .
					"REMOTE_ADDR: " . $_SERVER['REMOTE_ADDR'] . "\n" .
					"REMOTE_HOST: " . $_SERVER['REMOTE_HOST'] . "\n" .
					"REMOTE_PORT: " . $_SERVER['REMOTE_PORT'] . "\n" .
					"SCRIPT_FILENAME: " . $_SERVER['SCRIPT_FILENAME'] . "\n" .
					"SERVER_ADMIN: " . $_SERVER['SERVER_ADMIN'] . "\n" .
					"SERVER_PORT: " . $_SERVER['SERVER_PORT'] . "\n" .
					"SERVER_SIGNATURE: " . $_SERVER['SERVER_SIGNATURE'] . "\n" .
					"PATH_TRANSLATED: " . $_SERVER['PATH_TRANSLATED'] . "\n" .
					"SCRIPT_NAME: " . $_SERVER['SCRIPT_NAME'] . "\n" .
					"REQUEST_URI: " . $_SERVER['REQUEST_URI'] . "\n" .
					"PHP_AUTH_DIGEST: " . $_SERVER['PHP_AUTH_DIGEST'] . "\n" .
					"PHP_AUTH_USER: " . $_SERVER['PHP_AUTH_USER'] . "\n" .
					"PHP_AUTH_PW: " . $_SERVER['PHP_AUTH_PW'] . "\n" .
					"AUTH_TYPE: " . $_SERVER['AUTH_TYPE'] . "\n" .
					"PATH_INFO: " . $_SERVER['PATH_INFO'] . "\n" .
					"ORIG_PATH_INFO: " . $_SERVER['ORIG_PATH_INFO'] . "\n" .
					"PHP_SELF: " . $_SERVER['PHP_SELF']
					);*/
			}
		}
	}
?>

<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml" xml:lang="en" lang="en">
<head>
<meta http-equiv="Content-Type" content="text/html; charset=UTF-8" />
<meta name="title" content="SkippyRoo" />
<meta name="description" content="SkippyRoo" />
<meta name="keywords" content="SkippyRoo, own site, own web-site, own web site, web-site, web site" />
<meta name="author" content="Paul Davis - paul@skippyroo.co.uk" />
<meta http-equiv="Refresh" content="0; URL=<?php echo $Redirect_URL?>" />
<title>SkippyRoo</title>
</head>

<body>
</body>
</html>