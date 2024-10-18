<!DOCTYPE html>
<html lang='pt-br'>
    <head>
	<meta charset='utf-8'>
	<meta name='viewport' content='width=device-width, initial-scale=1.0'>
	<title></title>
	<link rel='stylesheet' href='/styles/index.css'>
	<link rel='preconnect' href='https://fonts.googleapis.com'>
	<link rel='preconnect' href='https://fonts.gstatic.com' crossorigin>
	<link href='https://fonts.googleapis.com/css2?family=Roboto:ital,wght@0,100;0,300;0,400;0,500;0,700;0,900;1,100;1,300;1,400;1,500;1,700;1,900&display=swap' rel='stylesheet'>
	<link href='https://fonts.googleapis.com/css2?family=Poppins:ital,wght@0,100;0,200;0,300;0,400;0,500;0,600;0,700;0,800;0,900;1,100;1,200;1,300;1,400;1,500;1,600;1,700;1,800;1,900&display=swap' rel='stylesheet'>
	<link href='https://fonts.googleapis.com/css2?family=Black+Han+Sans&display=swap' rel='stylesheet'>
	<link rel='stylesheet' href='https://fonts.googleapis.com/css?family=Audiowide|Sofia|Trirong'>
	<link rel='stylesheet' href='https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css'>
	<script src='/js/index.js'></script>
    </head>
    <body name='Exercises|Exercises|Practicing PHP'>
        <main>
            <section class='content' id='class' style="position:relative;">
		<h2 class='content' id='looping-1'>Looping 1</h2>
		<p class='content'>
		    Create an algorithm that return's every number from 0 to 200 divisible per 3.
		</p>
		<h3 class="title-sub">PHP Code</h3>
		<section class='code'>
		    <code>
			<span class='php-base'>&lt;?php</span><br>
			<span class='php-dollar'>$</span><span class='php-var'>module</span> = <span class='php-arguments'>3</span>;<br/>
			<span class='php-dollar'>$</span><span class='php-var'>counter</span> = <span class='php-arguments'>$module</span>;<br/>
			<span class='php-methods'>while</span>(<span class='php-arguments'>$counter <= 200</span>) {<br/>
&nbsp;&nbsp;<span class='php-dollar'>$</span><span class='php-var'>verify</span> = <span class='php-arguments'>$counter % $module</span>;<br/>
&nbsp;&nbsp;<span class='php-methods'>if</span> (<span class='php-arguments'>$verify == 0</span>) {<br/>
&nbsp;&nbsp;&nbsp;&nbsp;<span class='php-echo'>echo</span> <span class='php-string'>"&lt;pre&gt;$counter it's divisible per &lt;b&gt;$module&lt;/b&gt;&lt;/pre&gt;&lt;br&gt;"</span>;<br>
&nbsp;&nbsp;}<br/>
}<br/>
			<span class='php-base'>?&gt;</span>
		    </code>
		</section>
		<h3 class='title-sub'>Result</h3>
		<button class="show">Show Result</button>
		<div class="hide">
		    <section class='result'>
			<?php
			// looping
			$module = 3;
			$counter = $module;
			while ($counter <= 200) {
			    $verify = $counter % $module;
			    if ($verify == 0) {
				echo "<pre>$counter it's divisible per <b>$module</b></pre><br>";
			    };
			    $counter++;
			};
			?>
		    </section>
		</div>
		<h2 class="content" id="looping-2">Looping 2</h2>
		<p class='content'>
		    Write multiplication table between 1 and 10.
		</p>
		<h3 class='title-sub'>Result</h3>
		<button class="show">Show Result</button>
		<div class="hide" style="height:1100px;">
		    <section class='result' style='position: absolute;transform:translate(-50%,0%);left:50%;width:90%;'>
			<?php
			$base = 1;
			while($base <= 10) {
			    $mult = 1;
			    echo "<div style='padding:4%;border-radius:50px;float:left;'>";
			    while($mult <= 10) {
				$operation = $base * $mult;
				echo "$base x $mult = $operation <br>";
				$mult++;
			    };
			    echo "</div>";
			    $base++;
			};
			?>
		    </section>
		</div>
            </section>
        </main>
    </body>
</html>
