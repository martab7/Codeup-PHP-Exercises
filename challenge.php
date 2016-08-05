<?php
//-----------Problem 1 -------------
// function problemOne() {
//   do{
//     echo 'Give me a number between 1 - 9 and I will output its string equivalent or type \'x\' to exit';
//     $number = fgets(STDIN);
//
//     switch ($number){
//       case 1:
//           // print_r($allContacts);
//           echo 'One';
//           break;
//       case 2:
//         echo 'Two';
//         break;
//       case 3:
//         echo 'Three';
//         break;
//       case 4:
//         echo 'Four';
//         break;
//       case 5:
//         echo 'Five';
//         break;
//       case 6:
//         echo 'Six';
//         break;
//       case 7:
//         echo 'Seven';
//         break;
//       case 8:
//         echo 'Eight';
//         break;
//       case 9:
//         echo 'Nine';
//         break;
//       default:
//         echo 'Please enter a number or \'x\'.';
//     }
//
//   } while($number != 'x');
// };

//---------Problem 2 --------------

// $a = $argv[1];
// $b = $argv[2];
//
// function validate($a, $b) {
//   if(is_numeric($a) && is_numeric($b)) {
//     return true;
//   }
//   if(!is_numeric($a)) {
//     fwrite(STDERR, "$a should be a number.\n");
//     return false;
//     exit(1);
//   }
//   if(!is_numeric($b)) {
//     fwrite(STDERR, "$b should be a number.\n");
//     return false;
//     exit(1);
//   }
// }
//
// function a($a){
//   for($i = 1; $i < $a; $i++){
//     if($a % $i == 0 ) {
//       $arrayA[] = $i;
//     }
//   }
// }
//
// function b($b){
//   for($j = 1; $j < $b; $j++){
//     if($b % $j == 0 ) {
//       $arrayB[] = $j;
//     }
//   }
// }
//
// function math($a, $b) {
//   $validated = validate($a, $b);
//   $a = [];
//   $b = [];
//
//   if($validated == true) {
//     a($a);
//
//     b($b);
//
//     $newArray = array_combine($a, $b);
//
//     foreach ($newArray as $key => $value) {
//       if($key == $value){
//         echo $value;
//       }
//     }
//   } else {
//     echo 'not validated entries';
//   }
// }
//
// echo math($a, $b);


//------Problem 5-------

$a = $argv[1];

function radianCoventer($variable){
  $answer = ($variable * pi()) / 180;
  echo float($answer);
}

function degreeConvert($variable) {
  $answer = $variable * (180/ pi());
  echo float($answer);
}

function convert(){
  do{
    echo '(r)adians or (d)degrees or \'x\' to exit?';
    $request = fgets(STDIN);

    switch($request){
      case 'r':
        echo radianCoventer($a) . r;
        break;
      case 'd':
        echo degreeConvert($a) . dr;
        break;
    }
  } while($request != 'x');
}

echo convert($a);

?>
