<?php
abstract class Name {
    public $name;
    public $age;
    public function CallMyName() {
        echo "Hello " . $this->name;
    }
    public function abstract function teste();
}
?>
