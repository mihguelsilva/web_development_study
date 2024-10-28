<?php
if (isset($_POST["name"])) {
    $NAME = addslashes($_POST["name"]);
    $AGE = addslashes($_POST["age"]);
    $EMAIL = addslashes($_POST["email"]);
    $PHONE = addslashes($_POST["phone"]);
    $GENDER = addslashes($_POST["gender"]);
    if (!empty($NAME) && !empty($AGE) && !empty($EMAIL) && !empty($PHONE) && !empty($GENDER)) {
	$LEN = (int) strlen($_POST["phone"]);
	    if ($LEN != 12) {
	    echo "
<script>
window.alert('".strlen($_POST["phone"])."');
window.alert('You must input an valid phone number!');
window.location.href = '/pages/module_03/11_manipulate_forms.php';
</script>
";
	} else {
	    // we will store it into database
	    // print into screen
	    // do validation
	    $PHONE_NUMBER = "(".substr($_POST["phone"],0,3).")".substr($_POST["phone"],3,5)."-".substr($_POST["phone"],8);
	    echo "The name it's $NAME <br>";
	    echo "The age of $NAME it's $AGE years<br>";
	    echo "The email of $NAME it's $EMAIL <br>";
	    echo "The phone of $NAME it's $PHONE_NUMBER <br>";
	    echo "The gender of $NAME it's $GENDER <br>";
	    header("location: /index.php");
	};
    };
};
?>
