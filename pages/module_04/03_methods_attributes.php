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
    <body name="Methods and Attributes|Methods and Attributes|Working with Attributes and Methods within Classes">
        <main>
            <section class='content' id='class'>
		<h2 class='content' id='methods'>Methods</h2>
		<p class='content'>
		    We can create a class and reference it's attributes through <mark>this</mark>.
		</p>
		<h3 class='title-sub'>PHP Code</h3>
		<section class='code'>
		    <code>
			<span class='php-base'>&lt;?php</span><br>
			<span class='php-function'>class</span> <span class='php-arguments'>Calculate</span>{<br/>
&nbsp;&nbsp;			<span class='php-arguments'>public</span> <span class='php-dollar'>$</span><span class='php-var'>n1</span>;<br/>
&nbsp;&nbsp;			<span class='php-arguments'>public</span> <span class='php-dollar'>$</span><span class='php-var'>n2</span>;<br/>
&nbsp;&nbsp;			<span class='php-arguments'>public</span> <span class='php-function'>function</span> <span class='php-function-id'>sum</span>(<span class='php-function-parameters'></span>) { <br>
&nbsp;&nbsp;&nbsp;&nbsp;			<span class='php-echo'>echo</span> <span class='php-dollar'>$</span><span class='php-var'>this</span>-><span class='php-arguments'>n1</span>+<span class='php-dollar'>$</span><span class='php-var'>this</span>-><span class='php-arguments'>n2</span>;<br/>
&nbsp;&nbsp;}<br>
}<br>
			<span class='php-base'>?&gt;</span>
		    </code>
		</section>
		<div class='important'>
		    <p>
			There's many ways to execute the same task is PHP. In this instance, we can use
			function's parameters.
		    </p>
		</div>
		<h3 class='title-sub'>PHP Code</h3>
		<section class='code'>
		    <code>
			<span class='php-base'>&lt;?php</span><br>
			<span class='php-function'>class</span> <span class='php-arguments'>Calculate</span>{<br/>
&nbsp;&nbsp;			<span class='php-arguments'>public</span> <span class='php-function'>function</span> <span class='php-function-id'>sum</span>(<span class='php-function-parameters'>$n1, $n2</span>) { <br>
&nbsp;&nbsp;&nbsp;&nbsp;			<span class='php-echo'>echo</span> <span class='php-dollar'>$</span><span class='php-var'>n1</span>+<span class='php-dollar'>$</span><span class='php-var'>n2</span>;<br/>
&nbsp;&nbsp;}<br>
}<br>
			<span class='php-base'>?&gt;</span>
		    </code>
		</section>
		<p class='content'>
		    We can also store the result into a variable and print the result after executing
		    the method.
		</p>
		<h3 class='title-sub'>PHP Code</h3>
		<section class='code'>
		    <code>
			<span class='php-base'>&lt;?php</span><br>
			<span class='php-function'>Class</span> <span class='php-arguments'>Calculate</span>{<br/>
&nbsp;&nbsp;<span class='php-arguments'>public</span> <span class='php-dollar'>$</span><span class='php-var'>n1</span>;<br/>
&nbsp;&nbsp;<span class='php-arguments'>public</span> <span class='php-dollar'>$</span><span class='php-var'>n2</span>;<br/>
&nbsp;&nbsp;<span class='php-arguments'>public</span> <span class='php-dollar'>$</span><span class='php-var'>res</span>;<br/>
&nbsp;&nbsp;<span class='php-arguments'>public</span> <span class='php-function'>function</span> <span class='php-function-id'>sum</span>(<span class='php-function-parameters'></span>) { <br>
&nbsp;&nbsp;&nbsp;&nbsp;<span class='php-dollar'>$</span><span class='php-var'>this</span>-><span class='php-arguments'>res</span> = <span class='php-dollar'>$</span><span class='php-var'>this</span>-><span class='php-arguments'>n1</span>+<span class='php-dollar'>$</span><span class='php-var'>this</span>-><span class='php-arguments'>n2</span>;<br/>
&nbsp;&nbsp;}<br>
}<br>
			<span class='php-base'>?&gt;</span>
		    </code>
		</section>
		<div class='important'>
		    <p>
			It's important to use <mark>return</mark>, to make functions more inteligent.
		    </p>
		</div>
            </section>
        </main>
    </body>
</html>
