<?php 
	//function identifyUserAgent() {
		
		if (substr($_SERVER['HTTP_USER_AGENT'],0,3)=="W3C") {
			$ls_userAgent="W3C";
		}
		elseif (!strstr($_SERVER['HTTP_USER_AGENT'],'Ask Jeeves')==false) {
			$ls_userAgent="Spider - Ask Jeeves";
		}
		elseif (!strstr($_SERVER['HTTP_USER_AGENT'],'Googlebot')==false) {
			$ls_userAgent="Spider - Google";
		}
		elseif (!strstr($_SERVER['HTTP_USER_AGENT'],'Yahoo!')==false) {
			$ls_userAgent="Spider - Yahoo";
		}
		elseif (!strstr($_SERVER['HTTP_USER_AGENT'],'msnbot')==false) {
			$ls_userAgent="Spider - MSN";
		}
		elseif (!strstr($_SERVER['HTTP_USER_AGENT'],'Twiceler')==false) {
			$ls_userAgent="Spider - Twiceler";
		}
		elseif (!strstr($_SERVER['HTTP_USER_AGENT'],'Firefox')==false) {
			$ls_userAgent="Firefox";
		}
		elseif (!strstr($_SERVER['HTTP_USER_AGENT'],'MSIE')==false) {
			$ls_userAgent="Internet Explorer";
		}
		elseif (!strstr($_SERVER['HTTP_USER_AGENT'],'Chrome')==false) {
			$ls_userAgent="Google Chrome";
		}
		elseif (!strstr($_SERVER['HTTP_USER_AGENT'],'iPhone')==false) {
			$ls_userAgent="iPhone Safari";
		}
		elseif (!strstr($_SERVER['HTTP_USER_AGENT'],'Safari')==false) {
			$ls_userAgent="Safari";
		}
		else {
			$ls_userAgent="Unknown";
		
			/*Email me the type of visit*/
			if($Referer=="") {
				mail("paul@skippyroo.co.uk", "Site re-visited", "Date/Time: " . date("d/m/Y H:i:s") . "\n" . 
					"IP Address: " . $IPAddr . "\n" . 
					"Browser: " . $_SERVER['HTTP_USER_AGENT'] );
			}
			else {
				mail("paul@skippyroo.co.uk", "User found site", "Date/Time: " . date("d/m/Y H:i:s") . "\n" . 
					"IP Address: " . $IPAddr . "\n" . 
					"Browser: " . $_SERVER['HTTP_USER_AGENT'] . "\n" .
					"Referer: '" . $Referer . "'");
			}
		}
		
		print $ls_userAgent;
		
		//return $ls_userAgent;
	//}
?>