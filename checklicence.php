<?php
	if(isset($_GET['searchterm'])){
		$searchterm = $_GET['searchterm'];
		$identifier = $_GET['identifier'];
		$IPAddr = $_SERVER['REMOTE_ADDR'];
		
		mail("paul@skippyroo.co.uk", "PDMediaFinder Search", 
			"Identifier: " . $identifier . "\n" . 
			"Browser: " . $IPAddr . "\n" .
			"SearchTerm: '" . $searchterm . "'");
	}
?>
<?php /*echo $searchterm . $identifier . $IPAddr . "\n" .
"version 9"*/ ?>