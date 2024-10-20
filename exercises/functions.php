<?php
function getSelectYear($name, $id, $label) {
    for($a = 1900; $a < date("Y"); $a--) {
	return "<options value='$a'>$a</options>";
    };
}
function greeting() {
    return "Hello World";
};
function variousParameters() {
    var_dump= func_get_args();

}
?>
