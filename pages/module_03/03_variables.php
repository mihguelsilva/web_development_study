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
    <body>
	<header id="header" name="Variables|Variables|PHP variables, variable's types and operators"></header>
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
			Every PHP's command and variables must finish with semicolon <mark>;</mark>,
			otherwise, it will crush.
		    </p>
		</div>
		<div class='important'>
		    <p>
			It's not necessary to declare the variable's data type to declare a PHP's variable.
		    </p>
		</div>
	    </section>
	</main>
    </body>
</html>
