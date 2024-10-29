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
	require_once $PERSON;
	$person1 = new Person();
	$person1 -> name = "Mihguel";
	$person1 -> age = 29;
	$person1 -> gender = "male_cisgender";
	$person1 -> race = "white";
	$person1 -> working = false;
	$person1 -> dating = true;
	echo "<pre>";
	print_r($person1);
	echo "</pre>";
	echo $person1 -> greeting() . " Jonas <br><hr>";
	echo $person1 -> offensive() . "<br><hr>";
	echo $person1 -> goodbye();
	?>
    </body>
</html>
