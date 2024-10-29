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
    <body name="Class and Object|Classes and Objects|Classes and Objects in PHP">
        <main>
            <section class='content' id='class'>
		<p class='content'>
		    To understand this, we must go back to real world. For instance, every person has
		    a name, age and height.
		</p>
		<p class='content'>
		    A class is, normaly, an file, and normally it's a file per class, which has
		    features and actions, in this case, which persons can do.
		</p>
		<section class='result'>
		    <h3 class='title-sub'>Person</h3>
		    <h5>name</h5>
		    <h5>age</h5>
		    <h5>height</h5>
		    <mark>walk()</mark><br/>
		    <mark>write()</mark><br/>
		    <mark>jump()</mark>
		</section>
		<p class='content'>
		    It's pattern a class initiates with capital letter and variables with lowercase letters.
		</p>
		<div class='important'>
		    <p>
			Variables are attributes, so it'll have <mark>public</mark> name before it's
			ID.
		    </p>
		</div>
		<section class='code'>
		    <code>
			<h3 class='title-sub'>class Person</h3> {
			<h4>public $name;</h4>
			<h4>public $age;</h4>
			<h4>public $height;</h4>
			<h5>public function walk() { }</h5>
			<h5>public function write() { }</h5>
			<h5>public function jump() { }</h5>
			}
		    </code>
		</section>
		<div class='important'>
		    <p>
			A class, per se, doesn't ocupy memory, however an object it does.
		    </p>
		</div>
		<section class='code'>
		    <code>
			<?php
			class Person {
			    public $name;
			    public $age;
			    public $height;

			    public function walk() {
				echo "I'm walking";
			    }
			    public function run() {
				echo "I'm running";
			    }
			    public function jump() {
				return "I'm jumping";
			    }
			};
			$person1 = new Person();
			$person1 -> name = "Mihguel";
			$person1 -> age = 29;
			$person1 -> height = 1.75;
			echo "<pre>";
			print_r($person1);
			echo "</pre>";
			echo $person1 -> jump();
			?>
		    </code>
		</section>
		<div class='important'>
		    <p>
			In the previous example, we create <mark>$person1</mark> which is an object
			instantiated from class Person. The class remains untouchable while $person1
			gain features and methods.
		    </p>
		</div>
            </section>
        </main>
    </body>
</html>
