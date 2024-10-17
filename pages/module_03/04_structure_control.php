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
	<link rel="stylesheet" href="https://fonts.googleapis.com/css?family=Audiowide|Sofia|Trirong">
	<link rel='stylesheet' href='https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css'>
	<script src='/js/index.js'></script>
    </head>
    <body name="Structure Control|Structure Control|PHP Structure Control (if/else) (swich/case)">
	<main>
	    <section id="class" class="content">
		<h2 class="content" id="if/else">If/Else</h2>
		<p class='content'>
		    Also called control structed and conditional structure, it's the most structured used
		    in a lange programming languages.
		</p>
		<div class='important'>
		    <p>
			It's not possible create program without this structures.
		    </p>
		</div>
		<p class='content'>
		    The purpose of conditional structure it's to examine something, get the value result
		    and then verify if it's <mark>true</mark> of <mark>false</mark>.
		</p>
		<p class='content'>
		    A good usage's example of conditional structure it's to verify how many men and women
		    access our websites. For this, we'll use <mark>if/else</mark>, presenting the user a web
		    form, where he will write your personal data into it, and one of the input fields correponds
		    to genre. We'll create a variable to check quantity of men and other for women.
		</p>
		<h3 class="title-sub">PHP Code</h3>
		<section class='code'>
		    <code>
			<span class='php-base'>&lt;?php</span><br>
			<span class='php-dollar'>$</span><span class='php-var'>age</span> = <span class='php-arguments'>18</span>;<br/>
			<span class='php-methods'>if</span>(<span class='php-arguments'>$age &lt; 18</span>) {<br/>
&nbsp;&nbsp;<span class='php-echo'>echo</span> <span class='php-string'>"Can't drink here"</span>;<br>
} <span class='php-methods'>else</span> {<br/>
&nbsp;&nbsp;<span class='php-echo'>echo</span> <span class='php-string'>"Can drink here"</span>;<br>
}<br/>
			<span class='php-base'>?&gt;</span>
		    </code>
		</section>
		<h3 class='title-sub'>Result</h3>
		<section class='result'>
		    <?php
		    $age = 18;
		    if($age < 18) {
			echo "Can't drink here";
		    } else {
			echo "Can drink here";
		    }
		    ?>
		</section>
		<div class='important'>
		    <p>
			It's not mandatory to use <mark>else</mark>. However, to create more than one code block,
			you must enter <mark>else if</mark>.
		    </p>
		</div>
		<h3 class="title-sub">PHP Code</h3>
		<section class='code'>
		    <code>
			<span class='php-base'>&lt;?php</span><br>
			<span class='php-dollar'>$</span><span class='php-var'>age</span> = <span class='php-arguments'>5</span>;<br/>
			<span class='php-methods'>if</span>(<span class='php-arguments'>$age &lt; 12</span>) {<br/>
&nbsp;&nbsp;<span class='php-echo'>echo</span> <span class='php-string'>"Child"</span>;<br>
} <span class='php-methods'>else if</span>(<span class='php-arguments'>$age &lt; 18</span>) {<br/>
&nbsp;&nbsp;<span class='php-echo'>echo</span> <span class='php-string'>"Teenager"</span>;<br>
} <span class='php-methods'>else if</span>(<span class='php-arguments'>$age &gt;= 22</span>) {<br/>
&nbsp;&nbsp;<span class='php-echo'>echo</span> <span class='php-string'>"Adult"</span>;<br>
} <span class='php-methods'>else if</span>(<span class='php-arguments'>$age &gt;= 60</span>) {<br/>
&nbsp;&nbsp;<span class='php-echo'>echo</span> <span class='php-string'>"Elderly"</span>;<br>
}<br/>
			<span class='php-base'>?&gt;</span>
		    </code>
		</section>
		<h3 class='title-sub'>Result</h3>
		<section class='result'>
		    <?php
		    $age = 5;
		    if($age < 12) {
			echo "Child";
		    } else if($age < 18) {
			echo "Teenager";
		    } else if($age >= 22) {
			echo "Adult";
		    } else if($age >= 60) {
			echo "Elderly";
		    }
		    ?>
		</section>
		<div class='danger'>
		    <p>
			It's importante to create a real limit between the operations.
		    </p>
		</div>
		<h3 class="title-sub">PHP Code</h3>
		<section class='code'>
		    <code>
			<span class='php-base'>&lt;?php</span><br>
			<span class='php-dollar'>$</span><span class='php-var'>age</span> = <span class='php-arguments'>5</span>;<br/>
			<span class='php-methods'>if</span>(<span class='php-arguments'>$age &lt; 0</span>) {<br/>
&nbsp;&nbsp;<span class='php-echo'>echo</span> <span class='php-string'>"Invalid age"</span>;<br>
}<br/>
			<span class='php-methods'>if</span>(<span class='php-arguments'>$age &gt; 0 && $age &lt; 12</span>) {<br/>
&nbsp;&nbsp;<span class='php-echo'>echo</span> <span class='php-string'>"Child"</span>;<br>
} <span class='php-methods'>else if</span>(<span class='php-arguments'>$age &gt;= 12 && $age &lt; 18</span>) {<br/>
&nbsp;&nbsp;<span class='php-echo'>echo</span> <span class='php-string'>"Teenager"</span>;<br>
} <span class='php-methods'>else if</span>(<span class='php-arguments'>$age &gt;= 18 && $age &lt; 60</span>) {<br/>
&nbsp;&nbsp;<span class='php-echo'>echo</span> <span class='php-string'>"Adult"</span>;<br>
} <span class='php-methods'>else if</span>(<span class='php-arguments'>$age &gt;= 60</span>) {<br/>
&nbsp;&nbsp;<span class='php-echo'>echo</span> <span class='php-string'>"Elderly"</span>;<br>
}<br/>
			<span class='php-base'>?&gt;</span>
		    </code>
		</section>
		<h3 class='title-sub'>Result</h3>
		<section class='result'>
		    <?php
		    $age = 5;
		    if ($age < 0) {
			echo "Invalid age";
		    }
		    if($age > 0 && $age < 12) {
			echo "Child";
		    } else if($age >= 12 && $age < 18) {
			echo "Teenager";
		    } else if($age >= 18 && $age < 60) {
			echo "Adult";
		    } else if($age >= 60) {
			echo "Elderly";
		    };
		    ?>
		</section>
		<h2 class="content" id="calculator">Calculator</h2>
		<p class='content'>
		    First of all, we must write the steps to create an calculator.
		</p>
		<ol class="content">
		    <li>Ask a number;</li>
		    <li>Ask the operation;</li>
		    <li>Calculate;</li>
		    <li>Return the result.</li>
		</ol>
		<div class='important'>
		    <p>
			To receive those numbers, we can expose them through a form.
		    </p>
		</div>
		<div class='danger'>
		    <p>
			We didn't check form manipulation through PHP, so, we'll check it out this subject
			in other moment.
		    </p>
		</div>
		<h3 class="title-sub">PHP Code</h3>
		<section class='code'>
		    <code>
			<span class='php-base'>&lt;?php</span><br>
			<span class='php-dollar'>$</span><span class='php-var'>number1</span> = <span class='php-arguments'>15</span>;<br/>
			<span class='php-dollar'>$</span><span class='php-var'>number2</span> = <span class='php-arguments'>20</span>;<br/>
			<span class='php-dollar'>$</span><span class='php-var'>operation</span> = <span class='php-string'>"+"</span>;<br>
			<span class='php-methods'>if</span>(<span class='php-arguments'>$operation ==</span> <span class="php-string">"+"</span>) {<br/>
&nbsp;&nbsp;<span class='php-dollar'>$</span><span class='php-var'>result</span> = <span class='php-arguments'>$number1 + $number2</span>;<br/>
			} <span class='php-methods'>else if</span>(<span class='php-arguments'>$operation ==</span> <span class="php-string">"-"</span>) {<br/>
&nbsp;&nbsp;<span class='php-dollar'>$</span><span class='php-var'>result</span> = <span class='php-arguments'>$number1 - $number2</span>;<br/>
} <span class='php-methods'>else if</span>(<span class='php-arguments'>$operation ==</span> <span class="php-string">"*"</span>) {<br/>
&nbsp;&nbsp;<span class='php-dollar'>$</span><span class='php-var'>result</span> = <span class='php-arguments'>$number1 * $number2</span>;<br/>
} <span class='php-methods'> else if</span>(<span class='php-arguments'>$operation ==</span> <span class="php-string">"/"</span>) {<br/>
&nbsp;&nbsp;<span class='php-methods'>if</span> (<span class='php-arguments'>$number2 != 0</span>) {<br/>
&nbsp;&nbsp;&nbsp;&nbsp;<span class='php-dollar'>$</span><span class='php-var'>result</span> = <span class='php-arguments'>$number1 / $number2</span>;<br/>
&nbsp;&nbsp;} <span class='php-methods'>else</span> { <br/>
&nbsp;&nbsp;&nbsp;&nbsp;<span class='php-echo'>echo</span> <span class='php-string'>"It's not possible divide a number by zero."</span>;<br>
&nbsp;&nbsp;&nbsp;&nbsp;<span class='php-methods'>exit()</span>;<br/>
&nbsp;&nbsp;}<br/>
} <span class='php-methods'>else</span> {<br/>
&nbsp;&nbsp;<span class='php-echo'>echo</span> <span class='php-string'>"Operation invalid"</span>;<br>
&nbsp;&nbsp;<span class='php-methods'>exit()</span>;<br/>
}<br/>
			<span class='php-echo'>echo</span> <span class='php-string'>"The result is $result"</span>;<br>
			<span class='php-base'>?&gt;</span>
		    </code>
		</section>
		<h3 class='title-sub'>Result</h3>
		<section class='result'>
		    <?php
		    $number1 = 15;
		    $number2 = 20;
		    $operation = "+";
		    if($operation == "+") {
			$result = $number1 + $number2;
		    } else if($operation == "-") {
			$result = $number1 - $number2;
		    } else if($operation == "*") {
			$result = $number1 * $number2;
		    } else if($operation == "/") {
			if ($number2 != 0) {
			    $result = $number1 / $number2;
			} else {
			    echo "It's not possible divide a number by zero.";
			    exit();
			}
		    } else {
			echo "Operation invalid";
			exit();
		    }
		    echo "The result is $result";
		    ?>
		</section>
		<h2 class="content" id="exit">exit()</h2>
		<p class='content'>
		    This method do not allow the execution after it.
		</p>
		<h2 class="content" id="true-table">True Table</h2>
		<p class='content'>
		    It envolvs logic.
		</p>
		<table class="table-dnm" title="True Table" name="Operator#Representation|AND#&&|OR#II|XOR#xor"></table>
		<table class="table-dnm" title="AND" name="P#Q#P&&Q|V#V#V|V#F#F|F#V#F|F#F#F"></table>
		<table class="table-dnm" title="OR" name="P#Q#P II Q|V#V#V|V#F#V|F#V#V|F#F#F"></table>
		<table class="table-dnm" title="XOR" name="P#Q#P xor Q|V#V#F|V#F#V|F#V#V|F#F#F"></table>
		<div class='important'>
		    <p>
			It's important to memorize this logic.
		    </p>
		</div>
		<h3 class="title-sub">PHP Code</h3>
		<section class='code'>
		    <code>
			<span class='php-base'>&lt;?php</span><br>
			<span class='php-comments'>// TABLE TRUE AND</span><br/>
			<span class='php-echo'>echo</span> <span class='php-string'>"&lt;p&gt;True table AND&lt;/p&gt;"</span>;<br>
			<span class='php-echo'>echo</span> <span class='php-string'>"&lt;br&gt;"</span>;<br>
			<span class='php-methods'>var_dump</span>(<span class='php-arguments'>true && true</span>);<br/>
			<span class='php-echo'>echo</span> <span class='php-string'>"&lt;br&gt;"</span>;<br>
			<span class='php-methods'>var_dump</span>(<span class='php-arguments'>false && true</span>);<br/>
			<span class='php-echo'>echo</span> <span class='php-string'>"&lt;br&gt;"</span>;<br>
			<span class='php-methods'>var_dump</span>(<span class='php-arguments'>true && false</span>);<br/>
			<span class='php-echo'>echo</span> <span class='php-string'>"&lt;br&gt;"</span>;<br>
			<span class='php-methods'>var_dump</span>(<span class='php-arguments'>false && false</span>);<br/>
			<span class='php-echo'>echo</span> <span class='php-string'>"&lt;br&gt;"</span>;<br><br/>
			<span class='php-comments'>// TABLE TRUE OR</span><br/>
			<span class='php-echo'>echo</span> <span class='php-string'>"&lt;p&gt;True table OR&lt;/p&gt;"</span>;<br>
			<span class='php-echo'>echo</span> <span class='php-string'>"&lt;br&gt;"</span>;<br>
			<span class='php-methods'>var_dump</span>(<span class='php-arguments'>true || true</span>);<br/>
			<span class='php-echo'>echo</span> <span class='php-string'>"&lt;br&gt;"</span>;<br>
			<span class='php-methods'>var_dump</span>(<span class='php-arguments'>false || true</span>);<br/>
			<span class='php-echo'>echo</span> <span class='php-string'>"&lt;br&gt;"</span>;<br>
			<span class='php-methods'>var_dump</span>(<span class='php-arguments'>true || false</span>);<br/>
			<span class='php-echo'>echo</span> <span class='php-string'>"&lt;br&gt;"</span>;<br>
			<span class='php-methods'>var_dump</span>(<span class='php-arguments'>false || false</span>);<br/>
			<span class='php-echo'>echo</span> <span class='php-string'>"&lt;br&gt;"</span>;<br><br/>
			<span class='php-comments'>// TABLE TRUE XOR</span><br/>
			<span class='php-echo'>echo</span> <span class='php-string'>"&lt;p&gt;True table XOR&lt;/p&gt;"</span>;<br>
			<span class='php-echo'>echo</span> <span class='php-string'>"&lt;br&gt;"</span>;<br>
			<span class='php-methods'>var_dump</span>(<span class='php-arguments'>true xor true</span>);<br/>
			<span class='php-echo'>echo</span> <span class='php-string'>"&lt;br&gt;"</span>;<br>
			<span class='php-methods'>var_dump</span>(<span class='php-arguments'>true xor false</span>);<br/>
			<span class='php-echo'>echo</span> <span class='php-string'>"&lt;br&gt;"</span>;<br>
			<span class='php-methods'>var_dump</span>(<span class='php-arguments'>false xor true</span>);<br/>
			<span class='php-echo'>echo</span> <span class='php-string'>"&lt;br&gt;"</span>;<br>
			<span class='php-methods'>var_dump</span>(<span class='php-arguments'>false xor false</span>);<br/>
			<span class='php-base'>?&gt;</span>
		    </code>
		</section>
		<h3 class='title-sub'>Result</h3>
		<section class='result'>
		    <?php
		    // TABLE TRUE AND
		    echo "<h4>True table AND</h4>";
		    echo "<br>";
		    echo '<code>var_dump(true && true);</code><br><b>';
		    var_dump(true && true);
		    echo "</b><br>";
		    echo '<code>var_dump(true && false);</code><br><b>';
		    var_dump(true && false);
		    echo "</b><br>";
		    echo '<code>var_dump(false && true);</code><br><b>';
		    var_dump(false && true);
		    echo "</b><br>";
		    echo '<code>var_dump(false && false);</code><br><b>';
		    var_dump(false && false);
		    echo "</b><br>";

		    // TABLE TRUE OR
		    echo "<br>";
		    echo "<h4>True table OR</h4>";
		    echo "<br>";
		    echo '<code>var_dump(true || true);</code><br><b>';
		    var_dump(true || true);
		    echo "</b><br>";
		    echo '<code>var_dump(true || false);</code><br><b>';
		    var_dump(true || false);
		    echo "</b><br>";
		    echo '<code>var_dump(false || true);</code><br><b>';
		    var_dump(false || true);
		    echo "</b><br>";
		    echo '<code>var_dump(false || false);</code><br><b>';
		    var_dump(false || false);
		    echo "</b><br>";

		    // TABLE TRUE XOR
		    echo "<br>";
		    echo "<h4>True table XOR</h4>";
		    echo "<br>";
		    echo '<code>var_dump(true xor true);</code><br><b>';
		    var_dump(true xor true);
		    echo "</b><br>";
		    echo '<code>var_dump(false xor true);</code><br><b>';
		    var_dump(false xor true);
		    echo "</b><br>";
		    echo '<code>var_dump(true xor false);</code><br><b>';
		    var_dump(true xor false);
		    echo "</b><br>";
		    echo '<code>var_dump(false xor false);</code><br><b>';
		    var_dump(false xor false);
		    echo '</b>';
		    ?>
		</section>
		<h2 class="content" id="intro-to-forms">Intro to Forms</h2>
		<p class='content'>
		    This is only an introduction to forms manipulation. We'll going to check this out
		    with much more focus ahead.
		</p>
		<h3 class='title-sub'>HTML Code</h3>
		<section class='code'>
		    <code>
