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
    <body name="Manipulate Forms|Manipulate Forms|Manipulate Forms with PHP">
        <main>
            <section class='content' id='class'>
		<form method="POST" action="/data/manipulate.php">
		    <h3 class='title-sub'>Manipulate Forms</h3>
		    <table class="intro-form">
			<tr>
			    <td>
				<label for="name">Name</label>
				<input type="text" name="name" id="name" required/>
			    </td>
			</tr>
			<tr>
			    <td>
				<label for="age">Age</label>
				<input type="number" name="age" id="age" minlength="1" maxlength="3" min="1" max="100" required/>
			    </td>
			</tr>
			<tr>
			    <td>
				<label for="email">Email</label>
				<input type="email" name="email" id="email" required/>
			    </td>
			</tr>
			<tr>
			    <td>
				<label for="phone">Phone</label>
				<input type="number" name="phone" id="phone" placeholder="(081)999999999">
			    </td>
			</tr>
			<tr>
			    <td>
				<label for="gender">Gender</label>
				<select id="gender" name="gender">
				    <option value="male_cisgender">Male Cisgender</option>
				    <option value="male_transgender">Male Transgender</option>
				    <option value="female_cisgender">Female Cisgender</option>
				    <option value="female_transgender">Female Transgender</option>
				    <option value="non_binary">Non-Binary</option>
				</select>
			    </td>
			</tr>
			<tr>
			    <td>
				<input type="submit" name="action" value="Send">
			    </td>
			</tr>
		    </table>
		</form>
		<h2 class='content' id='isset'>isset()</h2>
		<p class='content'>
		    Verify the existence of variables.
		</p>
		<div class='danger'>
		    <p>
			Never store data into database assigning, directly, information within a variable.
			There's people who act maliciouly to take advantage to harm someone (hackers or
			crackers).
		    </p>
		    <br/>
		    <p>
			If we sent data, directly to database through forms without any protection, they
			can sent commands SQL like and others malicious commands to harm our site, or
			even, take it down.
		    </p>
		</div>
		<h4>Syntax</h4>
		<section class='code'>
		    <code>
			<span class='php-base'>&lt;?php</span><br>
			<span class='php-function'>isset</span>(<span class='php-dollar'>$</span><span class='php-var'>var</span>);<br>
			<span class='php-base'>?&gt;</span>
		    </code>
		</section>
		<h2 class='content' id='addslashes'>addslashes()</h2>
		<p class='content'>
		    This function uses an method to check if data received form input it's an SQL
		    command or malicious command.
		</p>
		<div class='important'>
		    <p>
			If data received it's an macilious command, it will add backslash to disturb
			it's goal.
		    </p>
		</div>
		<h4>Syntax</h4>
		<section class='code'>
		    <code>
			<span class='php-base'>&lt;?php</span><br>
			<span class='php-function'>addslashes</span>(<span class='php-dollar'>$</span><span class='php-var'>var</span>);<br>
			<span class='php-base'>?&gt;</span>
		    </code>
		</section>
		<h2 class='content' id='empty'>empty()</h2>
		<p class='content'>
		    Check if variable's content is empty.
		</p>
		<h4>Syntax</h4>
		<section class='code'>
		    <code>
			<span class='php-base'>&lt;?php</span><br>
			<span class='php-function'>empty</span>(<span class='php-dollar'>$</span><span class='php-var'>var</span>);<br>
			<span class='php-base'>?&gt;</span>
		    </code>
		</section>
		<h2 class='content' id='header'>header()</h2>
		<p class='content'>
		    Inside form's situation, it's to avoid the sent of two user's data insertion.
		</p>
		<section class='code'>
		    <code>
			<span class='php-base'>&lt;?php</span><br>
			<span class='php-function'>header</span>(<span class='php-string'>"location: index.php"</span>);<br>
			<span class='php-base'>?&gt;</span>
		    </code>
		</section>
		<div class='important'>
		    <p>
			The previous example will sent the user to <mark>index.php</mark> after he
			sent his data through the form.
		    </p>
		</div>
            </section>
        </main>
    </body>
</html>
