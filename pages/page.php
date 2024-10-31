<!DOCTYPE html>
<html>
    <head>
	<meta charset="utf-8">
	<title>Classes</title>
    </head>
    <body>
	<?php
	$_DIR = $_SERVER['DOCUMENT_ROOT'];
	$PERSON =  $_DIR . DIRECTORY_SEPARATOR . "data" . DIRECTORY_SEPARATOR . "person.php";
	$DEVICE = $_DIR . DIRECTORY_SEPARATOR . "data" . DIRECTORY_SEPARATOR . "device.php";
	require_once $PERSON;
	require_once $DEVICE;
	$device1 = new Device("tplink", "02105234857481", "01:02:fa:f5:b8:ac", true, true, true);
	$device1->enable_ipv6("2001:db8:cade:f000::/56", false, false, true);
	$device1->enable_tr069("10.100.200.1", 7547, "acs", "acs");
	echo "<pre style='font-size:12pt;'>";
	print_r($device1);
	echo "</pre>";
	?>
    </body>
</html>
