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
    <body name="Constructor|Constructor|Constructor with PHP">
        <main>
            <section class='content' id='class'>
		<p class='content'>
		    Constructors are methods, also called construct methods. They're starting point
		    to instance objects. That means when we use keyword <mark>new</mark> class,
		    everything inside it will be instanced.
		</p>
		<h3 class='title-sub'>Construct example</h3>
		<section class='code'>
		    <code>
			<span class='php-base'>&lt;?php</span><br>
			<span class='php-dollar'>$</span><span class='php-var'>example</span> = <span class='php-arguments'>new</span> <span class='php-function'>ClassName</span>("attribute1", "attribute2");<br>
			<span class='php-base'>?&gt;</span>
		    </code>
		</section>
		<div class='important'>
		    <p>
			Inside construct method, we can commands, pass attributes and others.
		    </p>
		</div>
		<h3 class='title-sub'>Creating Construct Method</h3>
		<section class='code'>
		    <code>
			<span class='php-base'>&lt;?php</span><br>
			<span class='php-arguments'>class</span> <span class='php-function'>Test</span>{<br/>
&nbsp;&nbsp;<span class='php-function'>function</span> <span class='php-function-id'>__construct</span>(<span class='php-function-parameters'>$n1</span>) { <br>
&nbsp;&nbsp;&nbsp;&nbsp;<span class='php-echo'>echo</span> <span class='php-string'>"Hello, I'm constructor"</span>;<br/>
&nbsp;&nbsp;&nbsp;&nbsp;<span class='php-echo'>echo</span> <span class='php-string'>"I'm the number "</span> . <span class='php-dollar'>$</span><span class='php-var'>this</span>->n1;<br/>
&nbsp;&nbsp;}<br>
}<br>
			<span class='php-base'>?&gt;</span>
		    </code>
		</section>
		<h3 class='title-sub'>Instantiate Constructor Method</h3>
		<section class='code'>
		    <code>
			<span class='php-base'>&lt;?php</span><br>
			<span class='php-dollar'>$</span><span class='php-var'>a</span> = <span class='php-arguments'>new</span> <span class='php-function'>Test</span>(<span class='php-arguments'>15</span>);<br>
			<span class='php-base'>?&gt;</span>
		    </code>
		</section>
		<h3 class='title-sub'>Result</h3>
		<section class='result'>
		    <?php
		    class Test {
			function __construct($a, $b) {
			    echo $this->sum($a, $b);
			}
			private function sum($n1, $n2) {
			    return $n1 + $n2;
			}
		    }
		    $a = new Test(10, 5);
		    ?>
		</section>
		<h3 class='title-sub'>PHP Code</h3>
		<section class='code'>
		    <code>
			<span class='php-base'>&lt;?php</span><br>
			<span class='php-arguments'>class</span> <span class='php-function'>Calculate</span>{<br/>
&nbsp;&nbsp;<span class='php-function'>function</span> <span class='php-function-id'>__construct</span>(<span class='php-function-parameters'>$a, $b</span>) { <br>
&nbsp;&nbsp;&nbsp;&nbsp;<span class='php-echo'>echo</span> <span class='php-dollar'>$</span><span class='php-var'>this</span>-><span class='php-function'>sum</span>(<span class='php-dollar'>$</span><span class='php-var'>a</span>, <span class='php-dollar'>$</span><span class='php-var'>b</span>);<br>
&nbsp;&nbsp;}<br>
&nbsp;&nbsp;<span class='php-arguments'>private</span> <span class='php-function'>function</span> <span class='php-function-id'>sum</span>(<span class='php-function-parameters'>$n1, $n2</span>) { <br>
&nbsp;&nbsp;&nbsp;&nbsp;<span class='php-arguments'>return</span> <span class='php-dollar'>$</span><span class='php-var'>n1</span> + <span class='php-dollar'>$</span><span class='php-var'>n2</span>;<br/>
&nbsp;&nbsp;}<br>
}<br>
			<span class='php-dollar'>$</span><span class='php-var'>a</span> = <span class='php-arguments'>new</span> <span class='php-function'>Calculate</span>(<span class='php-arguments'>50</span>, <span class='php-arguments'>80</span>);<br>
			<span class='php-base'>?&gt;</span>
		    </code>
		</section>
		<h3 class='title-sub'>Result</h3>
		<section class='result'>
		    <?php
		    class Calculate {
			function __construct ($a, $b) {
			    echo $this->sum($a, $b);
			}
			private function sum($n1, $n2) {
			    return $n1 + $n2;
			}
		    }
		    $a = new Calculate(50, 80);
		    ?>
		</section>
		<div class='important'>
		    <p>
			Not only constructors can call methods. The methods itselves can call other
			methods.
		    </p>
		</div>
		<p class='content'>
		    Constructors are use, largely, to assign values to attributes or variables.
		</p>
		<section class='code'>
		    <code>
			<span class='php-base'>&lt;?php</span><br>
			<span class='php-arguments'>class</span> <span class='php-function'>Test</span>{<br/>
&nbsp;&nbsp;<span class='php-arguments'>private</span> <span class='php-dollar'>$</span><span class='php-var'>a</span>;<br/>
&nbsp;&nbsp;<span class='php-arguments'>private</span> <span class='php-dollar'>$</span><span class='php-var'>b</span>;<br/>
&nbsp;&nbsp;<span class='php-arguments'>private</span> <span class='php-dollar'>$</span><span class='php-var'>c</span>;<br/>
&nbsp;&nbsp;<span class='php-function'>function</span> <span class='php-function-id'>__construct</span>(<span class='php-function-parameters'>$x, $y, $z</span>) { <br>
&nbsp;&nbsp;&nbsp;&nbsp;<span class='php-dollar'>$</span><span class='php-var'>this</span>-><span class='php-arguments'>a</span> = <span class='php-dollar'>$</span><span class='php-var'>x</span>;<br/>
&nbsp;&nbsp;&nbsp;&nbsp;<span class='php-dollar'>$</span><span class='php-var'>this</span>-><span class='php-arguments'>b</span> = <span class='php-dollar'>$</span><span class='php-var'>y</span>;<br/>
&nbsp;&nbsp;&nbsp;&nbsp;<span class='php-dollar'>$</span><span class='php-var'>this</span>-><span class='php-arguments'>c</span> = <span class='php-dollar'>$</span><span class='php-var'>z</span>;<br/>
&nbsp;&nbsp;}<br>
}<br>
			<span class='php-base'>?&gt;</span>
		    </code>
		</section>
		<div class='important'>
		    <p>
			Here, all private attributes are protected, because they can't be accessed. To
			be accessed, we need to create <mark>Set</mark> and <mark>Get</mark>.
		    </p>
		    <br/>
		    <p>
			In this particular case, the construct method got the task of set, and only he
			can do it.
		    </p>
		</div>
		<h3 class='title-sub'>Result</h3>
		<section class='result'>
		    <?php
		    class MyCalculator {
			private $n1;
			private $n2;
			function __construct($a, $b, $f) {
			    $this->n1 = $a;
			    $this->n2 = $b;
			    if ($f == "sum") {
				echo $this->sum();
			    } else if ($f == "sub") {
				echo $this->sub();
			    } else if ($f == "mult") {
				echo $this->mult();
			    } else if ($f == "div") {
				echo $this->div();
			    } else {
				echo "Sorry, you must define a valid operation";
				exit();
			    }
			}
			private function sum() {
			    return $this->n1 +$this->n2;
			}
			private function sub() {
			    return $this->n1 - $this->n2;
			}
			private function mult() {
			    return $this->n1 * $this->n2;
			}
			private function div() {
			    if ($this->n2 == 0) {
				return "We can't divide any number per zero!";
				exit();
			    } else {
				return $this->n1 / $this->n2;
			    }
			}
		    }
		    $a = new MyCalculator(15, 20, "div");
		    ?>
		</section>
            </section>
        </main>
    </body>
</html>
