<?php

$names = ['Tina', 'Dana', 'Mike', 'Amy', 'Adam'];

$compare = ['Tina', 'Dean', 'Mel', 'Amy', 'Michael'];

function searchName($needle, $names) {
  $result = array_search($needle, $names);
  if($result) {
    return true;
  } else {
    return false;
  }
}
//
// function compareArrays($firstArray, $secondArray) {
//   foreach($firstArray as $element) {
//     $result = array_search($element, $secondArray);
//     if(!$result || $result !== 0) {
//       array_push($compare, $name);
//     }
//   }
//   return $count;
// }

function combine_arrays($names, $compare){
  $newArray = $compare;
  foreach($names as $key => $name) {
    if(searchName($name, $names)){
    array_push($compare, $name);
    }
  }

  return $compare;
}

var_dump(combine_arrays($names, $compare));
