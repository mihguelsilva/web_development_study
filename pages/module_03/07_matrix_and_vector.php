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
    <body name="Matrix and Vector|Matrix and Vector|PHP's Matrix and Vectors (arrays)">
        <main>
            <section class='content' id='class'>
		<h2 class='content' id='vector'>Vector</h2>
		<p class='content'>
		    It's a compose variable where we can store more than one value,
		    independently if it's same or different data type
		    value.
		</p>
		<section class='code'>
		    <code>
			<span class='php-base'>&lt;?php</span><br>
			<span class='php-dollar'>$</span><span class='php-var'>numbers</span> = <span class='php-arguments'>array</span>(<span class='php-arguments'>1, 2, 3, 4, 5, 6, 7 ,8, 9, 10</span>);<br/>
			<span class='php-echo'>echo</span> <span class='php-dollar'>$</span><span class='php-var'>numbers</span>[<span class='php-arguments'>0</span>];<br/>
			<span class='php-echo'>echo</span> <span class='php-dollar'>$</span><span class='php-var'>numbers</span>[<span class='php-arguments'>1</span>];<br/>;
			<span class='php-base'>?&gt;</span>
		    </code>
		</section>
		<h3 class='title-sub'>Result</h3>
		<section class='result'>
		    <?php
		    $numbers = array(1,2,3,4,5,6,7,8,9,10);
		    echo $numbers[0];
		    echo "<br/>";
		    echo $numbers[1];
		    ?>
		</section>
		<div class='important'>
		    <p>
			With arrays or vectors, we'll work with variable's positions or indexes.
		    </p>
		</div>
		<p class='content'>
		    We can, also, create an array with a pair key => value.
		</p>
		<section class='code'>
		    <code>
			<span class='php-base'>&lt;?php</span><br>
			<span class='php-dollar'>$</span><span class='php-var'>numbers</span> = <span class='php-arguments'>array</span>(<br/>
&nbsp;&nbsp;<span class='php-string'>"name"</span> =&gt; <span class='php-string'>"Mihguel"</span>,<br/>
&nbsp;&nbsp;<span class='php-string'>"age"</span> =&gt; <span class='php-arguments'>29</span>,<br/>
&nbsp;&nbsp;<span class='php-string'>"sex"</span> =&gt; <span class='php-string'>"M"</span>, <br/>
&nbsp;&nbsp;<span class='php-string'>"aniversary"</span> =&gt; <span class='php-string'>"27/07/1995"</span><br/>
)<br/>
			<span class='php-echo'>echo</span> <span class='php-dollar'>$</span><span class='php-var'>numbers</span>[<span class='php-string'>"name"</span>];<br/>
			<span class='php-echo'>echo</span> <span class='php-dollar'>$</span><span class='php-var'>numbers</span>[<span class='php-string'>"age"</span>];<br/>
			<span class='php-base'>?&gt;</span>
		    </code>
		</section>
		<h3 class='title-sub'>Result</h3>
		<section class='result'>
		    <?php
		    $numbers = array(
			"name" => "Mihguel",
			"age" => 29,
			"aniversary" => "27/07/1995"
		    );
		    echo $numbers["name"];
		    echo "<br/>";
		    echo $numbers["age"];
		    ?>
		</section>
		<div class='important'>
		    <p>
			It's like we were renaming indexes, so unless we work with numbered indexes, we can name all of them.
		    </p>
		</div>
		<div class='important'>
		    <p>
			For arrays with large indexes, it's unusual to declare <mark>echo</mark>
			to each one of the, so we can use a loop structure as <mark>for</mark>
			or <mark>foreach</mark>.
		    </p>
		</div>
		<h3 class='title-sub'>PHP Code</h3>
		<section class='code'>
		    <code>
			<span class='php-base'>&lt;?php</span><br>
			<span class='php-dollar'>$</span><span class='php-var'>numbers</span> = <span class='php-arguments'>array</span>(<span class='php-arguments'>1, 2, 3, 4, 5, 6, 7, 8, 9, 10</span>);<br/>
			<span class='php-arguments'>for</span>(<span class='php-dollar'>$</span><span class='php-var'>a</span> = 0; <span class='php-dollar'>$</span><span class='php-var'>a</span> &lt; <span class='php-function'>count</span>(<span class='php-dollar'>$</span><span class='php-var'>numbers</span>); <span class='php-dollar'>$</span><span class='php-var'>a</span>++) {<br/>
&nbsp;&nbsp;<span class='php-echo'>echo</span> <span class='php-dollar'>$</span><span class='php-var'>numbers</span>[<span class='php-dollar'>$</span><span class='php-var'>a</span>];<br/>
};<br/>
			<span class='php-base'>?&gt;</span>
		    </code>
		</section>
		<h3 class='title-sub'>Result</h3>
		<section class='result'>
		    <?php
		    $numbers = array(1,2,3,4,5,6,7,8,9,10);
		    for ($a = 0; $a < count($numbers); $a++) {
			echo $numbers[$a];
			echo "<br/>";
		    };
		    ?>
		</section>
		<h2 class='content' id='foreach'>foreach</h2>
		<p class='content'>
		    It's a loop structure much more easy and developed to pass through all
		    array's indexes.
		</p>
		<h3 class='title-sub'>PHP Code</h3>
		<section class='code'>
		    <code>
			<span class='php-base'>&lt;?php</span><br>
			<span class='php-dollar'>$</span><span class='php-var'>numbers</span> = <span class='php-arguments'>array</span>(<span class='php-function-parameters'>1,2,3,4,5,6,7,8,9,10</span>);<br/>
			<span class='php-arguments'>foreach</span>(<span class='php-dollar'>$</span><span class='php-var'>numbers</span> as <span class='php-dollar'>$</span><span class='php-var'>n</span>); {<br/>
&nbsp;&nbsp;<span class='php-echo'>echo</span> <span class='php-dollar'>$</span><span class='php-var'>n</span>;<br/>
}<br/>
			<span class='php-base'>?&gt;</span>
		    </code>
		</section>
		<h3 class='title-sub'>Result</h3>
		<section class='result'>
		    <?php
		    $numbers = array(1,2,3,4,5,6,7,8,9,10);
		    foreach($numbers as $n) {
			echo $n;
			echo "<br/>";
		    }
		    ?>
		</section>
		<div class='important'>
		    <p>
			Using <mark>for</mark>, we must define initial and final value to pass
			through all array's indexes. 
		    </p>
		    <br/>
		    <p>
			Using <mark>foreach</mark>, we don't need to define initial and final
			value, as shown in previous example.
		    </p>
		</div>
            </section>
        </main>
    </body>
</html>
