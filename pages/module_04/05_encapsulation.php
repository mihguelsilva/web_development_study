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
    <body name="Encapsulation|Encapsulation|Encapsulation with PHP">
        <main>
            <section class='content' id='class'>
		<h2 class='content' id='interface'>Interface</h2>
		<p class='content'>
		    Interface it's like an class with rules and within this interfaces we've method's
		    names.
		</p>
		<p class='content'>
		    Encapsulate it's protect but it's also hide interior side. Encapsulate it's hide from
		    user what he doesn't need to know. They'll only receive it's methods, parameters without
		    knowing how it was implemented and it's complexity.
		</p>
		<p class='content'>
		    It doesn't matter what's inside the code or function, but only if it works.
		</p>
		<p class='content'>
		    Differently from class, an interface:
		</p>
		<ul class="content">
		    <li>Doesn't have attributes</li>
		    <li>Methods are abstract and then are not implemented</li>
		    <li>Class is abstract and then are not instantiated</li>
		    <li>Visibility must always be public</li>
		</ul>
		<div class='important'>
		    <p>
			Soon enough we'll discuss about class and methods abstract. Abstraction it's
			use something without knowing it's complexities.
		    </p>
		</div>
		<h3 class='title-sub'>Example</h3>
		<section class='code'>
		    <code>
			<span class='php-arguments'>interface</span> <span class='php-function'>NameExample</span>{<br/>
&nbsp;&nbsp;<span class='php-arguments'>public</span> <span class='php-function'>function</span> <span class='php-function-id'>name</span>(<span class='php-function-parameters'></span>);<br/>
&nbsp;&nbsp;<span class='php-arguments'>public</span> <span class='php-function'>function</span> <span class='php-function-id'>name1</span>(<span class='php-function-parameters'></span>);<br/>
&nbsp;&nbsp;<span class='php-arguments'>public</span> <span class='php-function'>function</span> <span class='php-function-id'>name2</span>(<span class='php-function-parameters'></span>);<br/>
}<br>
		    </code>
		</section>
		<p class='content'>
		    Here, we've got an interface with 3 methods, and within then, we can pass parameters.
		</p>
		<p class='content'>
		    First, we create methods in interface, then, we must create an class to implement
		    those methods created in the interface
		</p>
		<h3 class='title-sub'>Class to Implement Interface</h3>
		<section class='code'>
		    <code>
			<span class='php-base'>&lt;?php</span><br>
			<span class='php-function'>class</span> <span class='php-arguments'>Example</span> implements <span class='php-arguments'>NameExample</span>{<br/>
&nbsp;&nbsp;<span class='php-arguments'>public</span> <span class='php-function'>function</span> <span class='php-function-id'>name</span>(<span class='php-function-parameters'></span>) { <br>
&nbsp;&nbsp;}<br>
&nbsp;&nbsp;<span class='php-arguments'>public</span> <span class='php-function'>function</span> <span class='php-function-id'>name1</span>(<span class='php-function-parameters'></span>) { <br>
&nbsp;&nbsp;}<br>
&nbsp;&nbsp;<span class='php-arguments'>public</span> <span class='php-function'>function</span> <span class='php-function-id'>name2</span>(<span class='php-function-parameters'></span>) { <br>
&nbsp;&nbsp;}<br>
}<br/>
			<span class='php-base'>?&gt;</span>
		    </code>
		</section>
		<div class='important'>
		    <p>
			We can create an interface to access database to register, update, remove, delete
			users and data users.
		    </p>
		    <br/>
		    <p>
			We create the methods in interface, and then, we implement those methods in a
			class
		    </p>
		</div>
		<div class='danger'>
		    <p>
			Do not confuse interface, which is an abstract class with abstract class, because
			it's two different things.
		    </p>
		</div>
		<h2 class='content' id='abstract_class'>Abstract Class</h2>
		<p class='content'>
		    It's similar as interfaces, so we can't instantiate it as an object, however, we can
		    assign attributes and methods, which are not, obligated, be abstract, different of
		    interface, which methods are abstract.
		</p>
		<div class='important'>
		    <p>
			If we want to assign abstract method in it, we must use keyword
			<mark>abstract</mark>.
		    </p>
		</div>
		<h3 class='title-sub'>Example Abstract Class</h3>
		<section class='code'>
		    <code>
			<span class='php-base'>&lt;?php</span><br>
			<span class='php-arguments'>abstract</span> <span class='php-function'>class</span> <span class='php-arguments'>Example</span> {<br/>
&nbsp;&nbsp;<span class='php-arguments'>public</span> <span class='php-dollar'>$</span><span class='php-var'>name</span>;<br/>
&nbsp;&nbsp;<span class='php-arguments'>public</span> <span class='php-dollar'>$</span><span class='php-var'>age</span>;<br/>
&nbsp;&nbsp;<span class='php-arguments'>public</span> <span class='php-function'>function</span> <span class='php-function-id'>callName</span>(<span class='php-function-parameters'></span>) { <br>
&nbsp;&nbsp;}<br>
&nbsp;&nbsp;<span class='php-arguments'>public</span> <span class='php-function'>function</span> <span class='php-arguments'>abstract</span> <span class='php-function-id'>example</span>(<span class='php-function-parameters'></span>);<br/>
}<br>
			<span class='php-base'>?&gt;</span>
		    </code>
		</section>
		<p class='content'>
		    An abstract class it's like an interface. The difference it's an interface has only
		    methods while abstract class has attributes and methods.
		</p>
		<p class='content'>
		    Inside a project, with a greate number of programmers, there's a risk of someone
		    create different attribute names to the same class, or create classes with different
		    names to do same task as what it need.
		</p>
		<p class='content'>
		    To avoid this, it's created an abstract class, with a name defined to implement those
		    patterns attributes and/or method, once we can have abstract class with only attributes
		</p>
		<h3 class='title-sub'>Class to Implement abstract Class</h3>
		<section class='code'>
		    <code>
			<span class='php-base'>&lt;?php</span><br>
			<span class='php-function'>class</span> <span class='php-arguments'>MyClass</span> extends <span class='php-arguments'>Example</span> {<br/>

}<br>
			<span class='php-base'>?&gt;</span>
		    </code>
		</section>
		<div class='important'>
		    <p>
			Now, this class will receive every elements from the abstract class extended to it.
		    </p>
		    <br/>
		    <p>
			This is called inheritance.
		    </p>
		</div>
            </section>
        </main>
    </body>
</html>
