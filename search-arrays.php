<?php

$names = ['Tina', 'Dana', 'Mike', 'Amy', 'Adam'];

$compare = ['Tina', 'Dean', 'Mel', 'Amy', 'Michael'];

function searchName($needle, $names) {
  $result = array_search($needle, $names);

  if($result) {
    return "True\n";
  } else {
    return "False\n";
  }
}

echo searchName('Dana', $compare);

function compareArrays($firstArray, $secondArray) {
  $count = 0;
  foreach($firstArray as $element) {
    $result = array_search($element, $secondArray);
    if($result || $result === 0) {
      $count++;
    }
  }
  return $count;
}

echo compareArrays($names, $compare);