&lt;!DOCTYPE html&gt;<br/>
&lt;html&gt;<br/>
&lt;head&gt;<br/>
&lt;meta charset="utf-8"&gt;<br/>
&lt;/head&gt;<br/>
&lt;body&gt;<br/>
&lt;form method='POST' action='/pages/intro_form.php'&gt;<br/>
Name: &lt;input type='text' name='name'&gt;&lt;br&gt;<br/>
Age: &lt;input type='number' name='age'&gt;&lt;br&gt;<br/>
Genre: &lt;select name='genre'&gt;<br/>
&lt;option value='man_cisgender'&gt;Man Cisgender&lt;/option&gt;<br/>
&lt;option value='woman_cisgender'&gt;Woman Cisgender&lt;/option&gt;<br/>
&lt;option value='man_transgender'&gt;Man Transgender&lt;/option&gt;<br/>
&lt;option value='woman_transgender'&gt;Woman Transgender&lt;/option&gt;<br/>
&lt;option value='non_binary'&gt;Non Binary&lt;/option&gt;<br/>
&lt;/select&gt;<br/>
&lt;input type='submit' name='action' value='Send'&gt;<br/>
&lt;/form&gt;<br/>
&lt;/body&gt;<br/>
&lt;/html&gt;
		    </code>
		</section>
		<form method="POST" action="/pages/intro_form.php">
		    <table class="intro-form">
			<tr>
			    <td>
				<label for="name" >Name</label>
				<input type="text" id="name" name="name"/>
			    </td>
			</tr>
			<tr>
			    <td>
				<label for="age">Age</label>
				<input type="number" id="age" name="age" min="0" max="100" maxlength="3"/>
			    </td>
			</tr>
			<tr>
			    <td>
				<label for="genre">Genre</label>
				<select id="genre" name="genre">
				    <option value="man_cisgender">Man Cisgender</option>
				    <option value="woman_cisgender">Woman Cisgender</option>
				    <option value="man_transgender">Man Transgender</option>
				    <option value="woman_transgender">Woman Transgender</option>
				    <option value="non_binary">Non Binary</option>
				</select>
			    </td>
			</tr>
			<tr>
			    <td>
				<input type='submit' name='action' value='Send'/>
			    </td>
			</tr>
		    </table>
		</form>
		<p class='content'>
		</p>
		<h3 class='title-sub'>PHP Code</h3>
		<section class='code'>
		    <code>
			<span class='php-base'>&lt;?php</span><br>
			<span class='php-dollar'>$</span><span class='php-var'>namePerson</span> = <span class='php-arguments'>$_POST['name']</span>;<br/>
			<span class='php-dollar'>$</span><span class='php-var'>agePerson</span> = <span class='php-arguments'>$_POST['age']</span>;<br/>
			<span class='php-dollar'>$</span><span class='php-var'>genrePerson</span> = <span class='php-arguments'>$_POST['genre']</span>;<br/>
			<span class='php-echo'>echo</span> <span class='php-string'>"The name is $namePerson"</span>;<br>
			<span class='php-echo'>echo</span> <span class='php-string'>"&lt;br&gt;"</span>;<br>
			<span class='php-echo'>echo</span> <span class='php-string'>"The age is $nameAge"</span>;<br>
			<span class='php-echo'>echo</span> <span class='php-string'>"&lt;br&gt;"</span>;<br>
			<span class='php-echo'>echo</span> <span class='php-string'>"The genre is $genrePerson"</span>;<br>
			<span class='php-base'>?&gt;</span>
		    </code>
		</section>
		<div class='important'>
		    <p>
			As shown before, to manipulate an POST form, we must use <mark>$_POST</mark> global array,
			inserting in it name's element attribute where user must input it's data, to send it.
		    </p>
		    <br>
		    <p>
			If form uses GET method, then we must use <mark>$_GET</mark> global array to receive those
			datas, inserting in it name's element attribute.
		    </p>
		</div>
		<h2 class="content" id="Switch/Case">Switch/Case</h2>
		<div class='important'>
		    <p>
			Sometimes, this structure is more efficient than <mark>If/Else</mark>.
		    </p>
		</div>
		<h3 class="title-sub">PHP Code</h3>
		<section class='code'>
		    <code>
			<span class='php-base'>&lt;?php</span><br>
			<span class='php-dollar'>$</span><span class='php-var'>value</span> = <span class='php-arguments'>1</span>;<br/>
			<span class='php-methods'>switch</span>(<span class='php-arguments'>$value</span>) {<br/>
&nbsp;&nbsp;<span class='php-methods'>case</span> <span class='php-arguments'>1</span>:<br/>
&nbsp;&nbsp;&nbsp;&nbsp;<span class='php-comments'>// do something here</span><br/>
&nbsp;&nbsp;&nbsp;&nbsp;<span class='php-methods'>break</span>;<br/>
&nbsp;&nbsp;<span class='php-methods'>default</span>:<br/>
&nbsp;&nbsp;&nbsp;&nbsp;<span class='php-comments'>// do something here</span><br/>
&nbsp;&nbsp;&nbsp;&nbsp;<span class='php-methods'>break</span>;<br/>
}<br/>
			<span class='php-base'>?&gt;</span>
		    </code>
		</section>
		<h3 class='title-sub'>Result</h3>
		<section class='result'>
		    <?php
		    $valueSwitchCase = "John";
		    switch($valueSwitchCase) {
			case("John"):
			    echo abs(-15);
			    break;
			case("Mary"):
			    echo round(7.89);
			    break;
			case("Marcus"):
			    echo intval(7,987897606778);
			    break;
			case("Sena"):
			    echo pow(2,17);
			    break;
			default:
			    echo sqrt(81);
			    break;
		    };
		    ?>
		</section>
		<p class='content'>
		    Besides the example, to get a better understanding, we must create a form.
		</p>
		<h3 class="title-sub">HTML Code</h3>
		<section class='code'>
		    <code>
