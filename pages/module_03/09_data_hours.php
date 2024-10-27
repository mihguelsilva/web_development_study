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
    <body name="Data and Hour|Data and Hour|Manipulating Data and Hour in PHP">
        <main>
            <section class='content' id='class'>
		<h2 class='content' id='timestamp'>Timestamp</h2>
		<p class='content'>
		    Data and hour in PHP is worked uppon <mark>timestamp</mark>, which is the seconds since 01/01/1970. Through the count of seconds from this date, we can manipulate every date we want to.
		</p>
		<h2 class='content' id='time'>time()</h2>
		<p class='content'>
		    It's the function on which we get date from in PHP.
		</p>
		<h3 class='title-sub'>PHP Code</h3>
		<section class='code'>
		    <code>
			<span class='php-base'>&lt;?php</span><br>
			<span class='php-echo'>echo</span> <span class='php-function'>time</span>();<br>
			<span class='php-base'>?&gt;</span>
		    </code>
		</section>
		<h3 class='title-sub'>Result</h3>
		<section class='result'>
		    <?php
		    echo time();
		    ?>
		</section>
		<div class='important'>
		    <p>
			As we can see in the previous example, <mark>time()</mark> PHP's function returned the seconds since 01/01/1970.
		    </p>
		</div>
		<h2 class='content' id='date'>date()</h2>
		<p class='content'>
		    This PHP's function returns actual date.
		</p>
		<h3 class='title-sub'>PHP Code</h3>
		<section class='code'>
		    <code>
			<span class='php-base'>&lt;?php</span><br>
			<span class='php-echo'>echo</span> <span class='php-function'>date</span>(<span class='php-string'>"d/m/Y"</span>);<br>
			<span class='php-base'>?&gt;</span>
		    </code>
		</section>
		<h3 class='title-sub'>Result</h3>
		<section class='result'>
		    <?php
		    echo date("d/m/Y");
		    ?>
		</section>
		<h3 class='title-sub'>PHP Code</h3>
		<section class='code'>
		    <code>
			<span class='php-base'>&lt;?php</span><br>
			<span class='php-echo'>echo</span> <span class='php-function'>date</span>(<span class='php-string'>"D, M, y"</span>);<br>
			<span class='php-base'>?&gt;</span>
		    </code>
		</section>
		<h3 class='title-sub'>Result</h3>
		<section class='result'>
		    <?php
		    echo date("D, M, y");
		    ?>
		</section>
		<h3 class='title-sub'>PHP Code</h3>
		<section class='code'>
		    <code>
			<span class='php-base'>&lt;?php</span><br>
			<span class='php-echo'>echo</span> <span class='php-function'>date</span>(<span class='php-string'>"l, d/m/Y"</span>);<br>
			<span class='php-base'>?&gt;</span>
		    </code>
		</section>
		<h3 class='title-sub'>Result</h3>
		<section class='result'>
		    <?php
		    echo date("l, d/m/Y");
		    ?>
		</section>
		<div class='important'>
		    <p>
			We can check in <a href="https://www.php.net/manual/en/function.date.php" target="_blank">PHP's official documentation</a> about function's dates.
		    </p>
		</div>
		<h3 class='title-sub'>Result</h3>
		<section class='result'>
		    <?php
		    echo date('l,d/m/Y', 1234567899);
		    ?>
		</section>
		<h2 class='content' id='strtotime'>strtotime()</h2>
		<p class='content'>
		    It's a function that converts an date into timestamp. It follows Year/month/day.
		</p>
		<h3 class='title-sub'>PHP Code</h3>
		<section class='code'>
		    <code>
			<span class='php-base'>&lt;?php</span><br>
			<span class='php-dollar'>$</span><span class='php-var'>time</span> = <span class='php-function'>strtotime</span>(<span class='php-string'>"1995/27/07"</span>);<br>
			<span class='php-echo'>echo</span> <span class='php-function'>date</span>(<span class='php-string'>"l, d/m/Y"</span>, <span class='php-dollar'>$</span><span class='php-var'>time</span>);<br>
			<span class='php-base'>?&gt;</span>
		    </code>
		</section>
		<h3 class='title-sub'>Result</h3>
		<section class='result'>
		    <?php
		    $time = strtotime("1995/07/27");
		    echo date('l, d/m/Y', $time);
		    ?>
		</section>
		<h3 class='title-sub'>PHP Code</h3>
		<section class='code'>
		    <code>
			<span class='php-base'>&lt;?php</span><br>
			<span class='php-dollar'>$</span><span class='php-var'>time</span> = <span class='php-function'>strtotime</span>(<span class='php-string'>"1995/07/27 +1day"</span>);<br>
			<span class='php-echo'>echo</span> <span class='php-function'>date</span>(<span class='php-string'>"l, d/m/Y"</span>, <span class='php-dollar'>$</span><span class='php-var'>time</span>);<br>
			<span class='php-base'>?&gt;</span>
		    </code>
		</section>
		<h3 class='title-sub'>Result</h3>
		<section class='result'>
		    <?php
		    $time = strtotime("1995/07/27 +1day");
		    echo date("l, d/m/Y", $time);
		    ?>
		</section>
		<h3 class='title-sub'>PHP Code</h3>
		<section class='code'>
		    <code>
			<span class='php-base'>&lt;?php</span><br>
			<span class='php-dollar'>$</span><span class='php-var'>time</span> = <span class='php-function'>strtotime</span>(<span class='php-string'>"1995/07/27 +1week"</span>);<br>
			<span class='php-echo'>echo</span> <span class='php-function'>date</span>(<span class='php-string'>"l, d/m/Y"</span>, <span class='php-dollar'>$</span><span class='php-var'>time</span>);<br>
			<span class='php-base'>?&gt;</span>
		    </code>
		</section>
		<h3 class='title-sub'>Result</h3>
		<section class='result'>
		    <?php
		    $time = strtotime("1995/07/27 + 1week");
		    echo date('l, d/m/Y', $time);
		    ?>
		</section>
		<h3 class='title-sub'>PHP Code</h3>
		<section class='code'>
		    <code>
			<span class='php-base'>&lt;?php</span><br>
			<span class='php-dollar'>$</span><span class='php-var'>time</span> = <span class='php-function'>strtotime</span>(<span class='php-string'>"1995/07/27 +1month"</span>);<br>
			<span class='php-echo'>echo</span> <span class='php-function'>date</span>(<span class='php-string'>"l, d/m/Y"</span>, <span class='php-dollar'>$</span><span class='php-var'>time</span>);<br>
			<span class='php-base'>?&gt;</span>
		    </code>
		</section>
		<h3 class='title-sub'>Result</h3>
		<section class='result'>
		    <?php
		    $time = strtotime("1995/07/27 +1month");
		    echo date("l, d/m/Y", $time);
		    ?>
		</section>
		<h3 class='title-sub'>PHP Code</h3>
		<section class='code'>
		    <code>
			<span class='php-base'>&lt;?php</span><br>
			<span class='php-dollar'>$</span><span class='php-var'>time</span> = <span class='php-function'>strtotime</span>(<span class='php-string'>"1995/07/27 +1year"</span>);<br>
			<span class='php-echo'>echo</span> <span class='php-function'>date</span>(<span class='php-string'>"l, d/m/Y"</span>, <span class='php-dollar'>$</span><span class='php-var'>time</span>);<br>
			<span class='php-base'>?&gt;</span>
		    </code>
		</section>
		<h3 class='title-sub'>Result</h3>
		<section class='result'>
		    <?php
		    $time = strtotime("1995/07/27 +1year");
		    echo date("l, d/m/Y", $time);
		    ?>
		</section>
		<h2 class='content' id='datetime'>DateTime()</h2>
		<p class='content'>
		    It's another way to work with dates in PHP. We need to instantiate the <mark>DateTime()</mark> class.
		</p>
		<h3 class='title-sub'>PHP Code</h3>
		<section class='code'>
		    <code>
			<span class='php-base'>&lt;?php</span><br>
			<span class='php-comments'>// here we instantiate the class DateTime()</span><br/>
			<span class='php-dollar'>$</span><span class='php-var'>d</span> = <span class='php-arguments'>new</span> <span class='php-function'>DateTime</span>();<br>
			<span class='php-comments'>// now, we're going to access the method's class</span><br/>
			<span class='php-echo'>echo</span> <span class='php-dollar'>$</span><span class='php-var'>d</span> -&gt; <span class='php-function'>format</span>(<span class='php-string'>"d/m/Y"</span>);<br>
			<span class='php-base'>?&gt;</span>
		    </code>
		</section>
		<h3 class='title-sub'>Result</h3>
		<section class='result'>
		    <?php
		    // here we instantiate the class DateTime()
		    $d = new DateTime();
		    // now, we're going to access the method's class
		    echo $d -> format("d/m/Y");
		    ?>
		</section>
		<h3 class='title-sub'>PHP Code</h3>
		<section class='code'>
		    <code>
			<span class='php-base'>&lt;?php</span><br>
			<span class='php-comments'>// here we instantiate the class DateTime()</span><br/>
			<span class='php-dollar'>$</span><span class='php-var'>d</span> = <span class='php-arguments'>new</span> <span class='php-function'>DateTime</span>();<br>
			<span class='php-comments'>// now, we're going to access the method's class</span><br/>
			<span class='php-echo'>echo</span> <span class='php-dollar'>$</span><span class='php-var'>d</span> -&gt; <span class='php-function'>format</span>(<span class='php-string'>"H:i:s d/m/Y"</span>);<br>
			<span class='php-base'>?&gt;</span>
		    </code>
		</section>
		<h3 class='title-sub'>Result</h3>
		<section class='result'>
		    <?php
		    // here we instantiate the class DateTime()
		    $d = new DateTime();
		    // now, we're going to access the method's class
		    echo $d -> format("H:i:s d/m/Y");
		    ?>
		</section>
		<div class='important'>
		    <p>
			The date and hour are catch from server. If our site it's stored in China, then it's return the China's date.
		    </p>
		</div>
            </section>
        </main>
    </body>
</html>
