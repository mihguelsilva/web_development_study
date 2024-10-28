<!DOCTYPE html>
<html>
    <head>
	<meta charset="utf-8">
	<title>Result Upload</title>
	<style>
	 body {
	     font-size: 14pt;
	 }
	</style>
    </head>
    <body>
	<?php
	/*
	   if (isset($_FILES['file'])) {
	   $FILE = $_FILES['file'];
	   echo "<pre>";
	   var_dump($FILE);
	   echo "</pre>";
	   echo "<br/><br/><br/>";
	   echo $FILE['name'];
	   echo '<br/><br/><br/>';
	   echo $FILE['tmp_name'];
	   if (!is_dir('images')) {
	   mkdir('images');
	   move_uploaded_file($FILE['tmp_name'], 'images'.DIRECTORY_SEPARATOR.$FILE['name']);
	   } else {
	   move_uploaded_file($FILE['tmp_name'], 'images'.DIRECTORY_SEPARATOR.$FILE['name']);
	   };
	   header('location:/pages/module_03/12_upload.php');
	   };
	 */
	if (isset($_FILES['file'])) {
	    echo "<pre>";
	    print_r($_FILES['file']);
	    echo "</pre>";
	    echo "<br/><br/><br/>";
	    foreach($_FILES['file']['tmp_name'] as $key => $tmp_name) {
		$NAME=$_FILES['file']['name'][$key];
		echo "<div>";
		echo "<div>For name $key is at $NAME</div>";
		echo "<div>For tmp $key is at $tmp_name</div>";
		echo "</div>";
		if (!is_dir('images')) {
		    mkdir('images');
		    move_uploaded_file($tmp_name, 'images' . DIRECTORY_SEPARATOR . "$NAME");
		} else {
		    move_uploaded_file($tmp_name, 'images' . DIRECTORY_SEPARATOR . "$NAME");
		};
	    };
	};
	?>
    </body>
</html>
