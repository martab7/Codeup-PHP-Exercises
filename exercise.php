<?php

$array = ['e', 'a', 'g', 'c', 'i', 'd', 'f', 'b', 'h'];

$numberArray = [];

function sortArray($array) {
  $numberArray = [];
  foreach($array as $letter) {
    $number = ord($letter);
    $numberArray[] = $number;
  }
  $numberArray = cmp($numberArray);
  return $numberArray;
}

$newArray = sortArray($array);

foreach ($newArray as $key => $value) {
  $character = chr($value);
  $final[] = $character;
}
var_dump($final);


function cmp($array) {
  for($i = 0; $i < count($array); $i++)
    for($j = $i + 1; $j < count($array)-1; $j++) {
      $a = $array[$i];
      $b = $array[$j];
      if ($a > $b) {
          $temp = $array[$i];
          $array[$i] = $array[$j];
          $array[$j] = $temp;
        }
      }
  return $array;
}
