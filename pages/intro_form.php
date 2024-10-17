<?php
$submit = $_POST['action'];
if ($submit == 'Send') {
    $namePerson = $_POST['name'];
    $agePerson = $_POST['age'];
    $genrePerson = $_POST['genre'];
    echo "The name is $namePerson <br>";
    echo "The age is $agePerson <br>";
    echo "The genre is $genrePerson";
} else if ($submit == 'Check') {
    $subNetwork = $_POST['sub_network'];
    switch($subNetwork) {
	case 1:
	    echo "<p>2 subnets, 128 addresses per subnet and /24 becomes /25</p>";
	    break;
	case 2:
	    echo "<p>4 subnets, 64 addresses per subnet and /24 becomes /26</p>";
	    break;
	case 3:
	    echo "<p>8 subnets, 32 addresses per subnet and /24 becomes /27</p>";
	    break;
	case 4:
	    echo "<p>16 subnets, 16 addresses per subnet and /24 becomes /28</p>";
	    break;
	case 5:
	    echo "<p>32 subnets, 8 addresses per subnet and /24 becomes /29</p>";
	    break;
	case 6:
	    echo "<p>64 subnets, 4 addresses per subenet and /24 becomes /30</p>";
	    break;
	case 7:
	    echo "<p>128 subnets, 2 addresses per subnet and /24 becomes /31</p>";
	    break;
	case 8:
	    echo "<p>256 subnets, 1 addresses per subnet and /24 becomes /32</p>";
	    break;
	default:
	    $sum = $subNetwork + 24;
	    echo "<p>Error! /24 don't support /${sum}</p>";
	    break;
    };
} else if ($submit == 'While') {
    $counter = $_POST['counter'];
    $limitValue = $_POST['limit_value'];
    $increment = $_POST['increment'];
    $option = $_POST['option'];
    if ($option == 'increment') {
        if ($counter >= $limitValue) {
            echo "<script>
window.alert('The counter value must be less than limitValue value!');
window.location.href = '/pages/module_03/05_repetition_structure.php';
</script>";
            exit();
        }
        while($counter <= $limitValue) {
            echo "<pre>counter match <b>$counter</b></pre>";
            $counter = $counter + $increment;
        };
    } else {
        if ($counter <= $limitValue) {
            echo "<script>
window.alert('The counter value must be greater than limitValue value!');
window.location.href = '/pages/module_03/05_repetition_structure.php';
</script>";
            exit();
        }
        while($counter >= $limitValue) {
            echo "<pre>counter match <b>$counter</b></pre>";
            $counter = $counter -$increment;
        };
    };
};
?>
