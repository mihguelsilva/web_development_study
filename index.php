<!DOCTYPE html>
<html lang="pt-br">
    <head>
	<meta charset="UTF-8">
	<meta name="autho" content="Mihguel Da Silva Santos Tavares De Araujo">
	<meta name="viewport" content="width=device-width, initial-scale=1.0">
	<link rel='stylesheet' href='/styles/index.css'>
	<link rel='preconnect' href='https://fonts.googleapis.com'>
	<link rel='preconnect' href='https://fonts.gstatic.com' crossorigin>
	<link href='https://fonts.googleapis.com/css2?family=Roboto:ital,wght@0,100;0,300;0,400;0,500;0,700;0,900;1,100;1,300;1,400;1,500;1,700;1,900&display=swap' rel='stylesheet'>
	<link href='https://fonts.googleapis.com/css2?family=Poppins:ital,wght@0,100;0,200;0,300;0,400;0,500;0,600;0,700;0,800;0,900;1,100;1,200;1,300;1,400;1,500;1,600;1,700;1,800;1,900&display=swap' rel='stylesheet'>
	<link href='https://fonts.googleapis.com/css2?family=Black+Han+Sans&display=swap' rel='stylesheet'>
	<link rel="stylesheet" href="https://fonts.googleapis.com/css?family=Audiowide|Sofia|Trirong">
	<link rel='stylesheet' href='https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css'>
	<script src="/js/index.js"></script>
	<title>Main Page</title>
    </head>
    <body id="lightgrey" name="Main Page|Main Page|PHP Course">
	<header id="menu">
	    <section id="logo">
		<header></header>
	    </section>
	    <section id="menu">
		<nav class="level-one">
		    <ul class="level-one" style='list-style:none;'>
			<?php
			$dir = scandir("pages");
			for($a = 0; $a < count($dir); $a++) {
			    if (preg_match("/(\w+)_(\d+)/", $dir[$a])) {
				$replacement = '$1 $2';
				$pattern = "/(\w+)_(\d+)/i";
				$topic = preg_replace($pattern, $replacement, $dir[$a]);
				echo "<li class='level-one' id='level-one-$dir[$a]' name='$dir[$a]'>" . ucfirst($topic);
				echo "<nav class='level-two' id='none' style='display:none;height:0px;'>";
				echo "<ul class='level-two' style='list-style:none;height:0px;'>";
				$subdir = scandir("pages/$dir[$a]");
				for($b = 0; $b < count($subdir); $b++) {
				    if (preg_match("/^(\w+)\.(html|php)$/", $subdir[$b])) {
					$subtopic = preg_replace("/(\w+)\.(\w+)/i", "$1", $subdir[$b]);
					$file = "/pages/$dir[$a]/$subdir[$b]";
					echo "<li class='level-two' name='$subtopic' id='level-two-$subtopic'>";
					echo "<a href='$file' style='display:block;text-decoration:none;color:white;'>" . ucfirst($subtopic) . "</a>";
					echo "</li>";
				    };
				};
				echo "</ul>";
				echo "</nav>";
				echo "</li>";
			    };
			};
			?>
		    </ul>
		</nav>
	    </section>
	    <section id="status"></section>
	</header>
	<main>
	</main>
    </body>
</html>
