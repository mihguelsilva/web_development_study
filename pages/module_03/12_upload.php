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
    <body name="Upload|Upload|Upload with PHP">
        <main>
            <section class='content' id='class'>
		<form method="POST" action="/data/upload.php" enctype="multipart/form-data">
		    <table class="intro-form">
			<tr>
			    <td>
				<label for="file">File</label>
				<input type="file" name="file[]" id="file" multiple/>
			    </td>
			</tr>
			<tr>
			    <td>
				<input type="submit" name="action" value="Sent"/>
			    </td>
			</tr>
		    </table>
		</form>
		<h2 class='content' id='enctype=multipart/form-data'>enctype=multipart/form-data</h2>
		<p class='content'>
		    This attribute it's necessary to send files through forms.
		</p>
		<h2 class='content' id='_files'>$_FILES</h2>
		<p class='content'>
		    This global array servers to pick files sent through forms.
		</p>
		<h4>Syntax</h4>
		<section class='code'>
		    <code>
			<span class='php-base'>&lt;?php</span><br>
			<span class='php-dollar'>$</span><span class='php-var'>_FILES[<span class='php-string'>"name"</span>]</span>;<br/>
			<span class='php-base'>?&gt;</span>
		    </code>
		</section>
		<div class='important'>
		    <p>
			When we sent a file, an array is created, so, let's check it.
		    </p>
		</div>
		<h3 class='title-sub'>PHP Code</h3>
		<section class='code'>
		    <code>
			<span class='php-base'>&lt;?php</span><br>
			<span class='php-arguments'>if</span>(<span class='php-function'>isset</span>(<span class='php-dollar'>$</span><span class='php-var'>_FILES[<span class='php-string'>"file"</span>]</span>)){<br/>
&nbsp;&nbsp;<span class='php-dollar'>$</span><span class='php-var'>FILE</span> = <span class='php-dollar'>$</span><span class='php-var'>_FILES[<span class='php-string'>"file"</span>]</span>;<br/>
&nbsp;&nbsp;<span class='php-echo'>echo</span> <span class='php-string'>"&lt;pre&gt;"</span>;<br>
&nbsp;&nbsp;<span class='php-dollar'>$</span><span class='php-var'>var_dump</span>(<span class='php-dollar'>$</span><span class='php-var'>FILE</span>);<br/>
&nbsp;&nbsp;<span class='php-echo'>echo</span> <span class='php-string'>"&lt;/pre&gt;"</span>;<br>
};<br/>
			<span class='php-base'>?&gt;</span>
		    </code>
		</section>
		<h3 class='title-sub'>Result</h3>
		<section class='result'>
		    <pre>
