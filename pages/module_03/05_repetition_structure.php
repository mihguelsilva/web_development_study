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
    <body name="Repetition Structure|Repetition Structure|PHP Repetition Structure (While,Do While,For)">
        <main>
            <section class='content' id='class'>
		<h2 class="content" id="While">While</h2>
		<p class='content'>
		    <mark>While</mark> need a initial value which it's called <mark>counter</mark>. After defining it,
		    we must place a bound to our counter.
		</p>
		<div class='danger'>
		    <p>
			We must increment the counter, otherwise, it will return the same value in a infinit looping.
		    </p>
		</div>
		<h3 class="title-sub">PHP Code</h3>
		<section class='code'>
		    <code>
			<span class='php-base'>&lt;?php</span><br>
			<span class='php-dollar'>$</span><span class='php-var'>counter</span> = <span class='php-arguments'>1</span>;<br/>
			<span class='php-methods'>while</span>(<span class='php-arguments'>$counter <= 10</span>) {<br/>
&nbsp;&nbsp;<span class='php-echo'>echo</span> <span class='php-string'>"&lt;pre&gt;Counter match &lt;b&gt;$counter&lt;/b&gt;&lt;/pre&gt;&lt;br&gt;"</span>;<br>
&nbsp;&nbsp;<span class='php-methods'>$counter</span>++;<br/>
}<br/>
			<span class='php-base'>?&gt;</span>
		    </code>
		</section>
		<h3 class='title-sub'>Result</h3>
		<section class='result'>
		    <?php
		    $counter = 1;
		    while ($counter <= 10) {
			echo "<pre>Counter match <b>$counter</b> </pre>";
			$counter++;
		    };
		    ?>
		</section>
		<p class='content'>
		    Let's practice a little bit.
		</p>
		<h3 class='title-sub'>Result</h3>
		<section class='result'>
		    <form method="POST" action="/pages/intro_form.php">
			<table class="intro-form">
			    <tr>
				<td>
				    <label for="counter">Inform Counter</label>
				    <input type="number" name="counter" id="counter">
				</td>
			    </tr>
			    <tr>
				<td>
				    <label for="limit-value">Inform limit value</label>
				    <input type="number" name="limit_value" id="limit-value">
				</td>
			    </tr>
			    <tr>
				<td>
				    <label for="increment">Inform Increment</label>
				    <input type="number" name="increment" id="increment">
				</td>
			    </tr>
			    <tr>
				<td>
				    <label for="option">Increment Option</label>
				    <select name="option" id="option">
					<option value="increment">Increment</option>
					<option value="decrement">Decrement</option>
				    </select>
				</td>
			    </tr>
			    <tr>
				<td>
				    <input type="submit" name="action" value="While">
				</td>
			    </tr>
			</table>
		    </form>
		</section>
		<h3 class="title-sub">PHP Code</h3>
		<section class='code'>
		    <code>
			<span class='php-base'>&lt;?php</span><br>
			<span class='php-dollar'>$</span><span class='php-var'>counter</span> = <span class='php-arguments'>$_POST['counter']</span>;<br/>
			<span class='php-dollar'>$</span><span class='php-var'>limitValue</span> = <span class='php-arguments'>$_POST['limit_value']</span>;<br/>
			<span class='php-dollar'>$</span><span class='php-var'>increment</span> = <span class='php-arguments'>$_POST['increment']</span>;<br/>
			<span class='php-dollar'>$</span><span class='php-var'>option</span> = <span class='php-arguments'>$_POST['option']</span>;<br/>
			<span class='php-methods'>if</span>(<span class='php-arguments'>$option == "increment"</span>) {<br/>
&nbsp;&nbsp;<span class='php-methods'>if</span>(<span class='php-arguments'>$counter >= $limitValue</span>){<br/>
&nbsp;&nbsp;&nbsp;&nbsp;<span class='php-echo'>echo</span> <span class='php-string'>"&lt;script&gt</span><br>
			<span class='php-string'>window.alert('counter value must be lower than limitValue value!')</span><br>
			<span class='php-string'>window.localtion.href = '/page'</span><br>
			<span class='php-string'>&lt;/script&gt;"</span>;<br>
&nbsp;&nbsp;&nbsp;&nbsp;<span class='php-methods'>exit()</span>;<br/>
&nbsp;&nbsp;};<br/>
&nbsp;&nbsp;<span class='php-methods'>while</span>(<span class='php-arguments'>$counter <= $limitValue</span>) {<br/>
&nbsp;&nbsp;&nbsp;&nbsp;<span class='php-echo'>echo</span> <span class='php-string'>"&lt;pre&gt;Counter match &lt;b&gt;$counter&lt;/b&gt;&lt;/pre&gt;&lt;br&gt;"</span>;<br>
&nbsp;&nbsp;&nbsp;&nbsp;<span class='php-dollar'>$</span><span class='php-var'>counter</span> = <span class='php-arguments'>$counter + $increment</span>;<br/>
&nbsp;&nbsp;};<br/>
} <span class='php-methods'>else</span> {<br/>
&nbsp;&nbsp;<span class='php-methods'>if</span>(<span class='php-arguments'>$counter <= $limitValue</span>){<br/>
&nbsp;&nbsp;&nbsp;&nbsp;<span class='php-echo'>echo</span> <span class='php-string'>"&lt;script&gt</span><br>
			<span class='php-string'>window.alert('counter value must be greater than limitValue value!')</span><br>
			<span class='php-string'>window.localtion.href = '/page'</span><br>
			<span class='php-string'>&lt;/script&gt;"</span>;<br>
&nbsp;&nbsp;&nbsp;&nbsp;<span class='php-methods'>exit()</span>;<br/>
&nbsp;&nbsp;};<br/>
&nbsp;&nbsp;<span class='php-methods'>while</span>(<span class='php-arguments'>$counter >= $limitValue</span>) {<br/>
&nbsp;&nbsp;&nbsp;&nbsp;<span class='php-echo'>echo</span> <span class='php-string'>"&lt;pre&gt;Counter match &lt;b&gt;$counter&lt;/b&gt;&lt;/pre&gt;&lt;br&gt;"</span>;<br>
&nbsp;&nbsp;&nbsp;&nbsp;<span class='php-dollar'>$</span><span class='php-var'>counter</span> = <span class='php-arguments'>$counter - $increment</span>;<br/>
&nbsp;&nbsp;};<br/>
};<br/>
			<span class='php-base'>?&gt;</span>
		    </code>
		</section>
		<h2 class="content" id="Do/While">Do While</h2>
		<p class='content'>
		    <mark>Do While</mark> is the oppositive of the <mark>While</mark>.
		</p>
		<ol class="content">
		    <li>The code is executed</li>
		    <li>The loop is executed</li>
		</ol>
		<div class='important'>
		    <p>
			In <mark>while</mark>, during the verification, if it return <mark>false</mark>, then it doesn't enter
			the loop.
		    </p>
		    <br/>
		    <p>
			In <mark>do/while</mark>, the code is executed and then it will be verified. If it returns <mark>false</mark>
			then, it doesn't enter the loop.
		    </p>
		</div>
		<h3 class="title-sub">PHP Code</h3>
		<section class='code'>
		    <code>
			<span class='php-base'>&lt;?php</span><br>
			<span class='php-dollar'>$</span><span class='php-var'>counter</span> = <span class='php-arguments'>1</span>;<br/>
			<span class='php-methods'>do</span> {<br/>
&nbsp;&nbsp;<span class='php-echo'>echo</span> <span class='php-string'>"&lt;pre&gt;Counter match &lt;b&gt;$counter&lt;/b&gt;&lt;/pre&gt;&lt;br&gt;"</span>;<br>
&nbsp;&nbsp;<span class='php-arguments'>$counter++</span>;<br/>
} <span class='php-methods'>while</span>(<span class='php-arguments'>$counter <= 10</span>);<br/>
			<span class='php-base'>?&gt;</span>
		    </code>
		</section>
		<h3 class='title-sub'>Result</h3>
		<section class='result'>
		    <?php
		    $counter = 1;
		    do {
			echo "<pre>Counter match <b>$counter</b></pre>";
			$counter++;
		    } while($counter <= 10);
		    ?>
		</section>
		<div class='important'>
		    <p>
			The difference between <mark>while</mark> and <mark>do/while</mark> it's obvious, because, in the
			<mark>do/while</mark> instance, first, we've declared a <mark>counter</mark>, then, inside block's
			do, it's value it's returned and the <mark>while</mark> verification will be done. If it returns
			<mark>false</mark>, then, it doesn't enter in loop.
		    </p>
		</div>
		<h3 class="title-sub">PHP Code</h3>
		<section class='code'>
		    <code>
			<span class='php-base'>&lt;?php</span><br>
			<span class='php-dollar'>$</span><span class='php-var'>counter</span> = <span class='php-arguments'>20</span>;<br/>
			<span class='php-methods'>do</span> {<br/>
&nbsp;&nbsp;<span class='php-echo'>echo</span> <span class='php-string'>"&lt;pre&gt;Counter match &lt;b&gt;$counter&lt;/b&gt;&lt;/pre&gt;&lt;br&gt;"</span>;<br>
&nbsp;&nbsp;<span class='php-arguments'>$counter++</span>;<br/>
} <span class='php-methods'>while</span>(<span class='php-arguments'>$counter <= 10</span>);<br/>
			<span class='php-base'>?&gt;</span>
		    </code>
		</section>
		<h3 class='title-sub'>Result</h3>
		<section class='result'>
		    <?php
		    $counter = 20;
		    do {
			echo "<pre>Counter match <b>$counter</b></pre>";
			$counter++;
		    } while($counter <= 10);
		    ?>
		</section>
		<p class='content'>
		    Let's try both <mark>while</mark> and <mark>do/while</mark> using previous code.
		</p>
		<h3 class="title-sub">PHP Code</h3>
		<section class='code'>
		    <code>
			<span class='php-base'>&lt;?php</span><br>
			<span class='php-dollar'>$</span><span class='php-var'>counter</span> = <span class='php-arguments'>20</span>;<br/>
			<span class='php-methods'>do</span> {<br/>
&nbsp;&nbsp;<span class='php-echo'>echo</span> <span class='php-string'>"&lt;pre&gt;Counter match in &lt;b&gt;Do/While $counter&lt;/b&gt;&lt;/pre&gt;&lt;br&gt;"</span>;<br>
&nbsp;&nbsp;<span class='php-arguments'>$counter++</span>;<br/>
} <span class='php-methods'>while</span>(<span class='php-arguments'>$counter <= 10</span>);<br/>
			<span class='php-methods'>while</span> (<span class='php-arguments'>$counter <= 10</span>) {<br/>
&nbsp;&nbsp;<span class='php-echo'>echo</span> <span class='php-string'>"&lt;pre&gt;Counter match in &lt;b&gt;While $counter&lt;/b&gt;&lt;/pre&gt;&lt;br&gt;"</span>;<br>
&nbsp;&nbsp;<span class='php-arguments'>$counter++</span>;<br/>
}<br/>
			<span class='php-base'>?&gt;</span>
		    </code>
		</section>
		<h3 class='title-sub'>Result</h3>
		<section class='result'>
		    <?php
		    $counter = 20;
		    do {
			echo "Counter match in <b>Do/While $counter</b></pre>";
			$counter++;
		    } while($counter <= 10);
		    while ($counter <= 10) {
			echo "<pre>Counter match in <b>While $counter</b></pre>";
			$counter++;
		    };
		    ?>
		</section>
		<h2 class="content" id="For">For</h2>
		<div class='important'>
		    <p>
			<mark>For</mark> it's much more used than <mark>While</mark> and <mark>Do/While</mark> together.
		    </p>
		</div>
		<p class='content'>
		    <mark>For</mark> got three parameters:
		</p>
		<ol class="content">
		    <li>Counter</li>
		    <li>Operation</li>
		    <li>Increment</li>
		</ol>
		<h3 class="title-sub">PHP Code</h3>
		<section class='code'>
		    <code>
			<span class='php-base'>&lt;?php</span><br>
			<span class='php-methods'>for</span>(<span class='php-dollar'>$</span><span class='php-var'>counter</span> = 0; <span class='php-arguments'>$counter &lt; 10</span>; <span class='php-arguments'>$counter++</span>) {<br/>
&nbsp;&nbsp;<span class='php-echo'>echo</span> <span class='php-arguments'>$counter</span>;<br/>
}<br/>
			<span class='php-base'>?&gt;</span>
		    </code>
		</section>
		<h3 class='title-sub'>Result</h3>
		<section class='result'>
		    <?php
		    for ($counter = 0; $counter < 10; $counter++) {
			echo "<pre>Counter match <b>$counter</b></pre>";
		    }
		    ?>
		</section>
		<p class='content'>
		    Let's check a real <mark>For</mark> example in an site.
		</p>
		<h3 class='title-sub'>Result</h3>
		<section class='result'>
		    <?php
		    echo "<table class='intro-form'>";
		    // day birth
		    echo "<tr><td>";
		    echo "<label for='day'>Birth Day</label>";
		    echo "<select name='day' id='day'>";
		    for ($day = 1; $day <= 31; $day++) {
			echo "<option value='$day'>$day</option>";
		    }
		    echo "</select>";
		    echo "</tr></td>";
		    // month birth
		    $monthArray = array("January", "February", "March", "April", "May", "June", "July", "August", "September", "October", "November", "December");
		    echo "<tr><td>";
		    echo "<label for='month'>Month Birth</label>";
		    echo "<select id='month' name='month'>";
		    for ($a = 0; $a < count($monthArray); $a++) {
			echo "<option value='$monthArray[$a]'>$monthArray[$a]</option>";
		    }
		    echo "</select>";
		    echo "</td></tr>";
		    // year birth
		    echo "<tr><td>";
		    echo "<label for='year'>Birth Year</label>";
		    echo "<select name='year' id='year'>";
		    for ($year = date("Y"); $year >= 1900; $year--) {

			echo "<option value='$year'>$year</option>";
		    }
		    echo "</select>";
		    echo "</td></tr>";
		    echo "<tr><td>";
		    echo "<input type='submit' name='action' value='Person'>";
		    echo "</td></tr>";
		    echo "</table>";
		    ?>
		</section>
            </section>
        </main>
    </body>
</html>
