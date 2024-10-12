<!DOCTYPE html>
<html lang='pt-br'>
    <head>
	<meta charset='utf-8'>
	<meta name='viewport' content='width=device-width, initial-scale=1.0'>
	<title>Instalation</title>
	<link rel='stylesheet' href='/styles/index.css'>
	<link rel='preconnect' href='https://fonts.googleapis.com'>
	<link rel='preconnect' href='https://fonts.gstatic.com' crossorigin>
	<link href='https://fonts.googleapis.com/css2?family=Roboto:ital,wght@0,100;0,300;0,400;0,500;0,700;0,900;1,100;1,300;1,400;1,500;1,700;1,900&display=swap' rel='stylesheet'>
	<link href='https://fonts.googleapis.com/css2?family=Poppins:ital,wght@0,100;0,200;0,300;0,400;0,500;0,600;0,700;0,800;0,900;1,100;1,200;1,300;1,400;1,500;1,600;1,700;1,800;1,900&display=swap' rel='stylesheet'>
	<link href='https://fonts.googleapis.com/css2?family=Black+Han+Sans&display=swap' rel='stylesheet'>
	<script src='/js/index.js'></script>
    </head>
    <body>
	<header title="Installing Web Server, Install web server LAMP" id="header">
	</header>
	<main>
	    <section class="content" id="class">
		<h2 class="content">Install LAMP</h2>
		<p class="content">
		    LAMP it's a service stack and an acronimous for:
		</p>
		<ul class="content">
		    <li><b>L</b>: Linux;</li>
		    <li><b>A</b>: Apache;</li>
		    <li><b>M</b>: MySQL or MariaDB;</li>
		    <li><b>P</b>: PHP.</li>
		</ul>
		<p class="content">
		    To install LAMP in GNU/Linux:
		</p>
		<section class="code">
		    <code>
sudo apt-get update && \ <br>
sudo apt-get install apache2 libapache2-mod-php \ <br>
mariadb-server mariadb-client \ <br>
php php-mysql php-cli php-fpm php-json php-pdo php-zip php-gd  php-mbstring php-curl php-xml php-pear php-bcmath
		    </code>
		</section>
	    </section>
	</main>
	<footer>
	</footer>
    </body>
</html>
