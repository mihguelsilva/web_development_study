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
    <body name="Manipulating Files and Directories|Manipulating Files and Directories|Manipulating Files and Directories in PHP">
        <main>
            <section class='content' id='class'>
		<h2 class='content' id='text_file'>Text File</h2>
		<p class='content'>
		    First of all, we're going to work with text files.
		</p>
		<h2 class='content' id='fopen'>fopen()</h2>
		<p class='content'>
		    It's used to write and read files. First parameter we pass filename and then the mode (read, write). In PHP's documentation have a list of modes we can use for.
		</p>
		<h4>Syntax</h4>
		<section class='code'>
		    <code>
			<span class='php-function'>fopen</span>(<span class='php-arguments'>filename</span>, <span class='php-arguments'>mode</span>);<br>
		    </code>
		</section>
		<div class='important'>
		    <p>
			Never forget to pass file's extension.
		    </p>
		</div>
		<p class='content'>
		    The main modes are:
		</p>
		<ul class="content">
		    <li><b>a+</b>: It's to read and write, however, it will write after the last line, so, if there's an text already, all data will be appended;</li>
		    <li><b>w+</b>: It's to read and write. It' will rewrite the file, deleting all previous data in it;</li>
		</ul>
		<h3 class='title-sub'>a+</h3>
		<section class='code'>
		    <code>
			<span class='php-function'>fopen</span>(<span class='php-arguments'>filename</span>, <span class='php-string'>"a+"</span>);<br>
		    </code>
		</section>
		<h2 class='content' id='fwrite'>fwrite()</h2>
		<p class='content'>
		    <mark>fwrite()</mark> purposes it's to write.
		</p>
		<h4>Syntax</h4>
		<section class='code'>
		    <code>
			<span class='php-function'>fwrite</span>(<span class='php-arguments'>handle</span>, <span class='php-arguments'>string</span>);<br>
		    </code>
		</section>
		<p class='content'>
		    First parameter we pass the variable that stores <mark>fopen()</mark> and then, we pass what we want to write.
		</p>
		<section class='code'>
		    <code>
			<span class='php-dollar'>$</span><span class='php-var'>file</span> = <span class='php-function'>fopen</span>(<span class='php-string'>"./file.txt"</span>, <span class='php-string'>"w+"</span>);<br>
			<span class='php-function'>fwrite</span>(<span class='php-dollar'>$</span><span class='php-var'>file</span>, <span class='php-string'>"Writing in file"</span>);<br>
		    </code>
		</section>
		<div class='important'>
		    <p>
			In previous example, if file already exists, it will rewrite the file, if not exists, then, it will create the file and write the same.
		    </p>
		</div>
		<h2 class='content' id='fclose'>fclose()</h2>
		<p class='content'>
		    We pass the file we want to close.
		</p>
		<section class='code'>
		    <code>
			<span class='php-dollar'>$</span><span class='php-var'>file</span> = <span class='php-function'>fopen</span>(<span class='php-string'>"./file.txt"</span>,<span class='php-string'>"w+"</span>);<br>
			<span class='php-function'>fwrite</span>(<span class='php-dollar'>$</span><span class='php-var'>file</span>,<span class='php-string'>"Writing in file"</span>);<br>
			<span class='php-function'>fclose</span>(<span class='php-dollar'>$</span><span class='php-var'>file</span>);<br>
		    </code>
		</section>
		<h3 class='title-sub'>PHP Code</h3>
          	<section class='code'>
		    <code>
			<span class='php-base'>&lt;?php</span><br>
			<span class='php-dollar'>$</span><span class='php-var'>file</span> = <span class='php-function'>fopen</span>(<span class='php-string'>"./test.json"</span>, <span class='php-string'>"w+"</span>);<br>
			<span class='php-dollar'>$</span><span class='php-var'>content</span> = <span class='php-function'>array</span>(<br/>
&nbsp;&nbsp;			<span class='php-string'>"mihguel"</span> => <span class='php-function'>array</span>(<br/>
&nbsp;&nbsp;&nbsp;&nbsp;<span class='php-string'>"name"</span> => <span class='php-string'>"Mihguel"</span>,<br/>
&nbsp;&nbsp;&nbsp;&nbsp;<span class='php-string'>"age"</span> => <span class='php-arguments'>29</span>,<br/>
&nbsp;&nbsp;&nbsp;&nbsp;<span class='php-string'>"working"</span> => <span class='php-arguments'>false</span>,<br/>
&nbsp;&nbsp;&nbsp;&nbsp;<span class='php-string'>"studying"</span> => <span class='php-arguments'>true</span>,<br/>
&nbsp;&nbsp;&nbsp;&nbsp;<span class='php-string'>"dating"</span> => <span class='php-arguments'>true</span>,<br/>
&nbsp;&nbsp;&nbsp;&nbsp;<span class='php-string'>"partner"</span> => <span class='php-string'>"amara"</span><br/>
&nbsp;&nbsp;),<br>
&nbsp;&nbsp;<span class='php-string'>"amara"</span> => <span class='php-function'>array</span>(<br/>
&nbsp;&nbsp;&nbsp;&nbsp;<span class='php-string'>"name"</span> => <span class='php-string'>"Amara"</span>,<br/>
&nbsp;&nbsp;&nbsp;&nbsp;<span class='php-string'>"age"</span> => <span class='php-arguments'>23</span>,<br/>
&nbsp;&nbsp;&nbsp;&nbsp;<span class='php-string'>"working"</span> => <span class='php-arguments'>false</span>,<br/>
&nbsp;&nbsp;&nbsp;&nbsp;<span class='php-string'>"studying"</span> => <span class='php-arguments'>true</span>,<br/>
&nbsp;&nbsp;&nbsp;&nbsp;<span class='php-string'>"dating"</span> => <span class='php-arguments'>true</span>,<br/>
&nbsp;&nbsp;&nbsp;&nbsp;<span class='php-string'>"partner"</span> => <span class='php-string'>"mihguel"</span><br/>
&nbsp;&nbsp;)<br>
);<br>
			<span class='php-dollar'>$</span><span class='php-var'>json_data</span> = <span class='php-function'>json_encode</span>(<span class='php-dollar'>$</span><span class='php-var'>content</span>);<br>
			<span class='php-function'>fwrite</span>(<span class='php-dollar'>$</span><span class='php-var'>file</span>, <span class='php-dollar'>$</span><span class='php-var'>json_data</span>);<br>
			<span class='php-function'>fclose</span>(<span class='php-dollar'>$</span><span class='php-var'>file</span>);<br>
			<span class='php-base'>?&gt;</span>
		    </code>
		</section>
		<h3 class='title-sub'>Result</h3>
		<section class='result'>
		    <?php
		    $file = fopen("./test.json", "w+");
		    $content = array(
			"mihguel" => array(
			    "name"=> "Mihguel",
			    "age"=> 29,
			    "working"=> false,
			    "studying"=> true,
			    "dating"=> true,
			    "partner"=> "amara"
			),
			"amara"=> array(
			    "name"=> "Amara",
			    "age"=> 23,
			    "working"=> false,
			    "studying"=> true,
			    "dating"=> true,
			    "partner"=> "mihguel"
			)
		    );
		    $json_data = json_encode($content);
		    echo "<pre>";
		    print_r(json_decode($json_data));
		    echo "</pre>";
		    fwrite($file, $json_data);
		    fclose($file);
		    ?>
		</section>
		<h3 class='title-sub'>Result</h3>
		<section class='result'>
		    <?php
		    /*
		       $file = fopen('./test.txt', 'a+');
		       echo "This is my new content";
		       fwrite($file, 'This is my new content');
		       fclose($file);*/
		    echo "This is my new content";
		    ?>
		</section>
		<h2 class='content' id='unlink'>unlink()</h2>
		<p class='content'>
		    Allow us to delete files.
		</p>
		<section class='code'>
		    <code>
			<span class='php-function'>unlink</span>(<span class='php-arguments'>filename</span>);<br>
		    </code>
		</section>
		<h3 class='title-sub'>Result</h3>
		<section class='result'>
		    <?php
		    //		    unlink("./test.txt");
		    echo "File test.txt sucessfully deleted!";
		    ?>
		</section>
		<p class='content'>
		    In PHP, we can manipulate image files too.
		</p>
		<section class='code'>
		    <code>
			<span class='php-base'>&lt;?php</span><br>
			<span class='php-function'>unlink</span>(<span class='php-string'>"./image.jpg"</span>);<br>
			<span class='php-base'>?&gt;</span>
		    </code>
		</section>
		<div class='danger'>
		    <p>
			This command can delete important files, so watch yourself!
		    </p>
		</div>
		<h2 class='content' id='file_exists'>file_exists()</h2>
		<p class='content'>
		    Verify if a file exists.
		</p>
		<h3 class='title-sub'>PHP Code</h3>
		<section class='code'>
		    <code>
			<span class='php-base'>&lt;?php</span><br>
			<span class='php-function'>if</span>(<span class='php-function'>file_exists</span>("./test.txt")) {<br/>
&nbsp;&nbsp;<span class='php-echo'>echo</span> <span class='php-string'>"File exists!"</span>;<br/>
} else { <br/>
&nbsp;&nbsp;<span class='php-dollar'>$</span><span class='php-var'>file</span> = <span class='php-function'>fopen</span>(<span class='php-string'>"./test.txt"</span>, <span class='php-string'>"a+"</span>);<br>
&nbsp;&nbsp;<span class='php-echo'>echo</span> <span class='php-string'>"File created!"</span>;<br/>
};<br>
			<span class='php-base'>?&gt;</span>
		    </code>
		</section>
		<h3 class='title-sub'>Result</h3>
		<section class='result'>
		    <?php
		    if(file_exists("./test.txt")) {
			echo "File exists!";
		    } else {
			$file = fopen("./test.txt", "a+");
			echo "File created!";
		    };
		    ?>
		</section>
		<h2 class='content' id='fgets'>fgets()</h2>
		<p class='content'>
		    Let us read content from a file. It just read one line. If file have more than one line, we need to use <mark>while</mark>.
		</p>
		<h3 class='title-sub'>PHP Code</h3>
		<section class='code'>
		    <code>
			<span class='php-base'>&lt;?php</span><br>
			<span class='php-function'>if</span>(<span class='php-function'>file_exists</span>("./test.txt")) {<br/>
&nbsp;&nbsp;<span class='php-echo'>echo</span> <span class='php-string'>"File exists!"</span>;<br/>
&nbsp;&nbsp;<span class='php-dollar'>$</span><span class='php-var'>data</span> = <span class='php-function'>fgets</span>(<span class='php-dollar'>$</span><span class='php-var'>file</span>);<br>
&nbsp;&nbsp;<span class='php-echo'>echo</span> <span class='php-dollar'>$</span><span class='php-var'>data</span>;<br/>
} else { <br/>
&nbsp;&nbsp;<span class='php-dollar'>$</span><span class='php-var'>file</span> = <span class='php-function'>fopen</span>(<span class='php-string'>"./test.txt"</span>, <span class='php-string'>"a+"</span>);<br>
&nbsp;&nbsp;<span class='php-echo'>echo</span> <span class='php-string'>"File created!"</span>;<br/>
};<br>
			<span class='php-base'>?&gt;</span>
		    </code>
		</section>
		<h3 class='title-sub'>Result</h3>
		<section class='result'>
		    <?php
		    $file = fopen("./test.txt", "a+");
		    if (file_exists("./test.txt")) {
			echo "File exists!<br>";
			$data = fgets($file);
			echo $data;
		    };
		    ?>
		</section>
		<p class='content'>
		    As we said, it just take the first line.
		</p>
		<h3 class='title-sub'>Result</h3>
		<section class='result'>
		    <?php
		    $file = fopen("./test.txt", "a+");
		    if (file_exists("./test.txt")) {
			while($line = fgets($file)) {
			    $data .= $line . "<br>";
			};
			echo $data;
		    };
		    ?>
		</section>
		<h2 class='content' id='directory_manipulation'>Directories Manipulation</h2>
		<p class='content'>
		    Let's check how to create, delete directories.
		</p>
		<h2 class='content' id='mkdir'>mkdir()</h2>
		<p class='content'>
		    Create a new directory
		</p>
		<h4>Syntax</h4>
		<section class='code'>
		    <code>
			<span class='php-function'>mkdir</span>(path);<br>
		    </code>
		</section>
		<h2 class='content' id='is_dir'>id_dir()</h2>
		<p class='content'>
		    Check if path is a directory or if it exists.
		</p>
		<h4>Syntax</h4>
		<section class='code'>
		    <code>
			<span class='php-function'>is_dir</span>(path);<br>
		    </code>
		</section>
		<h3 class='title-sub'>PHP Code</h3>
		<section class='code'>
		    <code>
			<span class='php-base'>&lt;?php</span><br>
			<span class='php-function'>if</span>(!<span class='php-function'>is_dir</span>(<span class='php-string'>"test"</span>)){<br/>
&nbsp;&nbsp;<span class='php-function'>mkdir</span>(<span class='php-string'>"test"</span>);<br>
&nbsp;&nbsp;<span class='php-echo'>echo</span> <span class='php-string'>"Directory created!"</span>;<br/>
} <span class='php-arguments'>else</span> { <br/>
&nbsp;&nbsp;<span class='php-echo'>echo</span> <span class='php-string'>"Directory exists!"</span>;<br/>
};<br>
			<span class='php-base'>?&gt;</span>
		    </code>
		</section>
		<h3 class='title-sub'>Result</h3>
		<section class='result'>
		    <?php
		    if (!is_dir("test")) {
			mkdir("test");
			echo "Directory created!";
		    } else {
			echo "Directory exists!";
		    };
		    ?>
		</section>
		<h2 class='content' id='rmdir'>rmdir()</h2>
		<p class='content'>
		    Function to delete directories.
		</p>
		<h4>Syntax</h4>
		<section class='code'>
		    <code>
			<span class='php-function'>rmdir</span>(<span class='php-arguments'>path</span>);<br>
		    </code>
		</section>
		<h2 class='content' id='directory_separator'>DIRECTORY_SEPARATOR</h2>
		<p class='content'>
		    The path for a file or directory, depending from Operating System, can be different.
		    So, we can prevent this by using <mark>DIRECTORY_SEPARATOR</mark>.
		</p>
		<h3 class='title-sub'>PHP Code</h3>
		<section class='code'>
		    <code>
			<span class='php-base'>&lt;?php</span><br>
<span class='php-echo'>echo</span> <span class='php-arguments'>DIRECTORY_SEPARATOR</span>.<span class='php-string'>"home"</span>.<span class='php-arguments'>DIRECTORY_SEPARATOR</span>.<span class='php-string'>"mihguel"</span>;<br/>
<span class='php-base'>?&gt;</span>
		    </code>
		</section>
		<h3 class='title-sub'>Result</h3>
		<section class='result'>
		    <?php
		    echo DIRECTORY_SEPARATOR."home".DIRECTORY_SEPARATOR."mihguel";
		    ?>
		</section>
            </section>
        </main>
    </body>
</html>
