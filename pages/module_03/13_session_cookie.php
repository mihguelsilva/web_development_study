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
    <body name="Session and Cookie|Session and Cookie|Session and Cookie with PHP">
        <main>
            <section class='content' id='class'>
		<h2 class='content' id='session'>Session</h2>
		<p class='content'>
		    Imagine a study platform, where you have a user and password, and where you must
		    enter your credential to access private content.
		</p>
		<p class='content'>
		    If you logout from where you were, then you cannot access it anymore, unless
		    you pass your credentials again through login.
		</p>
		<div class='important'>
		    <p>
			When you enter into a private space, probably you are into an session or
			cookie.
		    </p>
		</div>
		<p class='content'>
		    A session endures until you close your browser or define an unset, to destroy
		    the session.
		</p>
		<div class='important'>
		    <p>
			It's used in bank sites.
		    </p>
		</div>
		<h2 class='content' id='session_start'>session_start()</h2>
		<h4 style="margin-top:20px;">Syntax</h4>
		<section class='code'>
		    <code>
			<span class='php-function'>session_start</span>();<br>
		    </code>
		</section>
		<h3 class='title-sub'>PHP Code</h3>
		<section class='code'>
		    <code>
			<span class='php-base'>&lt;?php</span><br>
			<span class='php-function'>session_start</span>();<br>
			<span class='php-dollar'>$</span><span class='php-var'>_SESSION[<span class='php-string'>"test"</span>]</span> = <span class='php-string'>"Mihguel"</span>;<br/>
			<span class='php-base'>?&gt;</span>
		    </code>
		</section>
		<div class='important'>
		    <p>
			Session endures until we close browser or we define an unset session.
		    </p>
		</div>
		<h2 class='content' id='session'>$_SESSION['name']</h2>
		<p class='content'>
		    When a section is set, we can check it with global array <mark>$_SESSION['name']</mark>.
		</p>
		<h2 class='content' id='cookie'>Cookie</h2>
		<p class='content'>
		    A cookie endures much more time, and we can define how much it will endure.
		</p>
		<div class='important'>
		    <p>
			Normaly it's used cookie when we want a user to be looged for much time
			as long to.
		    </p>
		    <br/>
		    <p>
			Cookie it's only destroyed after the time defined by you.
		    </p>
		</div>
		<h2 class='content' id='setcookie'>setcookie()</h2>
		<p class='content'>
		    To create a cookie, we must define 3 parameters:
		</p>
		<ul>
		    <li><b>name</b>;</li>
		    <li><b>information</b>;</li>
		    <li><b>duration</b> in <mark>timestamp</mark></li>
		</ul>
		<h4 style="margin-top:20px;">Syntax</h4>
		<section class='code'>
		    <code>
			<span class='php-function'>setcookie</span>(<span class='php-arguments'>name</span>, <span class='php-arguments'>information</span>, <span class='php-arguments'>time_in_timestamp</span>);<br>
		    </code>
		</section>
		<h3 class='title-sub'>PHP Code</h3>
		<section class='code'>
		    <code>
			<span class='php-base'>&lt;?php</span><br>
			<span class='php-function'>setcookie</span>(<span class='php-string'>"test"</span>, <span class='php-string'>"Mihguel"</span>, <span class='php-function'>time</span>() + <span class='php-arguments'>86400</span>);<br>
			<span class='php-base'>?&gt;</span>
		    </code>
		</section>
		<div class='important'>
		    <p>
			In the previous example, our cookie will endure 1 day.
		    </p>
		    <br/>
		    <p>
			We can close our browser, however, our cookie still saved in there, and
			when we open a new browser's page, we can still access our private
			content.
		    </p>
		</div>
		<div class='danger'>
		    <p>
			For bank sites, it's dangerous to set cookies.
		    </p>
		</div>
		<h2 class='content' id='COOKIE'>$_COOKIE['name']</h2>
		<p class='content'>
		    When a cookie is set, when can check it with global array <mark>$_COOKIE['name']</mark>.
		</p>
            </section>
        </main>
    </body>
</html>
