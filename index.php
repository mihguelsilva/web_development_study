<!DOCTYPE html>
<html lang="pt-br">
    <head>
	<meta charset="UTF-8">
	<meta name="autho" content="Mihguel Da Silva Santos Tavares De Araujo">
	<meta name="viewport" content="width=device-width, initial-scale=1.0">
	<link rel="stylesheet" href="/styles/default.css">
	<link rel="stylesheet" href="/styles/notebook-default.css">
	<title>Main Page</title>
    </head>
    <body>
	<header id="menu">
	    <section id="logo">
		<header></header>
	    </section>
	    <section id="menu">
		<header id="menu-center" name="menu">
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
				    echo "<nav class='level-two' id='none' style='display:none;'>";
				    echo "<ul class='level-two' style='list-style:none;'>";
				    $subdir = scandir("pages/$dir[$a]");
				    for($b = 0; $b < count($subdir); $b++) {
					if (preg_match("/^(\w+)\.(html|php)$/", $subdir[$b])) {
					    $subtopic = preg_replace("/(\w+)\.(\w+)/i", "$1", $subdir[$b]);
					    $file = "/pages/$dir[$a]/$subdir[$b]";
					    echo "<li class='level-two' name='$subtopic' id='level-two-$subtopic' style='background-color:rgba(1,1,1,.7);'>";
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
		</header>
	    </section>
	    <section id="status"></section>
	</header>
	<main>
	</main>
	<footer>
	</footer>
	<script>
	 let liLevelOne = document.querySelectorAll("li.level-one");
	 liLevelOne.forEach(function(element, index) {
	     element.addEventListener("click", function(e) {
		 let navLevelTwo = e.target.lastElementChild;
		 if (navLevelTwo.style.display == "none") {
		     navLevelTwo.style.display = "block";
		 } else if (navLevelTwo.style.display == "block") {
		     navLevelTwo.style.display = "none";
		 };
	     });
	 });
	 let liLevelTwo = document.querySelectorAll("li.level-two");
	 liLevelTwo.forEach(function(element, index) {
	     element.addEventListener("mouseover", function(e) {
		 e.target.style.backgroundColor = "rgba(255,255,255,.1)";
	     });
	     element.addEventListener("mouseout", function(e) {
		 e.target.style.backgroundColor = "rgba(1,1,1,.0)";
	     });
	 });
	</script>
    </body>
</html>