array(6) {
  ["name"]=>
  string(13) "core-icon.png"
  ["full_path"]=>
  string(13) "core-icon.png"
  ["type"]=>
  string(9) "image/png"
  ["tmp_name"]=>
  string(14) "/tmp/phpjIQbmz"
  ["error"]=>
  int(0)
  ["size"]=>
  int(4993)
}</pre>
		</section>
		<p class='content'>
		    As we can see, it result in a array with 6 informations.
		</p>
		<ul class="content">
		    <li><b>name</b>: Name of document;</li>
		    <li><b>type</b>: Type of the document;</li>
		    <li><b>tmp_name</b>: Temporary location of document. Every document sent from user, independently if is an image, document and so on, it'll stored in an temporary area, and then, we'll transfer the document from this temporary area to whenever we want to;</li>
		    <li><b>error</b>: Check from errors;</li>
		    <li><b>size</b>: Size of the document in bytes</li>
		</ul>
		<p class='content'>
		    We can use whatever fields we want to manipulate what we need to.
		</p>
		<h2 class='content' id='move_uploaded_file'>move_uploaded_file()</h2>
		<p class='content'>
		    This PHP function allow us to move a uploaded file to whenever we want to.
		</p>
		<h4 style="margin-top:20px;">Syntax</h4>
		<section class='code'>
		    <code>
			<span class='php-base'>&lt;?php</span><br>
			<span class='php-function'>move_uploaded_file</span>(<span class='php-arguments'>filename</span>, <span class='php-arguments'>destination</span>);<br>
			<span class='php-base'>?&gt;</span>
		    </code>
		</section>
		<h3 class='title-sub'>PHP Code</h3>
		<section class='code'>
		    <code>
			<span class='php-base'>&lt;?php</span><br>
			<span class='php-arguments'>if</span>(!<span class='php-function'>is_dir</span>('image')) {<br/>
&nbsp;&nbsp;<span class='php-function'>mkdir</span>(<span class='php-string'>"image"</span>);<br>
&nbsp;&nbsp;<span class='php-function'>move_uploaded_file</span>(<span class='php-dollar'>$</span><span class='php-var'>FILE[<span class='php-string'>"tmp_name"</span>]</span>, <span class='php-string'>"image"</span>.<span class='php-arguments'>DIRECTORY_SEPARATOR</span>.<span class='php-dollar'>$</span><span class='php-var'>FILE[<span class='php-string'>"name"</span>]</span>);<br>
} else {<br/>
&nbsp;&nbsp;<span class='php-function'>move_uploaded_file</span>(<span class='php-dollar'>$</span><span class='php-var'>FILE[<span class='php-string'>"tmp_name"</span>]</span>, <span class='php-string'>"image"</span>.<span class='php-arguments'>DIRECTORY_SEPARATOR</span>.<span class='php-dollar'>$</span><span class='php-var'>FILE[<span class='php-string'>"name"</span>]</span>);<br>
&nbsp;&nbsp;
};<br/>
			<span class='php-base'>?&gt;</span>
		    </code>
		</section>
		<div class='important'>
		    <p>
			For now, we're just sending one file at time, however, it's possible to send
			multiple files at once.
		    </p>
		    <br/>
		    <p>
			To allow our form send multiple files we must alter two things:
		    </p>
		    <br/>
		    <ul>
			<li>Alter name inserting it brackets</li>
			<li>Add <b>multiple</b> parameter in input</li>
		    </ul>
		</div>
		<h3 class='title-sub'>HTML Code</h3>
		<section class='code'>
		    <code>
&lt;DOCTYPE html&gt;<br/>
&lt;html&gt;<br/>
&lt;head&gt;<br/>
&lt;meta charset='utf-8'&gt;<br/>
&lt;/head&gt;<br/>
&lt;body&gt;<br/>
&lt;form method='POST' action='/data/upload.php' enctype='multiple/form-data'&gt;<br/>
&lt;input type='file' name='file[]' multiple&gt;&lt;br&gt;<br/>
&lt;input type='submit' name='action' value='send'&gt;<br/>
&lt;/form&gt;<br/>
&lt;/body&gt;<br/>
&lt;/html&gt;
		    </code>
		</section>
		<h3 class='title-sub'>PHP Code</h3>
		<section class='code'>
		    <code>
			<span class='php-base'>&lt;?php</span><br>
			<span class='php-arguments'>if</span> (<span class='php-function'>isset</span>(<span class='php-dollar'>$</span><span class='php-var'>$_FILES[<span class='php-string'>"file"</span>]</span>)) {<br/>
&nbsp;&nbsp;<span class='php-echo'>echo</span> <span class='php-string'>"&lt;pre&gt;"</span>;<br/>
&nbsp;&nbsp;<span class='php-function'>print_r</span>(<span class='php-dollar'>$</span><span class='php-var'>$_FILES[<span class='php-string'>"file"</span>]</span>);<br>
&nbsp;&nbsp;<span class='php-echo'>echo</span> <span class='php-string'>"&lt;/pre&gt;"</span>;<br/>
};<br/>
			<span class='php-base'>?&gt;</span>
		    </code>
		</section>
		<h3 class='title-sub'>Result</h3>
		<section class='result'>
		    <pre>Array
