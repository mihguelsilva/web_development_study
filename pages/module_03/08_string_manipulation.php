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
    <body name="String Manipulation|String Manipulation|PHP's Strings Manipulation">
        <main>
            <section class='content' id='class'>
		<p class='content'>
		    The same way we've got already functions in PHP to manipulate <mark>arrays</mark>, we also got to manipulate string.
		</p>
		<p class='content'>
		    There's a large numbers of functions, however, in this class, we'll show only the 7 more used.
		</p>
		<div class='important'>
		    <p>
			You can check all <a href="https://www.php.net/manual/en/ref.strings.php" target="_blank">PHP's functions to manipulate strings</a>.
		    </p>
		</div>
		<h2 class='content' id='strlen'>strlen()</h2>
		<p class='content'>
		    <mark>str</mark> it's string and <mark>len</mark> it's length, so string length. It's a PHP's function to check length's string.
		</p>
		<h3 class='title-sub'>PHP Code</h3>
		<section class='code'>
		    <code>
			<span class='php-base'>&lt;?php</span><br>
			<span class='php-echo'>echo</span> <span class='php-function'>strlen</span>(<span class='php-string'>"Mihguel"</span>);<br>
			<span class='php-base'>?&gt;</span>
		    </code>
		</section>
		<h3 class='title-sub'>Result</h3>
		<section class='result'>
		    <?php
		    echo "<h3>print_r()</h3>";
		    echo "<pre>";
		    print_r(strlen("Mihguel"));
		    echo "</pre>";
		    echo "<h3>print()</h3>";
		    echo "<pre>";
		    print(strlen("Mihguel"));
		    echo "</pre>";
		    echo "<h3>echo</h3>";
		    echo "<pre>";
		    echo strlen("Mihguel");
		    echo "</pre>";
		    ?>
		</section>
		<h3 class='title-sub'>PHP Code</h3>
		<section class='code'>
		    <code>
			<span class='php-base'>&lt;?php</span><br>
			<span class='php-dollar'>$</span><span class='php-var'>text</span> = <span class='php-string'>"Concatenation"</span>;<br>
			<span class='php-dollar'>$</span><span class='php-var'>length</span> = <span class='php-function'>strlen</span>(<span class='php-dollar'>$</span><span class='php-var'>text</span>);<br>
			<span class='php-echo'>echo</span> <span class='php-string'>"The word <span class='php-dollar'>$</span><span class='php-var'>text</span> has a length of <span class='php-dollar'>$</span><span class='php-var'>length</span>"</span>;<br>
			<span class='php-base'>?&gt;</span>
		    </code>
		</section>
		<h3 class='title-sub'>Result</h3>
		<section class='result'>
		    <?php
		    $text = "Concatenation";
		    $length = strlen($text);
		    echo "The word $text has $length letters";
		    ?>
		</section>
		<div class='important'>
		    <p>
			<mark>strlen()</mark> not only count the letters but also the spaces.
		    </p>
		    <section class='code' style="background-color:rgba(1,1,1,.6);">
			<code>
			    <span class='php-base'>&lt;?php</span><br>
			    <span class='php-dollar'>$</span><span class='php-var'>text</span> = <span class='php-string'>" Concatenation "</span>;<br>
			    <span class='php-dollar'>$</span><span class='php-var'>length</span> = <span class='php-function'>strlen</span>(<span class='php-dollar'>$</span><span class='php-var'>text</span>);<br>
			    <span class='php-echo'>echo</span> <span class='php-string'>"The work <span class='php-dollar'>$</span><span class='php-var'>text</span> has <span class='php-dollar'>$</span><span class='php-var'>length</span> letters"</span>;<br>
			    <span class='php-base'>?&gt;</span>
			</code>
		    </section>
		    <h3 class='title-sub'>Result</h3>
		    <section class='result'>
			<?php
			$text = " Concatenation ";
			$length = strlen($text);
			echo "The work $text has $length letters";
			?>
		    </section>
		</div>
		<h2 class='content' id='strtoupper'>strtoupper()</h2>
		<p class='content'>
		    Changes the string to uppercase or capital letter.
		</p>
		<h3 class='title-sub'>PHP Code</h3>
		<section class='code'>
		    <code>
			<span class='php-base'>&lt;?php</span><br>
			<span class='php-dollar'>$</span><span class='php-var'>name</span> = <span class='php-string'>"mihguel"</span>;<br>
			<span class='php-function'>strtoupper</span>(<span class='php-dollar'>$</span><span class='php-var'>name</span>);<br>
			<span class='php-base'>?&gt;</span>
		    </code>
		</section>
		<h3 class='title-sub'>Result</h3>
		<section class='result'>
		    <?php
		    $name = "mihguel";
		    echo strtoupper($name);
		    ?>
		</section>
		<h2 class='content' id='strtolower'>strtolower()</h2>
		<p class='content'>
		    Changes the string to lowercase or small letter.
		</p>
		<h3 class='title-sub'>Result</h3>
		<h3 class='title-sub'>PHP Code</h3>
		<section class='code'>
		    <code>
			<span class='php-base'>&lt;?php</span><br>
			<span class='php-dollar'>$</span><span class='php-var'>name</span> = <span class='php-string'>"MIHGUEL"</span>;<br>
			<span class='php-function'>strtolower</span>(<span class='php-dollar'>$</span><span class='php-var'>name</span>);<br>
			<span class='php-base'>?&gt;</span>
		    </code>
		</section>
		<section class='result'>
		    <?php
		    $name = "Mihguel";
		    echo strtolower($name);
		    ?>
		</section>
		<h2 class='content' id='substr'>substr()</h2>
		<p class='content'>
		    It takes parte of text or string.
		</p>
		<h3 class='title-sub'>PHP Code</h3>
		<section class='code'>
		    <code>
			<span class='php-base'>&lt;?php</span><br>
			<span class='php-dollar'>$</span><span class='php-var'>text</span> = <span class='php-string'>"Hello Mihguel"</span>;<br>
			<span class='php-dollar'>$</span><span class='php-var'>name</span> = <span class='php-function'>substr</span>(<span class='php-dollar'>$</span><span class='php-var'>text</span>, <span class='php-arguments'>6</span>);<br>
			<span class='php-echo'>echo</span> <span class='php-dollar'>$</span><span class='php-var'>name</span>;<br/>
			<span class='php-base'>?&gt;</span>
		    </code>
		</section>
		<h3 class='title-sub'>Result</h3>
		<section class='result'>
		    <?php
		    $text = "Hello Mihguel";
		    $name = substr($text, 6);
		    echo $name;
		    ?>
		</section>
		<div class='important'>
		    <p>
			<mark>substr()</mark> receives three parameters:
		    </p>
		    <ol class="content">
			<li>The string itself or variable;</li>
			<li>Where it starts to take part of string</li>
			<li>Where it ends or quantity of letters to pick up(optional)</li>
		    </ol>
		</div>
		<div class='important'>
		    <p>
			If a letter contains accentuation, PHP considers it as two letters.
		    </p>
		    <h3 class='title-sub'>PHP Code</h3>
		    <section class='code' style="background-color:rgba(1,1,1,.6);">
			<code>
			    <span class='php-base'>&lt;?php</span><br>
			    <span class='php-dollar'>$</span><span class='php-var'>text</span> = <span class='php-string'>"Olá Mihguel"</span>;<br>
			    <span class='php-dollar'>$</span><span class='php-var'>name</span> = <span class='php-function'>substr</span>(<span class='php-string'>"text"</span>,<span class='php-arguments'>4</span>,<span class='php-arguments'>5</span>);<br>
			    <span class='php-echo'>echo</span> <span class='php-string'>"<span class='php-dollar'>$</span><span class='php-var'>name</span>"</span>;<br>
			    <span class='php-base'>?&gt;</span>
			</code>
		    </section>
		    <h3 class='title-sub'>Result</h3>
		    <section class='result'>
			<?php
			$text = "Olá Mihguel";
			$name = substr($text,4,8);
			echo "$name";
			?>
		    </section>
		</div>
		<h2 class='content' id='str_replce'>str_replace()</h2>
		<p class='content'>
		    It changes an letter or string to another one.
		</p>
		<h4 style="margin-top:20px;font-family:'Audiowide',sans-serif;">Syntax</h4>
		<section class='code'>
		    <code>
			<span class='php-function'>str_replace</span>(<span class='php-arguments'>search</span>,<span class='php-arguments'>replace</span>,<span class='php-arguments'>subject</span>);<br>
		    </code>
		</section>
		<h3 class='title-sub'>PHP Code</h3>
		<section class='code'>
		    <code>
			<span class='php-base'>&lt;?php</span><br>
			<span class='php-dollar'>$</span><span class='php-var'>saudation</span> = <span class='php-string'>"Good morning Mihguel"</span>;<br>
			<span class='php-dollar'>$</span><span class='php-var'>name</span> = <span class='php-function'>str_replace</span>(<span class='php-string'>"Good morning"</span>,<span class='php-string'>"Good night"</span>,<span class='php-dollar'>$</span><span class='php-var'>saudation</span>);<br>
			<span class='php-echo'>echo</span> <span class='php-dollar'>$</span><span class='php-var'>name</span>;<br/>
			<span class='php-base'>?&gt;</span>
		    </code>
		</section>
		<h3 class='title-sub'>Result</h3>
		<section class='result'>
		    <?php
		    $saudation = "Good morning Mihguel";
		    $name = str_replace("Good morning","Good night",$saudation);
		    echo $name;
		    ?>
		</section>
		<h2 class='content' id='explode'>explode()</h2>
		<p class='content'>
		    Convert a string into an array.
		</p>
		<section class='code'>
		    <code>
			<span class='php-function'>explode</span>(<span class='php-arguments'>delimiter</span>,<span class='php-arguments'>string</span>);<br>
		    </code>
		</section>
		<h3 class='title-sub'>PHP Code</h3>
		<section class='code'>
		    <code>
			<span class='php-base'>&lt;?php</span><br>
			<span class='php-dollar'>$</span><span class='php-var'>nameComplete</span> = <span class='php-string'>"Mihguel Da Silva Santos Tavares De Araujo"</span>;<br>
			<span class='php-dollar'>$</span><span class='php-var'>a</span> = <span class='php-function'>explode</span>(<span class='php-string'>" "</span>, <span class='php-dollar'>$</span><span class='php-var'>nameComplete</span>);<br>
			<span class='php-echo'>echo</span> <span class='php-string'>"&lt;pre&gt;"</span>;<br>
			<span class='php-function'>print_r</span>(<span class='php-dollar'>$</span><span class='php-var'>a</span>);<br>
			<span class='php-echo'>echo</span> <span class='php-string'>"&lt;/pre&gt;"</span>;<br>
			<span class='php-base'>?&gt;</span>
		    </code>
		</section>
		<h3 class='title-sub'>Result</h3>
		<section class='result'>
		    <?php
		    $nameComplete = "Mihguel Da Silva Santos Tavares De Araujo";
		    $a = explode(" ", $nameComplete);
		    echo "<pre>";
		    print_r($a);
		    echo "</pre>";
		    ?>
		</section>
		<div class='important'>
		    <p>
			<mark>explode()</mark> has the same goal as <mark>split()</mark> in JS.
		    </p>
		</div>
		<h2 class='content' id='implode'>implode()</h2>
		<p class='content'>
		    Convert an array into an string.
		</p>
		<h3 class='title-sub'>PHP Code</h3>
		<section class='code'>
		    <code>
			<span class='php-base'>&lt;?php</span><br>
			<span class='php-dollar'>$</span><span class='php-var'>obj</span> = <span class='php-function'>array</span>(<span class='php-string'>"Mihguel"</span>,<span class='php-string'>"Da"</span>,<span class='php-string'>"Silva"</span>,<span class='php-string'>"Santos"</span>,<span class='php-string'>"Tavares"</span>,<span class='php-string'>"De"</span>,<span class='php-string'>"Araujo"</span>);<br>
			<span class='php-dollar'>$</span><span class='php-var'>myString</span> = <span class='php-function'>implode</span>(<span class='php-string'>" "</span>, <span class='php-dollar'>$</span><span class='php-var'>obj</span>);<br>
<span class='php-echo'>echo</span> <span class='php-dollar'>$</span><span class='php-var'>myString</span>;<br/>
<span class='php-base'>?&gt;</span>
		    </code>
		</section>
		<h3 class='title-sub'>Result</h3>
		<section class='result'>
		    <?php
		    $obj = array("Mihguel","Da","Silva","Santos","Tavares","De","Araujo");
		    $myString = implode(" ", $obj);
		    echo $myString;
		    ?>
		</section>
            </section>
        </main>
    </body>
</html>
