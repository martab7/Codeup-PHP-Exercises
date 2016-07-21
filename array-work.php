<?php

$array = ['a', 'b', 'c', 'd', 'e', 'f', 'g', 'h', 'i'];

function noVowels(&$array) {
  foreach ($array as $key => $value) {
    switch ($value) {
      case 'a':
        unset($array[$key]);
        break;
      case 'e':
        unset($array[$key]);
        break;
      case 'i':
        unset($array[$key]);
        break;
      case 'o':
        unset($array[$key]);
        break;
      case 'u':
        unset($array[$key]);
        break;
    }
  }
  return $array;
}

var_dump(noVowels($array));
