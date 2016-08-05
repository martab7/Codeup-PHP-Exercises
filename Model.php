<?php

class Model{

  private $attributes = [];

  public function __set($name, $value){
    $this->attributes[$name] = $value;
  }

  public function __get($name){
    if (array_key_exists($name, $this->attributes)) {
      return $this->attributes[$name];
    }
    return null;
  }

}

$test = new Model();

$test->first_name = 'Anthony';
$test->last_name = 'Martinez';
var_dump($test);

echo $test->first_name;
echo $test->last_name;

?>