(
    [name] => Array
        (
            [0] => Captura de tela de 2024-10-25 20-22-05.png
            [1] => Captura de tela de 2024-10-25 14-51-36.png
            [2] => Captura de tela de 2024-09-30 14-43-35.png
            [3] => Captura de tela de 2024-09-29 11-59-58.png
        )

    [full_path] => Array
        (
            [0] => Captura de tela de 2024-10-25 20-22-05.png
            [1] => Captura de tela de 2024-10-25 14-51-36.png
            [2] => Captura de tela de 2024-09-30 14-43-35.png
            [3] => Captura de tela de 2024-09-29 11-59-58.png
        )

    [type] => Array
        (
            [0] => image/png
            [1] => image/png
            [2] => image/png
            [3] => image/png
        )

    [tmp_name] => Array
        (
            [0] => /tmp/phpWEaMpN
            [1] => /tmp/php2cSya1
            [2] => /tmp/phpVuCzOK
            [3] => /tmp/phpuFb5kF
        )

    [error] => Array
        (
            [0] => 0
            [1] => 0
            [2] => 0
            [3] => 0
        )

    [size] => Array
        (
            [0] => 90156
            [1] => 920674
            [2] => 64482
            [3] => 10840
        )

)</pre>
		</section>
		<div class='important'>
		    <p>
			The result is a <mark>matrix</mark>. We've got an main <mark>array</mark> and others <mark>arrays</mark>.
		    </p>
		</div>
		<h3 class='title-sub'>PHP Code</h3>
		<section class='code'>
		    <code>
			<span class='php-base'>&lt;?php</span><br>
			<span class='php-arguments'>if</span> (<span class='php-function'>isset</span>(<span class='php-dollar'>$</span><span class='php-var'>$_FILES[<span class='php-string'>"file"</span>]</span>)) {<br/>
&nbsp;&nbsp;<span class='php-echo'>echo</span> <span class='php-string'>"&lt;pre&gt;"</span>;<br/>
&nbsp;&nbsp;<span class='php-function'>print_r</span>(<span class='php-dollar'>$</span><span class='php-var'>$_FILES[<span class='php-string'>"file"</span>]</span>);<br>
&nbsp;&nbsp;<span class='php-echo'>echo</span> <span class='php-string'>"&lt;/pre&gt;"</span>;<br/>
&nbsp;&nbsp;<span class='php-function'>foreach</span>(<span class='php-dollar'>$</span><span class='php-var'>_FILES[<span class='php-string'>"file"</span>][<span class='php-string'>"tmp_name"</span>] as <span class='php-dollar'>$</span><span class='php-var'>key</span> => <span class='php-dollar'>$</span><span class='php-var'>tmp_name</span></span>){ <br/>
&nbsp;&nbsp;&nbsp;&nbsp;<span class='php-arguments'>if</span>(!<span class='php-function'>is_dir</span>(<span class='php-string'>"images"</span>)){<br/>
&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;<span class='php-function'>mkdir</span>(<span class='php-string'>"images"</span>);<br>
&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;<span class='php-function'>move_uploaded_file</span>(<span class='php-dollar'>$</span><span class='php-var'>tmp_name</span>, <span class='php-dollar'>$</span><span class='php-var'>_FILES[<span class='php-string'>"file"</span>][<span class='php-string'>"name"</span>][<span class='php-dollar'>$</span><span class='php-var'>key</span>]</span>);<br>
&nbsp;&nbsp;&nbsp;&nbsp;} else {<br/>
&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;<span class='php-function'>move_uploaded_file</span>(<span class='php-dollar'>$</span><span class='php-var'>tmp_name</span>, <span class='php-dollar'>$</span><span class='php-var'>_FILES[<span class='php-string'>"file"</span>][<span class='php-string'>"name"</span>][<span class='php-dollar'>$</span><span class='php-var'>key</span>]</span>);<br>
&nbsp;&nbsp;&nbsp;&nbsp;};<br/>
&nbsp;&nbsp;};<br>
};<br/>
			<span class='php-base'>?&gt;</span>
		    </code>
		</section>
            </section>
        </main>
    </body>
</html>
