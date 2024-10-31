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
    <body name="Visibility and Encapsulament|Visibility and Encapsulament|Visibility and Encapsulament with PHP">
        <main>
            <section class='content' id='class'>
		<h2 class='content' id='visibility'>Visibility</h2>
		<p class='content'>
		    We use terms as:
		</p>
		<ul class="content">
		    <li>Public</li>
		    <li>Private</li>
		    <li>Protected</li>
		</ul>
		<div class='important'>
		    <p>
			Visibility and encapsulation are related.
		    </p>
		</div>
		<p class='content'>
		    Visibility it's the way we define our attributes and methods. We can define their
		    as visible or nor visible.
		</p>
		<p class='content'>
		    We've 3 visibility properties: Public, private and protected.
		</p>
		<div class='important'>
		    <p>
			Protected will be more explaned in inherit class.
		    </p>
		</div>
		<h2 class='content' id='public'>Public</h2>
		<p class='content'>
		    <mark>Public</mark> allow us to access and alter attributes and also access
		    methods.
		</p>
		<h2 class='content' id='private'>Private</h2>
		<p class='content'>
		    <mark>Private</mark> don't allow us to access attributes.It doesn't allow objects
		    to access it's attributes, not only it's attributes, but methods too.
		</p>
		<div class='important'>
		    <p>
			Besides outside the class an object can't access private's attributes and
			methods, inside the class, every element can do it.
		    </p>
		    <br/>
		    <p>
			Both private and protected we must define specials functions called
			<mark>get</mark> and <mark>set</mark>.
		    </p>
		</div>
		<h2 class='content' id='encapsulation'>Encapsulation</h2>
		<p class='content'>
		    It means to protect something. In some cases, we can't let the attribute and method
		    available to everyone, however, it must exist something that interact with them, and
		    for this, we use encapsulation, which is <mark>get</mark> and <mark>set</mark>:
		</p>
		<h3 class='title-sub'>Class Calculate</h3>
		<section class='code'>
		    <code>
			<span class='php-base'>&lt;?php</span><br>
			<span class='php-function'>class</span> <span class='php-arguments'>Calculate</span>{ <br/>
&nbsp;&nbsp;<span class='php-arguments'>public</span> <span class='php-dollar'>$</span><span class='php-var'>n1</span>;<br/>
&nbsp;&nbsp;<span class='php-arguments'>public</span> <span class='php-dollar'>$</span><span class='php-var'>n2</span>;<br/>
&nbsp;&nbsp;<span class='php-arguments'>public</span> <span class='php-dollar'>$</span><span class='php-var'>res</span>;<br/>
&nbsp;&nbsp;<span class='php-arguments'>public</span> <span class='php-function'>function</span> <span class='php-function-id'>sum</span>(<span class='php-function-parameters'></span>) { <br>
&nbsp;&nbsp;&nbsp;&nbsp;<span class='php-arguments'>return</span> <span class='php-dollar'>$</span><span class='php-var'>this</span>-><span class='php-arguments'>res</span> = <span class='php-dollar'>$</span><span class='php-var'>this</span>-><span class='php-arguments'>n1</span>+<span class='php-dollar'>$</span><span class='php-var'>this</span>-><span class='php-arguments'>n2</span>;<br/>
&nbsp;&nbsp;}<br>
}<br>
			<span class='php-base'>?&gt;</span>
		    </code>
		</section>
		<h3 class='title-sub'>Instantiate Class Calculate</h3>
		<section class='code'>
		    <code>
			<span class='php-base'>&lt;?php</span><br>
			<span class='php-dollar'>$</span><span class='php-var'>a</span> = <span class='php-arguments'>new</span> <span class='php-function'>Calculate</span>();<br>
			<span class='php-dollar'>$</span><span class='php-var'>a</span>-><span class='php-arguments'>n1</span> = <span class='php-arguments'>15</span>;<br/>
			<span class='php-dollar'>$</span><span class='php-var'>a</span>-><span class='php-arguments'>n2</span> = <span class='php-arguments'>30</span>;<br/>
			<span class='php-dollar'>$</span><span class='php-var'>a</span>-><span class='php-function'>sum</span>();<br>
			<span class='php-echo'>echo</span> <span class='php-dollar'>$</span><span class='php-var'>a</span>-><span class='php-arguments'>res</span>;<br/>
			<span class='php-base'>?&gt;</span>
		    </code>
		</section>
		<div class='danger'>
		    <p>
			In the previous example, we've Calculate's class and after instance it through
			a's variable, we assign 15 and 30 to n1 and n2 variables, printing it's result
			through res variable.
		    </p>
		    <br/>
		    <p>
			However, there's a problem here. Res variable it's the result of n1 and n2, however,
			we can alter it's content, changing the result, returning an wrong answer of
			what we expect from n1 and n2 operation.
		    </p>
		</div>
		<h3 class='title-sub'>Instanciate Calculate class</h3>
		<section class='code'>
		    <code>
			<span class='php-base'>&lt;?php</span><br>
			<span class='php-dollar'>$</span><span class='php-var'>a</span> = <span class='php-arguments'>new</span> <span class='php-function'>Calculate</span>();<br>
			<span class='php-dollar'>$</span><span class='php-var'>a</span>-><span class='php-arguments'>n1</span> = <span class='php-arguments'>15</span>;<br/>
			<span class='php-dollar'>$</span><span class='php-var'>a</span>-><span class='php-arguments'>n2</span> = <span class='php-arguments'>30</span>;<br/>
			<span class='php-dollar'>$</span><span class='php-var'>a</span>-><span class='php-function'>sum</span>();<br>
			<span class='php-dollar'>$</span><span class='php-var'>a</span>-><span class='php-arguments'>res</span> = <span class='php-arguments'>500</span>;<br/>
			<span class='php-echo'>echo</span> <span class='php-dollar'>$</span><span class='php-var'>a</span>-><span class='php-arguments'>res</span>;<br/>
			<span class='php-base'>?&gt;</span>
		    </code>
		</section>
		<div class='danger'>
		    <p>
			Instead return 45, which it's the result of sum between 15 and 30, it will return
			500, an unexpected and wrong result.
		    </p>
		</div>
		<div class='important'>
		    <p>
			Get and set are also called as <mark>properties</mark>. Both got same structure
			as a method, changing it's name.
		    </p>
		</div>
		<p class='content'>
		    To solve the issue showed in the previous examples, we must declare res variable as
		    private and allow only to get it's content after operation between n1 and n2.
		</p>
		<h3 class='title-sub'>class Calculate</h3>
		<section class='code'>
		    <code>
			<span class='php-base'>&lt;?php</span><br>
			<span class='php-function'>class</span> <span class='php-arguments'>Calculate</span>{ <br/>
&nbsp;&nbsp;<span class='php-arguments'>public</span> <span class='php-dollar'>$</span><span class='php-var'>n1</span>;<br/>
&nbsp;&nbsp;<span class='php-arguments'>public</span> <span class='php-dollar'>$</span><span class='php-var'>n2</span>;<br/>
&nbsp;&nbsp;<span class='php-arguments'>private</span> <span class='php-dollar'>$</span><span class='php-var'>res</span>;<br/>
&nbsp;&nbsp;<span class='php-arguments'>public</span> <span class='php-function'>function</span> <span class='php-function-id'>sum</span>(<span class='php-function-parameters'></span>) { <br>
&nbsp;&nbsp;&nbsp;&nbsp;<span class='php-arguments'>return</span> <span class='php-dollar'>$</span><span class='php-var'>this</span>-><span class='php-arguments'>res</span> = <span class='php-dollar'>$</span><span class='php-var'>this</span>-><span class='php-arguments'>n1</span>+<span class='php-dollar'>$</span><span class='php-var'>this</span>-><span class='php-arguments'>n2</span>;<br/>
&nbsp;&nbsp;}<br>
&nbsp;&nbsp;<span class='php-arguments'>public</span> <span class='php-function'>function</span> <span class='php-function-id'>getRes</span>(<span class='php-function-parameters'></span>) { <br>
&nbsp;&nbsp;&nbsp;&nbsp;<span class='php-arguments'>return</span> <span class='php-dollar'>$</span><span class='php-var'>this</span>-><span class='php-arguments'>res</span>;<br/>
&nbsp;&nbsp;}<br>
}<br>
			<span class='php-base'>?&gt;</span>
		    </code>
		</section>
		<h3 class='title-sub'>Instanciate Calculate class</h3>
		<section class='code'>
		    <code>
			<span class='php-base'>&lt;?php</span><br>
			<span class='php-dollar'>$</span><span class='php-var'>a</span> = <span class='php-arguments'>new</span> <span class='php-function'>Calculate</span>();<br>
			<span class='php-dollar'>$</span><span class='php-var'>a</span>-><span class='php-arguments'>n1</span> = <span class='php-arguments'>15</span>;<br/>
			<span class='php-dollar'>$</span><span class='php-var'>a</span>-><span class='php-arguments'>n2</span> = <span class='php-arguments'>30</span>;<br/>
			<span class='php-dollar'>$</span><span class='php-var'>a</span>-><span class='php-function'>sum</span>();<br>
			<span class='php-echo'>echo</span> <span class='php-dollar'>$</span><span class='php-var'>a</span> -> <span class='php-function'>getSet</span>();<br>
			<span class='php-base'>?&gt;</span>
		    </code>
		</section>
		<p class='content'>
		    To create a set, we must define a method with a parameter to alter private's content.
		</p>
		<h3 class='title-sub'>Set example</h3>
		<section class='code'>
		    <code>
			<span class='php-base'>&lt;?php</span><br>
			<span class='php-function'>class</span> <span class='php-arguments'>Calculate</span>{ <br/>
&nbsp;&nbsp;<span class='php-arguments'>public</span> <span class='php-dollar'>$</span><span class='php-var'>n1</span>;<br/>
&nbsp;&nbsp;<span class='php-arguments'>public</span> <span class='php-dollar'>$</span><span class='php-var'>n2</span>;<br/>
&nbsp;&nbsp;<span class='php-arguments'>private</span> <span class='php-dollar'>$</span><span class='php-var'>res</span>;<br/>
&nbsp;&nbsp;<span class='php-arguments'>public</span> <span class='php-function'>function</span> <span class='php-function-id'>sum</span>(<span class='php-function-parameters'></span>) { <br>
&nbsp;&nbsp;&nbsp;&nbsp;<span class='php-arguments'>return</span> <span class='php-dollar'>$</span><span class='php-var'>this</span>-><span class='php-arguments'>res</span> = <span class='php-dollar'>$</span><span class='php-var'>this</span>-><span class='php-arguments'>n1</span>+<span class='php-dollar'>$</span><span class='php-var'>this</span>-><span class='php-arguments'>n2</span>;<br/>
&nbsp;&nbsp;}<br>
&nbsp;&nbsp;<span class='php-arguments'>public</span> <span class='php-function'>function</span> <span class='php-function-id'>getRes</span>(<span class='php-function-parameters'></span>) { <br>
&nbsp;&nbsp;&nbsp;&nbsp;<span class='php-arguments'>return</span> <span class='php-dollar'>$</span><span class='php-var'>this</span>-><span class='php-arguments'>res</span>;<br/>
&nbsp;&nbsp;}<br>
&nbsp;&nbsp;<span class='php-arguments'>public</span> <span class='php-function'>function</span> <span class='php-function-id'>setRes</span>(<span class='php-function-parameters'>$data</span>) { <br>
&nbsp;&nbsp;&nbsp;&nbsp;<span class='php-dollar'>$</span><span class='php-var'>this</span>-><span class='php-arguments'>res</span> = <span class='php-dollar'>$</span><span class='php-var'>data</span>;<br/>
&nbsp;&nbsp;}<br>
}<br>
			<span class='php-base'>?&gt;</span>
		    </code>
		</section>
		<div class='important'>
		    <p>
			It's recommended private every attribute and create <mark>get</mark> and
			<mark>set</mark> to each one.
		    </p>
		    <br/>
		    <p>
			We can, also, turn an method to private, however, we'll learn about it
			when we reach to constructor's functions.
		    </p>
		</div>
            </section>
        </main>
    </body>
</html>
