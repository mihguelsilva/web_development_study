<?php
class Calculate {
    /*
      public function sum($n1, $n2) {
      return $n1 + $n2;
      }
      public function sub($n1, $n2) {
      return $n1 - $n2;
      }
      public function mult($n1, $n2) {
      return $n1 * $n2;
      }
      public function div($n1, $n2) {
      if ($n2 == 0) {
      return "Error! We can't divide any number per zero!";
      exit();
      } else {
      return $n1 / $n2;
      }
      }
     */
    public $n1;
    public $n2;
    private $res;
    public function sum() {
        $this->res = $this->n1 + $this->n2;
    }
    public function sub() {
        $this->res = $this->n1 - $this->n2;
    }
    public function mult() {
        $this->res = $this->n1 * $this->n2;
    }
    public function div() {
        if ($n2 == 0) {
            return "Error! We can't divide any number per zero!";
            exit();
        } else {
            $this->res = $this->n1 / $this->n2;
        }
    }
    public function getRes() {
        return $this->res;
    }
}
?>
