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
	<link rel='stylesheet' href='https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css'>
	<script src='/js/index.js'></script>
    </head>
    <body name="Variables|Variables|PHP variables, variable's types and operators">
	<main>
	    <section class="content" id="class">
		<h2 class="content" id="variable">Variable</h2>
		<p class="content">
		    Variables are little piece of memory of a computer. Variables have types. We we store a value
		    into an variable, we are storing too it variable's type.
		</p>
		<p class="content">
		    In this class, we will cover only simple variables, on which we can only store one value.
		    Despite the existence of compose variables, on which we can store multiple values, which
		    are called <mark>arrays</mark>, this subject will be covered soon.
		</p>
		<div class='important'>
		    <p>
			Despite the possibility to only store one variable's type into a simple variable,
			we can store multiple variable's type into a compose variable, which is an advanced
			PHP's syntax.
		    </p>
		</div>
		<h2 class="content" id="variables-type">Variables Type</h2>
		<table class="table-dnm" name="Type#Meaning#Example|Boolean#Represents two possible states: TRUE or FALSE#$x = true;|Resource#The special resource type is not an actual data type. It is the storing of a reference to functions and resources external to PHP#database call|Object#Is a template for objects and an object is an instance of a class#Not now|NULL#Null is a special data type which can have only one value: NULL#$var;|Float#Is a number with a decimal point or a number in exponential form#$x = 10.365;|Integer#Is a non-decimal number#$x = 10;|String#Is a sequence of characters like 'Hello world!'#$x = 'Hello World';|Array#Stores multiple values in one single variable#$door = array('wood', 'iron');" title="Data Types"></table>
		<table class="table-dnm" name="Type#Data Type|Basic#Integer, Float, String, Boolean|Compose#Array, Object"></table>
		<h2 class="content" id="declare-variables">Declare Variables</h2>
		<section class='code'>
		    <code>
$nameVariable = // that's correct<br>
!nameVariable = // that's incorrect<br>
$_nameVariable = // that's incorrect<br>
$name_variable = // that's correct<br>
$nameVarible = // camel Case, always better
		    </code>
		</section>
		<p class="content">
		    Variable's PHP always start with a dollar sign <mark>$</mark>.
		</p>
		<div class='danger'>
		    <p>
			Every PHP's command and variables must finish with semicolon <mark>(;)</mark>,
			otherwise, it will crush.
		    </p>
		</div>
		<div class='important'>
		    <p>
			It's not necessary to declare the variable's data type to declare a PHP's variable.
		    </p>
		</div>
		<h2 class="content" id="input-and-output-data">Input and Output Data</h2>
		<p class="content">
		    To output data on PHP, we must use <mark>echo</mark> command.
		</p>
		<h3 class="title-sub">PHP Code</h3>
		<section class='code'>
		    <code>
			<span class='php-base'>&lt;?php</span><br>
			<span class='php-echo'>echo</span> <span class='php-string'>"Hello World!"</span>;<br>
			<span class='php-base'>?&gt;</span>
		    </code>
		</section>
		<section class="result">
		    <h3 class="title-sub">Result</h3>
		    <?php
		    echo "Hello World!";
		    ?>
		</section>
		<div class='important'>
		    <p>
			Although extension file is <mark>.php</mark>, you can mix HTML5, CSS3, JS and PHP code.
		    </p>
		</div>
		<section class='code'>
		    <code>
&lt;!DOCTYPE html&gt;<br>
&lt;html&gt;<br>
			<span class='php-base'>&lt;?php</span><br>
			<span class='php-echo'>echo</span> <span class='php-string'>"&lt;head&gt;"</span>;<br>
			<span class='php-echo'>echo</span> <span class='php-string'>"&lt;meta charset='utf-8'&gt;"</span>;<br>
			<span class='php-echo'>echo</span> <span class='php-string'>"&lt;title&gt;My Page&lt;/title&gt;"</span>;<br>
			<span class='php-echo'>echo</span> <span class='php-string'>"&lt;/head&gt;"</span>;<br>
			<span class='php-echo'>echo</span> <span class='php-string'>"&lt;body&gt;"</span>;<br>
			<span class='php-echo'>echo</span> <span class='php-string'>"&lt;p&gt;Hello World!&lt;/p&gt;"</span>;<br>
			<span class='php-echo'>echo</span> <span class='php-string'>"&lt;/body&gt;"</span>;<br>
			<span class='php-base'>?&gt;</span><br>
