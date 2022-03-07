<?php
class Menu {
  public $name;
  public __construct($name) {
    $this->name = $name;
  }
  public function hello() {
    echo '私は'.$this->name.'です';
  }
}

$curry = Menu('CURRY');
$pasta = Menu('PASTA');

$curry->hello();
echo '<br>';
$pasta->hello();

?>