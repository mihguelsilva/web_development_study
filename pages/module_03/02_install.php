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
	<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
	<script src='/js/index.js'></script>
    </head>
    <body>
	<header name="Install, Installing Web Server, Install web server LAMP" id="header">
	</header>
	<main>
	    <section class="content" id="class">
		<h2 class="content" id="install-lamp" name="Install lamp">Install LAMP</h2>
		<p class="content">
		    This course is using <mark>XAMPP</mark> as web server, however, we will use <mark>LAMP</mark>.
		</p>
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
php php-mysql php-cli php-fpm php-json php-pdo php-zip php-gd php-mbstring php-curl php-xml php-pear php-bcmath
		    </code>
		</section>
		<p class="content">
		    After that, you can create a local domain for your site:
		</p>
		<section class="code">
		    <code>
emacs /etc/hosts
		    </code>
		</section>
		<section class="code">
		    <code>
web.development.br  127.255.255.1
		    </code>
		</section>
		<p class="content">
		    Now, you must enter a VirtualHost.
		</p>
		<section class="code">
		    <code>
emacs /etc/apache2/sites-availabel/web-development.conf
		    </code>
		</section>
		<section class="code">
		    <code>
&lt;VirtualHost *:80&gt;<br/>
&nbsp;&nbsp;&nbsp;&nbsp;ServerAdmin admin@email.com<br/>
&nbsp;&nbsp;&nbsp;&nbsp;ServerName web.development.br<br>
&nbsp;&nbsp;&nbsp;&nbsp;DocumentRoot /var/www/php<br>
&lt;/VirtualHost&gt;	    
		    </code>
		</section>
		<p class="content">
		    This project will use <mark>MariaDB</mark>, however, the course will use <mark>PHPMyAdmin</mark>.
		</p>
	    </section>
	</main>
    </body>
</html>
