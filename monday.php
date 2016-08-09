<?php

$uncapitalized = ['arches', 'badlands', 'carlesbad', 'denali'];
$to_capitalize = ['denali', 'badlands'];

function manipulate($array){
  $newArray = [];
  foreach ($array as $key => $park) {
    if($key % 2 == 1){
      $park = ucfirst($park);
      $newArray[] = $park;
    } else {
      $newArray[] = $park;
    }
  }
  return $newArray;
}


function alter($array1, $array2){
  
}
var_dump(manipulate($uncapitalized));
?>
