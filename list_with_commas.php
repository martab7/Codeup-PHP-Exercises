<?php

$physicistsString = 'Gordon Freeman, Samantha Carter, Sheldon Cooper, Quinn Mallory, Bruce Banner, Tony Stark';

$physicistsArray = explode(", ", $physicistsString);

function humanizedList($array, $order = false) {
  if($order) {
    sort($array);
  }
  var_dump($array);
  $lastItem = array_pop($array);
  $newArray = implode(", ", $array) . ", and {$lastItem}";
  return $newArray;
}

$famousFakePhysicists = humanizedList($physicistsArray, true);

echo "Some of the most famous fictional theoretical physicists are {$famousFakePhysicists}.\n";