&lt;!DOCTYPE html&gt;<br/>
&lt;html&gt;<br/>
&lt;head&gt;<br/>
&lt;meta charset='utf-8'&gt;<br/>
&lt;/head&gt;<br/>
&lt;body&gt;<br/>
&lt;form method='POST' action='intro_form.php'&gt;<br/>
&lt;input type='number' name='sub_network'&gt;<br/>
&lt;input type='submit' name='action' name='Check'&gt;<br/>
&lt;/form&gt;<br/>
&lt;/body&gt;<br/>
&lt;/html&gt;
		    </code>
		</section>
		<h3 class='title-sub'>Result</h3>
		<section class='result'>
		    <form method="POST" action="/pages/intro_form.php">
			<table class="intro-form">
			    <tr>
				<td>
				    <label for="sub-network">Sub Network IPv4 from /24</label>
				    <input type="number" name="sub_network" id="sub-network">
				</td>
			    </tr>
			    <tr>
				<td>
				    <input type="submit" name="action" value="Check" />
				</td>
			    </tr>
			</table>
		    </form>
		</section>
		<div class='danger'>
		    <p>
			it's not recommended to use <mark>Switch/Case</mark> to make an <mark>If/Else</mark>z verification. For this, use
			structure control <mark>If/Else</mark>.
		    </p>
		    <section class='code' style="background-color:rgba(255,255,255,.5);">
			<code>
			    <span class='php-base'>&lt;?php</span><br>
			    <span class='php-dollar'>$</span><span class='php-var'>value</span> = 1;<br/>
			    <span class='php-methods'>switch</span> {<br/>
&nbsp;&nbsp;<span class='php-comments'>// this is an If/Else verification</span><br/>
&nbsp;&nbsp;<span class='php-methods'>case</span> <span class='php-arguments'>$value</span> &gt; 1:<br/>
&nbsp;&nbsp;...<br/>
}<br/>
			    <span class='php-base'>?&gt;</span>
			</code>
		    </section>
		</div>
		<div class='important'>
		    <p>
			In <mark>Switch/Case</mark> we can declare more than one <mark>Case</mark>, returning
			an action.
		    </p>
		    <section class='code' style="background-color:rgba(255,255,255,.5);">
			<code>
			    <span class='php-base'>&lt;?php</span><br>
			    <span class='php-dollar'>$</span><span class='php-var'>value</span> = 1;<br/>
			    <span class='php-methods'>switch</span> {<br/>
&nbsp;&nbsp;<span class='php-methods'>case</span> 1:<br/>
&nbsp;&nbsp;<span class='php-methods'>case</span> 2:<br/>
&nbsp;&nbsp;<span class='php-methods'>case</span> 3:<br/>
&nbsp;&nbsp;&nbsp;&nbsp;<span class='php-comments'>// do something here</span><br/>
&nbsp;&nbsp;&nbsp;&nbsp;<span class='php-methods'>break</span>;<br/>
}<br/>
<span class='php-base'>?&gt;</span>
			</code>
		    </section>
		</div>
	    </section>
	</main>
    </body>
</html>
