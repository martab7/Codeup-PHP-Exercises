<?php
fwrite(STDOUT, 'Enter starting number: ');
$start = (int) fgets(STDIN);

fwrite(STDOUT, 'Enter ending number: ');
$end =  (int) fgets(STDIN);

fwrite(STDOUT, 'Increment by: ');
$increment = (int) fgets(STDIN);

if($increment < 1) {
  $increment = 1;
}

for($a = $start; $a <= $end; $a += $increment) {
  echo "{$a}\n";
}

//-----FIZZBUZZ -----

for($a = 0; $a <=100; $a++){
  if($a % 15 == 0) {
    echo "FizzBuzz\n";
  } elseif ($a % 3 == 0) {
    echo "Fizz\n";
  } elseif ($a % 5 == 0) {
    echo "Buzz\n";
  } else {
    echo "{$a}\n";
  }
}
