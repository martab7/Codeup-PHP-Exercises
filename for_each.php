<?php

$things = array('Sgt. Pepper', "11", null, array(1,2,3), 3.14, "12 + 7", false, (string) 11);

foreach ($things as $thing) {
  if(is_int($thing)){
    echo "{$thing} is an int\n.";
  } elseif (is_float($thing)) {
    echo "{$thing} is an double\n.";
  } elseif (is_bool($thing)){
    echo "{$thing} is a boolean\n.";
  } elseif (is_array($thing)){
    echo $thing . PHP_EOL;
  } elseif (is_null($thing)){
    echo "{$thing} is a null\n.";
  } elseif (is_string($thing)){
    echo "{$thing} is a string\n.";
  }
}

foreach($things as $thing) {
  if(is_scalar($thing)){
    echo "{$thing} is either a float, integer, string, or boolean\n.";
  }
}

foreach($things as $thing) {
  if(is_array($thing)) {
    foreach($thing as $other_things) {
      echo $other_things . ' ';
    }
  } else {
    echo $thing . PHP_EOL;
  }
}
