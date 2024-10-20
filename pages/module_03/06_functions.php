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
    <body name="Functions|Functions|PHP Function Class">
        <main>
            <section class='content' id='class'>
		<p class='content'>
		    We've already checked in the classes before some native functions,
		    and in this class, we'll learn how to create our own functions.
		</p>
		<div class='important'>
		    <p>
			It's very important to understand it's funcionality, because
			we'll need it for OO classes.
		    </p>
		</div>
		<h2 class='content' id='definition'>Definition</h2>
		<p class='content'>
		    Function it's a code block that serves to input a specific code
		    to organize our project.
		</p>
		<p class='content'>
		    For instance, supose that in our code, we've to make sum, sub, mult
		    and division mathematicals operations. In opositive to input directly
		    in our code, we can create four functions that make these operations
		    and call them every time we must make an operation.
		</p>
		<div class='important'>
		    <p>
			Functions help us to maintain our project easily, once it's
			organized and structured.
		    </p>
		</div>
		<h2 class='content' id='structure'>Structure</h2>
		<section class='code'>
		    <code>
			<span class='php-base'>&lt;?php</span><br>
			<span class='php-function'>function</span> <span class='php-function-id'>name</span>(<span class='php-function-parameters'>parameter</span>) { <br>
&nbsp;&nbsp;<span class='php-arguments'>commands</span>;<br/>
}<br>
			<span class='php-base'>?&gt;</span>
		    </code>
		</section>
		<h3 class='title-sub'>PHP Code</h3>
		<section class='code'>
		    <code>
			<span class='php-base'>&lt;?php</span><br>
			<span class='php-function'>function</span> <span class='php-function-id'>greeting</span>(<span class='php-function-parameters'></span>) { <br>
&nbsp;&nbsp;<span class='php-echo'>echo</span> <span class='php-string'>"Hello World"</span>;<br>
}<br>
			<span class='php-function'>greeting</span>();<br>
			<span class='php-base'>?&gt;</span>
		    </code>
		</section>
		<h3 class='title-sub'>Result</h3>
		<section class='result'>
		    <?php
		    function greetings() {
			echo "Hello World";
		    };
		    greetings();
		    ?>
		</section>
		<div class='important'>
		    <p>
			We can create <mark>functions</mark> without parameters and return.
		    </p>
		    <br/>
		    <p>
			To create a parameter we must declare a variable into function's parameter
			bounds, and then, concatenate it into the code block.
		    </p>
		</div>
		<section class='code'>
		    <code>
			<span class='php-base'>&lt;?php</span><br>
			<span class='php-function'>function</span> <span class='php-function-id'>greeting</span>(<span class='php-function-parameters'>$name</span>) { <br>
&nbsp;&nbsp;<span class='php-echo'>echo</span> <span class='php-string'>"Greetings $name"</span>;<br>
}<br>
			<span class='php-function'>greeting</span>(<span class='php-string'>"Mihguel"</span>);<br>
			<span class='php-base'>?&gt;</span>
		    </code>
		</section>
		<h3 class='title-sub'>Result</h3>
		<section class='result'>
		    <?php
		    function greeting($name) {
			echo "Greetings $name";
		    };
		    greeting("Mihguel");
		    ?>
		</section>
		<div class='important'>
		    <p>
			The variable declared in function's parameter bounds it's visible
			only to the function itself.
		    </p>
		</div>
		<p class='content'>
		    A <mark>function</mark> without <mark>return</mark> execute the code inside the function's
		    bounds, however, a <mark>function</mark> with <mark>return</mark> don't execute the code
		    inside it, however, return it's result to elsewhere.
		</p>
		<h3 class='title-sub'>PHP Code</h3>
		<section class='code'>
		    <code>
			<span class='php-base'>&lt;?php</span><br>
			<span class='php-function'>function</span> <span class='php-function-id'>greeting</span>(<span class='php-function-parameters'>$name</span>) { <br>
&nbsp;&nbsp;<span class='php-arguments'>return</span> <span class='php-string'>"Greeting $name"</span>;<br>
}<br>
			<span class='php-dollar'>$</span><span class='php-var'>r</span> = <span class='php-function'>greeting</span>(<span class='php-string'>"Mihguel"</span>);<br>
			<span class='php-base'>?&gt;</span>
		    </code>
		</section>
		<h2 class='content' id='resume'>Resume</h2>
		<p class='content'>
		    We've got 4 manners to create a function:
		</p>
		<ol class="content">
		    <li>Without <mark>parameters</mark> and without <mark>return</mark></li>
		    <li>With <mark>parameters</mark> and without <mark>return</mark></li>
		    <li>Without <mark>parameters</mark> and with <mark>return</mark></li>
		    <li>With <mark>parameters</mark> and with <mark>return</mark></li>
		</ol>
		<div class='important'>
		    <p>
			It's recomended to create functions with <mark>parameters</mark> and
			<mark>return</mark>, because it's allow them to be more smart.
		    </p>
		</div>
		<h2 class='content' id='include'>Include PHP Files</h2>
		<p class='content'>
		    To include PHP files that contain functions and operations, we must
		    use <mark>include</mark> or <mark>require</mark> commands.
		</p>
		<p class='content'>
		    The difference between both it's <mark>include</mark>, que file it's
		    not found or doesn't exists don't crash the program. The <mark>require</mark>
		    it's different. When a file it's not found or doesn't exists, PHP
		    program crash.
		</p>
		<div class='important'>
		    <p>
			Besides having <mark>include</mark> and <mark>require</mark>, there's
			also <mark>include_once</mark> and <mark>require_once</mark>.
		    </p>
		    <br/>
		    <p>
			When we call the same file more than once with <mark>include</mark>
			or <mark>require</mark>, an error is returned.
		    </p>
		    <br/>
		    <p>
			If we call the same file more than once with <mark>incluce_once</mark>
			or <mark>require_once</mark>, the program keep running without error.
		    </p>
		</div>
		<div class='important'>
		    <p>
			It's recommended use <mark>require</mark> or <mark>require_once</mark>.
		    </p>
		</div>
		<div class='danger'>
		    <p>
			If you declare a <mark>function</mark> with <mark>parameters</mark>,
			call the function without set parameter's and don't attribute default
			value to them, the program will crash.
		    </p>
		    <br/>
		    <p>
			To avoid errors, if you create a function with parameters, insert
			default value to them.
		    </p>
		</div>
		<section class='code'>
		    <code>
			<span class='php-base'>&lt;?php</span><br>
			<span class='php-function'>function</span> <span class='php-function-id'>greeting</span>(<span class='php-function-parameters'>$name</span> = <span class='php-string'>"Mihguel"</span>) { <br>
&nbsp;&nbsp;<span class='php-echo'>echo</span> <span class='php-string'>"Hello $name"</span>;<br/>
}<br>
			<span class='php-echo'>echo</span> <span class='php-function'>greeting</span>();<br>
			<span class='php-base'>?&gt;</span>
		    </code>
		</section>
		<h3 class='title-sub'>Result</h3>
		<section class='result'>
		    <?php
		    function callName($name = "Mihguel") {
			echo "Hello $name";
		    };
		    echo callName();
		    ?>
		</section>
		<h3 class='title-sub'>PHP Code</h3>
		<section class='code'>
		    <code>
			<span class='php-base'>&lt;?php</span><br>
			<span class='php-function'>function</span> <span class='php-function-id'>greeting</span>(<span class='php-function-parameters'>$name</span> = <span class='php-string'>"Mihguel"</span>) { <br>
&nbsp;&nbsp;<span class='php-echo'>echo</span> <span class='php-string'>"Hello $name"</span>;<br>
}<br>
			<span class='php-echo'>echo</span> <span class='php-function'>greeting</span>(<span class='php-string'>"Amara"</span>);<br>
			<span class='php-base'>?&gt;</span>
		    </code>
		</section>
		<h3 class='title-sub'>Result</h3>
		<section class='result'>
		    <?php
		    function callMyName($name = "Mihguel") {
			echo "Hello $name";
		    }
		    echo callMyName("Amara");
		    ?>
		</section>
		<h2 class='content' id='fun_get_args'>func_get_args()</h2>
		<p class='content'>
		    We can create an function with define parameters in it, however,
		    during the call, we can set parameters and get all of them using
		    <mark>func_get_args</mark>, that will return, in an array, all
		    parameters inserted.
		</p>
		<h3 class='title-sub'>PHP Code</h3>
		<section class='code'>
		    <code>
			<span class='php-base'>&lt;?php</span><br>
			<span class='php-function'>function</span> <span class='php-function-id'>variousArgs</span>(<span class='php-function-parameters'></span>) { <br>
			<span class='php-methods'>var_dump</span>(<span class='php-methods'>func_get_args</span>());<br/>
}<br>
&nbsp;&nbsp;<span class='php-echo'>echo</span> <span class='php-function'>variousArgs</span>(<span class='php-string'>"Mihguel"</span>, <span class='php-arguments'>25</span>, <span class='php-string'>"Amara"</span>);<br>
			<span class='php-base'>?&gt;</span>
		    </code>
		</section>
		<h3 class='title-sub'>Result</h3>
		<section class='result'>
		    <?php
		    function variousArgs() {
			var_dump(func_get_args());
		    }
		    echo variousArgs("Mihguel", 25, "Amara");
		    ?>
		</section>
            </section>
        </main>
    </body>
</html>
