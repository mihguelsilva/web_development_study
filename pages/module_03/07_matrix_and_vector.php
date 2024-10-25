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
		<div class='danger'>
		    <p>
			If we try to see array's contents with <mark>echo</mark> command without
			manipulation, it will return an error, once <mark>echo</mark> just print's
			strings.
		    </p>
		</div>
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
		<h2 class='content' id='print_r'>print_r()</h2>
		<p class='content'>
		    Prints all content's inside an array.
		</p>
		<h3 class='title-sub'>PHP Code</h3>
		<section class='code'>
		    <code>
			<span class='php-base'>&lt;?php</span><br>
			<span class='php-dollar'>$</span><span class='php-var'>numbers</span> = <span class='php-function'>array</span>(<span class='php-arguments'>1,2,3,4,5,6,7,8,9,10</span>);<br>
			<span class='php-echo'>echo</span> <span class='php-string'>"&lt;pre&gt;"</span>;<br/>
			<span class='php-function'>print_r</span>(<span class='php-dollar'>$</span><span class='php-var'>numbers</span>);<br>
			<span class='php-echo'>echo</span> <span class='php-string'>"&lt;/pre&gt;"</span>;<br/>
			<span class='php-echo'>echo</span> <span class='php-string'>"&lt;br&gt;"</span>;<br/>
			<span class='php-echo'>echo</span> <span class='php-string'>"&lt;pre&gt;"</span>;<br/>
			<span class='php-function'>var_dump</span>(<span class='php-dollar'>$</span><span class='php-var'>numbers</span>);<br>
			<span class='php-echo'>echo</span> <span class='php-string'>"&lt;/pre&gt;"</span>;<br/>
			<span class='php-base'>?&gt;</span>
		    </code>
		</section>
		<h3 class='title-sub'>Result</h3>
		<section class='result'>
		    <?php
		    $numbers = array(1,2,3,4,5,6,7,8,9,10);
		    echo "<pre>";
		    print_r($numbers);
		    echo "</pre>";
		    print("<br/>");
		    print("<pre>");
		    var_dump($numbers);
		    print("</pre>");
		    ?>
		</section>
		<div class='important'>
		    <p>
			<mark>print_r</mark> must be used only in development process. It's not
			used in production environment.
		    </p>
		</div>
		<h2 class='content' id='add-elements-in-array'>Add Elements in Array</h2>
		<p class='content'>
		    We can add a element into an array defining it into a specific position:
		</p>
		<h3 class='title-sub'>PHP Code</h3>
		<section class='code'>
		    <code>
			<span class='php-base'>&lt;?php</span><br>
			<span class='php-dollar'>$</span><span class='php-var'>obj</span> = <span class='php-arguments'>array</span>(<span class='php-arguments'>1,2,3,4,5,6</span>);<br/>
			<span class='php-echo'>echo</span> <span class='php-string'>"&lt;h2&gt;Before adding a element into the array&lt;/h2&gt;"</span>;<br/>
			<span class='php-echo'>echo</span> <span class='php-string'>"&lt;pre&gt;"</span>;<br/>
			<span class='php-function'>print_r</span>(<span class='php-dollar'>$</span><span class='php-var'>obj</span>);<br>
			<span class='php-echo'>echo</span> <span class='php-string'>"&lt;/pre&gt;"</span>;<br/>
			<span class='php-echo'>echo</span> <span class='php-string'>"&lt;h2&gt;Adding an element into the array&lt;/h2&gt;"</span>;<br/>
			<span class='php-echo'>echo</span> <span class='php-string'>"&lt;pre&gt;"</span>;<br/>
			<span class='php-dollar'>$</span><span class='php-var'>obj</span>[<span class='php-arguments'>6</span>] = <span class='php-arguments'>200</span>;<br/>
			<span class='php-function'>print_r</span>(<span class='php-dollar'>$</span><span class='php-var'>obj</span>);<br>
			<span class='php-echo'>echo</span> <span class='php-string'>"&lt;/pre&gt;"</span>;<br/>
			<span class='php-base'>?&gt;</span>
		    </code>
		</section>
		<h3 class='title-sub'>Result</h3>
		<section class='result'>
		    <?php
		    $obj = array(1,2,3,4,5,6);
		    echo "<h2>Before adding a element into the array</h2>";
		    echo "<pre>";
		    print_r($obj);
		    echo "</pre>";
		    echo "<h2>Adding an element into the array</h2>";
		    echo "<pre>";
		    $obj[6] = 200;
		    print_r($obj);
		    echo "</pre>";
		    ?>
		</section>
		<p class='content'>
		    Another way to do this it's declaring an empty dash <mark>[]</mark> and
		    assigning a value corresponding to the array. This value will be defined
		    in the last index.
		</p>
		<h3 class='title-sub'>PHP Code</h3>
		<section class='code'>
		    <code>
			<span class='php-base'>&lt;?php</span><br>
			<span class='php-dollar'>$</span><span class='php-var'>obj</span> = <span class='php-arguments'>array</span>(<span class='php-arguments'>1,2,3,4,5,6</span>);<br/>
			<span class='php-echo'>echo</span> <span class='php-string'>"&lt;h2&gt;Before adding a element into the array&lt;/h2&gt;"</span>;<br/>
			<span class='php-echo'>echo</span> <span class='php-string'>"&lt;pre&gt;"</span>;<br/>
			<span class='php-function'>print_r</span>(<span class='php-dollar'>$</span><span class='php-var'>obj</span>);<br>
			<span class='php-echo'>echo</span> <span class='php-string'>"&lt;/pre&gt;"</span>;<br/>
			<span class='php-echo'>echo</span> <span class='php-string'>"&lt;h2&gt;Adding an element into the array&lt;/h2&gt;"</span>;<br/>
			<span class='php-echo'>echo</span> <span class='php-string'>"&lt;pre&gt;"</span>;<br/>
			<span class='php-dollar'>$</span><span class='php-var'>obj</span>[<span class='php-arguments'>6</span>] = <span class='php-arguments'>200</span>;<br/>
			<span class='php-function'>print_r</span>(<span class='php-dollar'>$</span><span class='php-var'>obj</span>);<br>
			<span class='php-echo'>echo</span> <span class='php-string'>"&lt;/pre&gt;"</span>;<br/>
			<span class='php-echo'>echo</span> <span class='php-string'>"&lt;h2&gt;Assigning a new value in array&lt;/h2&gt;"</span>;<br>
			<span class='php-dollar'>$</span><span class='php-var'>obj</span>[] = <span class='php-arguments'>1092</span>;<br/>
			<span class='php-echo'>echo</span> <span class='php-string'>"&lt;pre&gt;"</span>;<br>
			<span class='php-function'>print_r</span>(<span class='php-dollar'>$</span><span class='php-var'>obj</span>);<br>
			<span class='php-echo'>echo</span> <span class='php-string'>"&lt;/pre&gt;"</span>;<br>
			<span class='php-base'>?&gt;</span>
		    </code>
		</section>
		<h3 class='title-sub'>Result</h3>
		<section class='result'>
		    <?php
		    $obj = array(1,2,3,4,5,6);
		    echo "<h2>Before adding a element into the array</h2>";
		    echo "<pre>";
		    print_r($obj);
		    echo "</pre>";
		    echo "<h2>Adding an element into the array</h2>";
		    echo "<pre>";
		    $obj[6] = 200;
		    print_r($obj);
		    echo "</pre>";
		    echo "<h2>Assigning a new value in array</h2>";
		    $obj[] = 1092;
		    echo "<pre>";
		    print_r($obj);
		    echo "</pre>";
		    ?>
		</section>
		<h2 class='content' id='array_push'>array_push()</h2>
		<p class='content'>
		    It's a PHP's native function that inserts new values into an array.
		</p>
		<div class='important'>
		    <p>
			We can pass one or more values into an array.
		    </p>
		</div>
		<h3 class='title-sub'>PHP Code</h3>
		<section class='code'>
		    <code>
			<span class='php-base'>&lt;?php</span><br>
			<span class='php-dollar'>$</span><span class='php-var'>obj</span> = <span class='php-function'>array</span>(<span class='php-arguments'>1,2,3,4,5</span>);<br>
			<span class='php-function'>array_push</span>(<span class='php-dollar'>$</span><span class='php-var'>obj</span>, <span class='php-arguments'>325, 1024, 912, 445, 912, 25</span>);<br>
			<span class='php-echo'>echo</span> <span class='php-string'>"&lt;pre&gt;"</span>;<br>
			<span class='php-function'>print_r</span>(<span class='php-dollar'>$</span><span class='php-var'>obj</span>);<br>
			<span class='php-echo'>echo</span> <span class='php-string'>"&lt;/pre&gt;"</span>;<br>
			<span class='php-base'>?&gt;</span>
		    </code>
		</section>
		<h3 class='title-sub'>Result</h3>
		<section class='result'>
		    <?php
		    $obj = array(1,2,3,4,5);
		    array_push($obj, 325, 1024, 912, 445, 912, 25);
		    echo "<pre>";
		    print_r($obj);
		    echo "</pre>";
		    ?>
		</section>
		<div class='important'>
		    <p>
			We can mix data types into an array.
		    </p>
		</div>
		<h3 class='title-sub'>PHP Code</h3>
		<section class='code'>
		    <code>
			<span class='php-base'>&lt;?php</span><br>
			<span class='php-dollar'>$</span><span class='php-var'>obj</span> = <span class='php-function'>array</span>(<span class='php-arguments'>2</span>, <span class='php-string'>"Mihguel"</span>, <span class='php-arguments'>true</span>);<br>
			<span class='php-function'>array_push</span>(<span class='php-dollar'>$</span><span class='php-var'>obj</span>, <span class='php-arguments'>25</span>, <span class='php-string'>"Amara"</span>, <span class='php-arguments'>false</span>);<br>
			<span class='php-echo'>echo</span> <span class='php-string'>"&lt;pre&gt;"</span>;<br>
			<span class='php-function'>print_r</span>(<span class='php-dollar'>$</span><span class='php-var'>obj</span>);<br>
			<span class='php-echo'>echo</span> <span class='php-string'>"&lt;/pre&gt;"</span>;<br>
			<span class='php-base'>?&gt;</span>
		    </code>
		</section>
		<h3 class='title-sub'>Result</h3>
		<section class='result'>
		    <?php
		    $obj = array(2, "Mihguel", true);
		    array_push($obj, 25, "Amara", false);
		    echo "<pre>";
		    print_r($obj);
		    echo "</pre>";
		    ?>
		</section>
		<div class='important'>
		    <p>
			In PHP, <mark>true</mark> returns 1 and <mark>false</mark> returns
			empty value.
		    </p>
		</div>
		<p class='content'>
		    Let's pass through all indexes with <mark>foreach</mark>.
		</p>
		<h3 class='title-sub'>PHP Code</h3>
		<section class='code'>
		    <code>
			<span class='php-base'>&lt;?php</span><br>
			<span class='php-dollar'>$</span><span class='php-var'>numbers</span> = <span class='php-function'>array</span>(<span class='php-arguments'>50</span>,<span class='php-string'>"text"</span>,<span class='php-arguments'>true</span>,<span class='php-arguments'>9.5</span>);<br>
			<span class='php-function'>foreach</span>(<span class='php-dollar'>$</span><span class='php-var'>numbers</span> as <span class='php-dollar'>$</span><span class='php-var'>n</span>){<br/>
&nbsp;&nbsp;<span class='php-echo'>echo</span> <span class='php-string'>"<span class='php-dollar'>$</span><span class='php-var'>n</span> &lt;br&gt;"</span>;<br>
};<br>
			<span class='php-base'>?&gt;</span>
		    </code>
		</section>
		<h3 class='title-sub'>Result</h3>
		<section class='result'>
		    <?php
		    $numbers = array(50, "text", true, 9.5);
		    foreach($numbers as $n) {
			echo "$n <br>";
		    };
		    ?>
		</section>
		<p class='content'>
		    The result showed in the previous example it's the same as follows:
		</p>
		<h3 class='title-sub'>PHP Code</h3>
		<section class='code'>
		    <code>
			<span class='php-base'>&lt;?php</span><br>
			<span class='php-dollar'>$</span><span class='php-var'>obj</span> = <span class='php-function'>array</span>(<span class='php-arguments'>0</span> => <span class='php-arguments'>50</span>, <span class='php-arguments'>1</span> => <span class='php-string'>"text"</span>, <span class='php-arguments'>2</span> => <span class='php-arguments'>true</span>, <span class='php-arguments'>3</span> => <span class='php-arguments'>9.5</span>);<br>
			<span class='php-function'>foreach</span>(<span class='php-dollar'>$</span><span class='php-var'>obj</span> as <span class='php-dollar'>$</span><span class='php-var'>n</span>){<br/>
&nbsp;&nbsp;<span class='php-echo'>echo</span> <span class='php-string'>"<span class='php-dollar'>$</span><span class='php-var'>n</span> &lt;br&gt;"</span>;<br>
};<br>
			<span class='php-base'>?&gt;</span>
		    </code>
		</section>
		<h3 class='title-sub'>Result</h3>
		<section class='result'>
		    <?php
		    $obj = array(0 => 50, 1 => "text", 2 => true, 3 => 9.5);
		    echo "<pre>";
		    var_dump($obj);
		    echo "</pre>";
		    echo "<br/><br/><br/>";
		    foreach($obj as $n) {
			echo "$n <br/>";
		    };
		    ?>
		</section>
		<p class='content'>
		    As we can see, nothing changed. It worked because we defined, manually, the indexes and the values corresponding to them. However, when working with arrays, this is set automatically.
		</p>
		<h3 class='title-sub'>PHP Code</h3>
		<section class='code'>
		    <code>
			<span class='php-base'>&lt;?php</span><br>
			<span class='php-dollar'>$</span><span class='php-var'>obj</span> = <span class='php-function'>array</span>(<span class='php-string'>"name"</span> => <span class='php-string'>"Mihguel"</span>, <span class='php-string'>"age"</span> => <span class='php-arguments'>29</span>, <span class='php-string'>"gender"</span> => <span class='php-string'>"male_cisgender"</span>, <span class='php-string'>"working"</span> => <span class='php-arguments'>false</span>);<br>
			<span class='php-echo'>echo</span> <span class='php-string'>"&lt;h3&lt;print_r()&lt;/h3&gt;"</span>;<br>
			<span class='php-echo'>echo</span> <span class='php-string'>"&lt;pre&gt;"</span>;<br>
			<span class='php-function'>print_r</span>(<span class='php-dollar'>$</span><span class='php-var'>obj</span>);<br>
			<span class='php-echo'>echo</span> <span class='php-string'>"&lt;/pre&gt;"</span>;<br>
			<span class='php-echo'>echo</span> <span class='php-string'>"&lt;h3&gt;var_dump()&lt;/h3&gt;"</span>;<br>
			<span class='php-echo'>echo</span> <span class='php-string'>"&lt;pre&gt;"</span>;<br>
			<span class='php-function'>var_dump</span>(<span class='php-dollar'>$</span><span class='php-var'>obj</span>);<br>
			<span class='php-echo'>echo</span> <span class='php-string'>"&lt;/pre&gt;"</span>;<br>
			<span class='php-base'>?&gt;</span>
		    </code>
		</section>
		<h3 class='title-sub'>Result</h3>
		<section class='result'>
		    <?php
		    $obj = array("name" => "Mihguel", "age" => 29, "gender" => "male_cisgender", "working" => false);
		    echo "<h3<print_r()</h3>";
		    echo "<pre>";
		    print_r($obj);
		    echo "</pre>";
		    echo "<h3>var_dump()</h3>";
		    echo "<pre>";
		    var_dump($obj);
		    echo "</pre>";
		    ?>
		</section>
		<p class='content'>
		    Let's use <mark>foreach</mark>, assigning an variable as key and other as value, then we can manipulate both keys and values.
		</p>
		<h3 class='title-sub'>PHP Code</h3>
		<section class='code'>
		    <code>
			<span class='php-base'>&lt;?php</span><br>
			<span class='php-dollar'>$</span><span class='php-var'>obj</span> = <span class='php-function'>array</span>(<span class='php-string'>"name"</span> => <span class='php-string'>"Mihguel"</span>, <span class='php-string'>"age"</span> => <span class='php-arguments'>29</span>, <span class='php-string'>"gender"</span> => <span class='php-string'>"male_cisgender"</span>, <span class='php-string'>"working"</span> => <span class='php-arguments'>false</span>);<br>
			<span class='php-echo'>echo</span> <span class='php-string'>"&lt;h3&lt;print_r()&lt;/h3&gt;"</span>;<br>
			<span class='php-echo'>echo</span> <span class='php-string'>"&lt;pre&gt;"</span>;<br>
			<span class='php-function'>print_r</span>(<span class='php-dollar'>$</span><span class='php-var'>obj</span>);<br>
			<span class='php-echo'>echo</span> <span class='php-string'>"&lt;/pre&gt;"</span>;<br>
			<span class='php-echo'>echo</span> <span class='php-string'>"&lt;h3&gt;var_dump()&lt;/h3&gt;"</span>;<br>
			<span class='php-echo'>echo</span> <span class='php-string'>"&lt;pre&gt;"</span>;<br>
			<span class='php-function'>var_dump</span>(<span class='php-dollar'>$</span><span class='php-var'>obj</span>);<br>
			<span class='php-echo'>echo</span> <span class='php-string'>"&lt;/pre&gt;"</span>;<br>
			<span class='php-function'>foreach</span>(<span class='php-dollar'>$</span><span class='php-var'>obj</span> as <span class='php-dollar'>$</span><span class='php-var'>index</span> => <span class='php-dollar'>$</span><span class='php-var'>data</span>) {<br>
&nbsp;&nbsp;<span class='php-echo'>echo</span> <span class='php-string'>"<span class='php-dollar'>$</span><span class='php-var'>index</span> : <span class='php-dollar'>$</span><span class='php-var'>data</span> &lt;br&gt;"</span>;<br>
}<br/>
			<span class='php-base'>?&gt;</span>
		    </code>
		</section>
		<h3 class='title-sub'>Result</h3>
		<section class='result'>
		    <?php
		    $obj = array("name" => "Mihguel", "age" => 29, "gender" => "male_cisgender", "working" => false);
		    echo "<h3<print_r()</h3>";
		    echo "<pre>";
		    print_r($obj);
		    echo "</pre>";
		    echo "<h3>var_dump()</h3>";
		    echo "<pre>";
		    var_dump($obj);
		    echo "</pre>";
		    echo "<h3>foreach()</h3>";
		    foreach($obj as $index => $data) {
			echo "$index : $data <br>";
		    }
		    ?>
		</section>
		<h2 class='content' id='functions_for_array'>Functions for Arrays</h2>
		<p class='content'>
		    There is a greate number of native functions to manipulate arrays in PHP. We can check it, in another moment, at the official documentation.
		</p>
		<p class='content'>
		    If we need a function to manipulate arrays, we don't need to create one, because, probably, that function already exists. We just have to search it, and PHP's documentation expose them easily for us.
		</p>
		<div class='important'>
		    <p>
			Search for <a href="https://www.php.net/manual/en/ref.array.php" target="_blank">arrays functions to manipulate</a>.
		    </p>
		</div>
		<h2 class='content' id='matrix'>Matrix</h2>
		<p class='content'>
		    Diferently from <mark>array</mark>, an <mark>matrix</mark> got two or more dimensions.
		</p>
		<p class='content'>
		    An <mark>array</mark> have a line, on which there's an amount of values.
		</p>
		<table class="table-dnm" title="array" name="0#1#2#3#4|11#15#20#8#50"></table>
		<p class='content'>
		    An <mark>matrix</mark> will have both lines and columns.
		</p>
		<table class="table-dnm" title="matrix" name=" #0#1#2#3#4|0#11#15#20#8#50|1#28#85#12#9#10|2#14#48#10#85#1"></table>
		<p class='content'>
		    In many others proggraming languages, the manner which we apply values into an matrix it's different as we do in PHP.
		</p>
		<div class='important'>
		    <p>
			Sometimes it's known that PHP doesn't have matrix, because it's an <mark>array</mark> inside another one.
		    </p>
		</div>
		<h3 class='title-sub'>PHP Code</h3>
		<section class='code'>
		    <code>
			<span class='php-base'>&lt;?php</span><br>
			<span class='php-dollar'>$</span><span class='php-var'>numbers</span> = <span class='php-function'>array</span>(<br/>
&nbsp;&nbsp;			<span class='php-function'>array</span>(<span class='php-arguments'>11,15,20,8,50</span>),<br>
&nbsp;&nbsp;			<span class='php-function'>array</span>(<span class='php-arguments'>28,85,12,9,10</span>),<br>
&nbsp;&nbsp;			<span class='php-function'>array</span>(<span class='php-arguments'>14,48,10,85,1</span>)<br>
);<br>
			<span class='php-echo'>echo</span> <span class='php-dollar'>$</span><span class='php-var'>numbers</span>[<span class='php-arguments'>0</span>][<span class='php-arguments'>1</span>];<br/>
			<span class='php-base'>?&gt;</span>
		    </code>
		</section>
		<h3 class='title-sub'>Result</h3>
		<section class='result'>
		    <?php
		    $numbers = array(
			array(11,15,20,8,50),
			array(28,85,12,9,10),
			array(14,48,10,85,1)
		    );
		    echo "<h3>Returning an individual value from matrix</h3>";
		    echo $numbers[0][1];
		    echo "<h3>print_r()</h3>";
		    echo "<pre>";
		    print_r($numbers);
		    echo "</pre>";
		    echo "<h3>var_dump()</h3>";
		    echo "<pre>";
		    var_dump($numbers);
		    echo "</pre>";
		    ?>
		</section>
		<div class='danger'>
		    <p>
			It's possible to create an matrix with different width, however, there's greate chances to return errors.
		    </p>
		</div>
		<p class='content'>
		    Let's practice a little bit:
		</p>
		<h3 class='title-sub'>Practicing</h3>
		<section class='result'>
		    <?php
		    echo "<h2>Let's create an Matrix here</h2>";
		    echo "<table class='table-dnm' title='persons' name='#name#age#gender#is_working#is_studying#is_dating#partner|mihguel#Mihguel#29#male_cisgender#false#true#true#amara|amara#Amara#23#female_transgender#false#true#true#mihguel'></table>";
		    $persons = array(
			"mihguel" => array(
			    "name"=> "Mihguel",
			    "age"=> 29,
			    "gender"=> "male_cisgender",
			    "is_working"=> false,
			    "is_studying"=> true,
			    "is_dating"=> true,
			    "partner"=> "amara"
			),
			"amara" => array(
			    "name"=> "Amara",
			    "age"=> 23,
			    "gender"=> "female_transgender",
			    "is_working"=> false,
			    "is_studying"=> true,
			    "is_dating"=> true,
			    "partner"=> "mihguel"
			),
		    );
		    echo "<pre>";
		    print_r($persons);
		    echo "</pre>";
		    echo "<h4>Let's check Mihguel's partner data</h4>";
		    echo "<pre>";
		    print_r($persons[$persons["mihguel"]["partner"]]);
		    echo "</pre>";
		    echo "<h4>Let's check Amara's partner data</h4>";
		    echo "<pre>";
		    print_r($persons[$persons["amara"]["partner"]]);
		    echo "</pre>";
		    ?>
		</section>
            </section>
        </main>
    </body>
</html>