&lt;/html&gt;
		    </code>
		</section>
		<p class="content">
		    When echo is declared with double quotes, it's possible to mix variables in it, concatenating,
		    however, with single quotes, it will not concatenated, altough, you must enter a dot and then
		    the variable to concatenate it.
		</p>
		<h3 class="title-sub">PHP Code</h3>
		<section class='code'>
		    <code>
			<span class='php-base'>&lt;?php</span><br>
			<span class='php-dollar'>$</span><span class='php-var'>name</span> =  <span class='php-string'>"Mihguel"</span>;<br>
			<span class='php-dollar'>$</span><span class='php-var'>surname</span> = <span class='php-string'>"Da Silva"</span>;<br>
			<span class='php-echo'>echo</span> <span class='php-string'>"&lt;p class='content'&gt;"</span>;<br>
			<span class='php-echo'>echo</span> <span class='php-string'>"My name is $name $surname"</span>;<br>
			<span class='php-echo'>echo</span> <span class='php-string'>"&lt;/p&gt;"</span>;<br>
			<span class='php-echo'>echo</span> <span class='php-string'>"&lt;p class='content'&gt;"</span>;<br>
			<span class='php-echo'>echo</span> <span class='php-string'>'My name is '</span> . <span class='php-dollar'>$</span><span class='php-var'>name</span> . <span class='php-string'>" "</span> . <span class='php-dollar'>$</span><span class='php-var'>surname</span>;<br>
			<span class='php-echo'>echo</span> <span class='php-string'>"&lt;/p&gt;"</span>;<br>
			<span class='php-base'>?&gt;</span>
		    </code>
		</section>
		<section class="result">
		    <h3 class="title-sub">Result</h3>
		    <?php
		    $name = "Mihguel";
		    $surname = "Da Silva";
		    echo "<p class='content'>";
		    echo "My name is $name $surname";
		    echo "</p>";
		    echo "<p class='content'>";
		    echo 'My name is ' . $name . " " . $surname;
		    echo "</p>";
		    ?>
		</section>
		<div class='danger'>
		    <p>
			In PHP, as in many proggraming languages, first, we must declare the variable and then
			we can call it. If you call the variable before declaring it or just call the variable
			without declaring it, probably it won't work.
		    </p>
		</div>
		<h2 class="content" id="operators">Operators</h2>
		<p class='content'>
		    Now, we're going to check PHP's operators and some functions.
		</p>
		<table class="table-dnm" title="Arithmetic" name="Name#Operators|+#Sum|-#Subtraction|*#Multiplication|/#Division"></table>
		<table class="table-dnm" title="Comparison" name="Name#Operators#Example|&lt;#Less then#(a < b) means that a is less than b|&gt;#More then#(a > b) means a is more than b|==#Equal#(a == b) means that a is equal than b, however, it not comparer data type, only the value|===#Identical#(a === b) means that a is identical than b, includind data value, however, if a is a string and b is a integer, then, a is not identical than b|&lt;=#Less than or equal to#(a <= b) means that a is less or equal to b|&gt;=#More than or equal to#(a >= b) means that a is more than or equal to b|!=#Different#(a != b) means that a is not qual to b|!===#Not identical#(a !=== b) means that a is not identical to b, similar to identical example"></table>
		<h2 class="content" id="var_dump">var_dump()</h2>
		<p class='content'>
		    A função ou método <mark>var_dump()</mark> retorna o tipo de dado passado como parâmetro.
		</p>
		<h3 class="title-sub">PHP Code</h3>
		<section class='code'>
		    <code>
			<span class='php-base'>&lt;?php</span><br>
			<span class='php-methods'>var_dump</span>(<span class='php-arguments'>3 &gt; 4</span>);<br/>
			<span class='php-base'>?&gt;</span>
		    </code>
		</section>
		<h3 class="title-sub">Result</h3>
		<section class="result">
		    <?php
		    var_dump(3 > 4);
		    ?>
		</section>
		<p class='content'>
		    However, <mark>var_dump()</mark> can also check a control structure, a function result
		    and similar.
		</p>
		<h3 class="title-sub">PHP Code</h3>
		<section class='code'>
		    <code>
			<span class='php-base'>&lt;?php</span><br>
			<span class='php-methods'>var_dump</span>(<span class='php-arguments'>3 < 4</span>);<br/>
			<span class='php-base'>?&gt;</span>
		    </code>
		</section>
		<h3 class="title-sub">Result</h3>
		<section class="result">
		    <?php
		    var_dump(3 < 4);
		    ?>
		</section>
		<h3 class="title-sub">PHP Code</h3>
		<section class='code'>
		    <code>
			<span class='php-base'>&lt;?php</span><br>
			<span class='php-dollar'>$</span><span class='php-var'>name</span> = <span class='php-string'>"Mihguel"</span>;<br>
			<span class='php-methods'>var_dump</span>(<span class='php-arguments'>$name</span>);<br/>
			<span class='php-base'>?&gt;</span>
		    </code>
		</section>
		<h3 class="title-sub">Result</h3>
		<section class="result">
		    <?php
		    $name = "Mihguel";
		    var_dump($name);
		    ?>
		</section>
		<div class='important'>
		    <p>
			var_dump() method must only be used in a controled environment. Do not use it
			in a production environment.
		    </p>
		</div>
		<h3 class="title-sub">PHP Code</h3>
		<section class='code'>
		    <code>
			<span class='php-base'>&lt;?php</span><br>
			<span class='php-methods'>var_dump</span>(<span class='php-arguments'>5 === 5</span>);<br/>
			<span class='php-base'>?&gt;</span>
		    </code>
		</section>
		<h3 class="title-sub">Result</h3>
		<section class="result">
		    <?php
		    var_dump(5 === 5);
		    ?>
		</section>
		<h3 class="title-sub">PHP Code</h3>
		<section class='code'>
		    <code>
			<span class='php-base'>&lt;?php</span><br>
			<span class='php-methods'>var_dump</span>(<span class='php-arguments'>5</span> === <span class='php-string'>"5"</span>);<br/>
			<span class='php-base'>?&gt;</span>
		    </code>
		</section>
		<h3 class="title-sub">Result</h3>
		<section class="result">
		    <?php
		    var_dump(5 === "5");
		    ?>
		</section>
		<h3 class="title-sub">PHP Code</h3>
		<section class='code'>
		    <code>
			<span class='php-base'>&lt;?php</span><br>
			<span class='php-methods'>var_dump</span>(<span class='php-arguments'>5 === 5.0</span>);<br/>
			<span class='php-base'>?&gt;</span>
		    </code>
		</section>
		<h3 class="title-sub">PHP Code</h3>
		<section class="result">
		    <?php
		    var_dump(5 === 5.0);
		    ?>
		</section>
		<h2 class="content" id="abs">abs()</h2>
		<p class='content'>
		    It get the absolute's value from parameter passed into it. If the value passed has a minus signal into it,
		    this method will remove it, returning the absolute value.
		</p>
		<h3 class="title-sub">PHP Code</h3>
		<section class='code'>
		    <code>
			<span class='php-base'>&lt;?php</span><br>
			<span class='php-dollar'>$</span><span class='php-var'>value</span> = <span class='php-arguments'>-15</span>;<br/>
			<span class='php-dollar'>$</span><span class='php-var'>value2</span> = <span class='php-methods'>abs</span>(<span class='php-arguments'>$value</span>);<br/>
			<span class='php-echo'>echo</span> <span class='php-arguments'>$value2</span>;<br/>
			<span class='php-base'>?&gt;</span>
		    </code>
		</section>
		<h3 class="title-sub">Result</h3>
		<section class="result">
		    <?php
		    $value = -15;
		    $value2 = abs($value);
		    echo $value2;
		    ?>
		</section>
		<h2 class="content" id="pow">pow()</h2>
		<p class='content'>
		    This method it's for potentiation, where it takes the base and the quantity of times the
		    base will multiply himself.
		</p>
		<h3 class="title-sub">PHP Code</h3>
		<section class='code'>
		    <code>
			<span class='php-base'>&lt;?php</span><br>
			<span class='php-dollar'>$</span><span class='php-var'>value</span> = 10;<br/>
			<span class='php-dollar'>$</span><span class='php-var'>value2</span> = <span class='php-methods'>pow</span>(<span class='php-arguments'>$value, 2</span>);<br/>
			<span class='php-echo'>echo</span> <span class='php-arguments'>$value2</span>;<br/>
			<span class='php-base'>?&gt;</span>
		    </code>
		</section>
		<h3 class="title-sub">Result</h3>
		<section class="result">
		    <?php
		    $value = 10;
		    $value2 = pow($value, 2);
		    echo $value2;
		    ?>
		</section>
		<h3 class="title-sub">PHP Code</h3>
		<section class='code'>
		    <code>
			<span class='php-base'>&lt;?php</span><br>
			<span class='php-dollar'>$</span><span class='php-var'>value</span> = 10;<br/>
			<span class='php-dollar'>$</span><span class='php-var'>value2</span> = <span class='php-methods'>pow</span>(<span class='php-arguments'>$value, 3</span>);<br/>
			<span class='php-echo'>echo</span> <span class='php-arguments'>$value2</span>;<br/>
			<span class='php-base'>?&gt;</span>
		    </code>
		</section>
		<h3 class="title-sub">Result</h3>
		<section class="result">
		    <?php
		    $value = 10;
		    $value2 = pow($value, 3);
		    echo $value2;
		    ?>
		</section>
		<h2 class="content" id="sqrt">sqrt()</h2>
		The method <mark title="Square Root, que signfica raíz quadrada">sqrt()</mark> it's for
		Square Root.
		<h3 class="title-sub">PHP Code</h3>
		<section class='code'>
		    <code>
			<span class='php-base'>&lt;?php</span><br>
			<span class='php-dollar'>$</span><span class='php-var'>value</span> = <span class='php-arguments'>81</span>;<br/>
			<span class='php-dollar'>$</span><span class='php-var'>value2</span> = <span class='php-methods'>sqrt</span>(<span class='php-arguments'>$value</span>);<br/>
			<span class='php-echo'>echo</span> <span class='php-arguments'>$value2</span>;<br/>
			<span class='php-base'>?&gt;</span>
		    </code>
		</section>
		<h3 class="title-sub">Result</h3>
		<section class="result">
		    <?php
		    $value = 81;
		    $value2 = sqrt($value);
		    echo $value2;
		    ?>
		</section>
		<h2 class="content" id="round">round()</h2>
		<p class='content'>
		    This method it's to round a number, following a pattern as:
		</p>
		<table class="table-dnm" name="Pattern#Result|&gt;5#Round to the next one|&lt;5#Maintain the current" title="Round Pattern"></table>
		<h3 class="title-sub">PHP Code</h3>
		<section class='code'>
		    <code>
			<span class='php-base'>&lt;?php</span><br>
			<span class='php-dollar'>$</span><span class='php-var'>value</span> = <span class='php-arguments'>5.3</span>;<br/>
			<span class='php-dollar'>$</span><span class='php-var'>value2</span> = <span class='php-methods'>round</span>(<span class='php-arguments'>$value</span>);<br/>
			<span class='php-echo'>echo</span> <span class='php-arguments'>$value2</span>;<br/>
			<span class='php-echo'>echo</span> <span class='php-string'>"&lt;br&gt;"</span>;<br>
			<span class='php-dollar'>$</span><span class='php-var'>value</span> = <span class='php-arguments'>5.7</span>;<br/>
			<span class='php-dollar'>$</span><span class='php-var'>value2</span> = <span class='php-methods'>round</span>(<span class='php-arguments'>$value</span>);<br/>
			<span class='php-echo'>echo</span> <span class='php-arguments'>$value2</span>;<br/>
			<span class='php-base'>?&gt;</span>
		    </code>
		</section>
		<h3 class="title-sub">Result</h3>
		<section class="result">
		    <?php
		    $value = 5.3;
		    $value2 = round($value);
		    echo $value2;
		    echo "<br>";
		    $value = 5.7;
		    $value2 = round($value);
		    echo $value2;
		    ?>
		</section>
		<h2 class="content" id="ceil">ceil()</h2>
		<p class='content'>
		    This method round's a number only to the next one, independently from it's value.
		</p>
		<h3 class="title-sub">PHP Code</h3>
		<section class='code'>
		    <code>
			<span class='php-base'>&lt;?php</span><br>
			<span class='php-dollar'>$</span><span class='php-var'>value</span> = <span class='php-arguments'>2.3</span>;<br/>
			<span class='php-dollar'>$</span><span class='php-var'>value2</span> = <span class='php-methods'>ceil</span>(<span class='php-arguments'>$value</span>);<br/>
			<span class='php-echo'>echo</span> <span class='php-arguments'>$value2</span>;<br/>
			<span class='php-base'>?&gt;</span>
		    </code>
		</section>
		<h3 class="title-sub">Result</h3>
		<section class="result">
		    <?php
		    $value = 2.3;
		    $value2 = ceil($value);
		    echo $value2;
		    ?>
		</section>
		<h2 class="content" id="floor">floor()</h2>
		<p class='content'>
		    This method rounds a number to it's actual value, independently from it's value.
		</p>
		<h3 class="title-sub">PHP Code</h3>
		<section class='code'>
		    <code>
			<span class='php-base'>&lt;?php</span><br>
			<span class='php-dollar'>$</span><span class='php-var'>value</span> = <span class='php-arguments'>5.9</span>;<br/>
			<span class='php-dollar'>$</span><span class='php-var'>value2</span> = <span class='php-methods'>floor</span>(<span class='php-arguments'>$value</span>);<br/>
			<span class='php-echo'>echo</span> <span class='php-arguments'>$value2</span>;<br/>
			<span class='php-base'>?&gt;</span>
		    </code>
		</section>
		<h3 class="title-sub">Result</h3>
		<section class="result">
		    <?php
		    $value = 5.9;
		    $value2 = floor($value);
		    echo $value2;
		    ?>
		</section>
		<h2 class="content" id="intval">intval()</h2>
		<p class='content'>
		    This method get's only the integer part from a number.
		</p>
		<h3 class="title-sub">PHP Code</h3>
		<section class='code'>
		    <code>
			<span class='php-base'>&lt;?php</span><br>
			<span class='php-dollar'>$</span><span class='php-var'>value</span> = <span class='php-arguments'>81.95</span>;<br/>
			<span class='php-dollar'>$</span><span class='php-var'>value2</span> = <span class='php-methods'>intval</span>(<span class='php-arguments'>$value</span>);<br/>
			<span class='php-echo'>echo</span> <span class='php-arguments'>$value2</span>;<br/>
			<span class='php-base'>?&gt;</span>
		    </code>
		</section>
		<h3 class="title-sub">Result</h3>
		<section class="result">
		    <?php
		    $value = 81.95;
		    $value2 = intval($value);
		    echo $value2;
		    ?>
		</section>
		<h2 class="content" id="number-format">number_format()</h2>
		<p class='content'>
		    Depending from the country, the float number format can change. For instance, in
		    USA, it's used the dot, in Brazil, it's used the comma. Knowing this, this method
		    pattern's the float format, based on the country.
		</p>
		<h3 class="title-sub">PHP Code</h3>
		<section class='code'>
		    <code>
			<span class='php-base'>&lt;?php</span><br>
			<span class='php-dollar'>$</span><span class='php-var'>value</span> = <span class='php-arguments'>25.2349857421</span>;<br/>
			<span class='php-dollar'>$</span><span class='php-var'>value2</span> = <span class='php-methods'>number_format</span>(<span class='php-arguments'>$value, 2</span>);<br/>
			<span class='php-echo'>echo</span> <span class='php-arguments'>$value2</span>;<br/>
			<span class='php-base'>?&gt;</span>
		    </code>
		</section>
		<h3 class="title-sub">Result</h3>
		<section class="result">
		    <?php
		    $value = 25.2349857421;
		    $value2 = number_format($value, 2);
		    echo $value2;
		    ?>
		</section>
		<h3 class="title-sub">PHP Code</h3>
		<section class='code'>
		    <code>
			<span class='php-base'>&lt;?php</span><br>
			<span class='php-dollar'>$</span><span class='php-var'>value</span> = <span class='php-arguments'>2000</span>;<br/>
			<span class='php-dollar'>$</span><span class='php-var'>value2</span> = <span class='php-methods'>number_format</span>(<span class='php-arguments'>$value, 2</span>, <span class='php-string'>","</span>,<span class='php-string'>"."</span>);<br/>
			<span class='php-echo'>echo</span> <span class='php-string'>"RS"</span> . <span class='php-arguments'>$value2</span>;<br/>
			<span class='php-base'>?&gt;</span>
		    </code>
		</section>
		<h3 class="title-sub">Result</h3>
		<section class="result">
		    <?php
		    $value = 2000;
		    $value2 = number_format($value, 2, ",",".");
		    echo "RS" . $value2;
		    ?>
		</section>
		<h2 class="content" id="increment">Increment</h2>
		<p class='content'>
		    We can increment a variable or value PHP and print it's result.
		</p>
		<h3 class="title-sub">PHP Code</h3>
		<section class='code'>
		    <code>
			<span class='php-base'>&lt;?php</span><br>
			<span class='php-dollar'>$</span><span class='php-var'>value</span> = <span class='php-arguments'>2000</span>;<br/>
			<span class='php-arguments'>$value++</span>;<br/>
			<span class='php-echo'>echo</span> <span class='php-arguments'>$value</span>;<br/>
			<span class='php-base'>?&gt;</span>
		    </code>
		</section>
		<h3 class="title-sub">Result</h3>
		<section class="result">
		    <?php
		    $value = 2000;
		    $value++;
		    echo $value;
		    ?>
		</section>
		<div class='danger'>
		    <p>
			If you increment a value or variable at the same time you're trying to print it's result
			it won't work.
		    </p>
		</div>
		<h3 class="title-sub">PHP Code</h3>
		<section class='code'>
		    <code>
			<span class='php-base'>&lt;?php</span><br>
			<span class='php-dollar'>$</span><span class='php-var'>value</span> = <span class='php-arguments'>2000</span>;<br/>
			<span class='php-echo'>echo</span> <span class='php-arguments'>$value++</span>;<br/>
			<span class='php-base'>?&gt;</span>
		    </code>
		</section>
		<h3 class='title-sub'>Result</h3>
		<section class='result'>
		    <?php
		    $value = 2000;
		    echo $value++;
		    ?>
		</section>
		<div class='important'>
		    <p>
			The increment <mark>++</mark> will increment after the actual method. If you want to
			increment a value and return it's value imediatly, you must enter the increment method
			before the value, not after it.
		    </p>
		</div>
		<h3 class="title-sub">PHP Code</h3>
		<section class='code'>
		    <code>
			<span class='php-base'>&lt;?php</span><br>
			<span class='php-dollar'>$</span><span class='php-var'>value</span> = <span class='php-arguments'>2000</span>;<br/>
			<span class='php-echo'>echo</span> <span class='php-arguments'>++$value</span>;<br/>
			<span class='php-base'>?&gt;</span>
		    </code>
		</section>
		<h3 class='title-sub'>Result</h3>
		<section class='result'>
		    <?php
		    $value = 2000;
		    echo ++$value;
		    ?>
		</section>
		<div class='danger'>
		    <p>
			You can't increment multiple values using the increment value many times. For this,
			you can make a mathematical operation plus number.
		    </p>
		</div>
		<h3 class="title-sub">PHP Code</h3>
		<section class='code'>
		    <code>
			<span class='php-base'>&lt;?php</span><br>
			<span class='php-dollar'>$</span><span class='php-var'>value</span> = <span class='php-arguments'>2000</span>;<br/>
			<span class='php-echo'>echo</span> <span class='php-arguments'>$value = $value + 5</span>;<br/>
			<span class='php-echo'>echo</span> <span class='php-string'>"&lt;br&gt;"</span>;<br>
			<span class='php-echo'>echo</span> <span class='php-arguments'>$value += 5</span>;  <span class='php-comments'>// variable value receives himself plus five</span><br/>
			<span class='php-echo'>echo</span> <span class='php-string'>"&lt;br&gt;"</span>;<br>
			<span class='php-echo'>echo</span> <span class='php-arguments'>$value -= 5</span>;  <span class='php-comments'>// variable value receives himself minus ten</span><br/>
			<span class='php-echo'>echo</span> <span class='php-string'>"&lt;br&gt;"</span>;<br>
			<span class='php-echo'>echo</span> <span class='php-arguments'>$value /= 5</span>;  <span class='php-comments'>// variable value receives himself divided per 5</span><br/>
			<span class='php-base'>?&gt;</span>
		    </code>
		</section>
		<h3 class='title-sub'>Result</h3>
		<section class='result'>
		    <?php
		    $value = 2000;
		    echo $value = $value + 5;
		    echo "<br>";
		    echo $value += 5; // variable value receives himself plus five
		    echo "<br>";
		    echo $value -= 10; // variable value receives himself minus ten
		    echo "<br>";
		    echo $value /= 5; // variable value receives himself divided per 5
		    ?>
		</section>
	    </section>
	</main>
    </body>
</html>
