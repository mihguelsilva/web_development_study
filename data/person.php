<?php
class Person {
    public $name;
    public $age;
    public $dating;
    public $partner;
    public function __construct($name, $age, $dating, $partner) {
	$this->name = $name;
	$this->age = $age;
	$this->dating = $dating;
	$this->partner = $partner;
    }
    public function greeting() {
	return "Hello there, my name is " . $this->name;
    }
    public function declaration() {
	return "I want to scream to the whole world: " . $this->name . " loves " . $this->partner;
    }
    public function relationship() {
	return "I'm in love with " . $this->partner;
    }
}
?>
