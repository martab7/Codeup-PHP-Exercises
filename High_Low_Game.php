<?php

$min = 1;
$max = 100;

if($argc === 3) {
  if(is_numeric($argv[1]) && is_numeric($argv[2])) {
    $min = $argv[1];
    $max = $argv[2];
  } else {
      fwrite(STDERR, "You need to pass 2 numeric values\n");
      exit(1);
  }
}

$randomNumber = mt_rand($min, $max);

do{
  fwrite(STDOUT, 'Guess my number! ');
  $guess = fgets(STDIN);

  if($guess < $argv[1]) {
    fwrite(STDOUT, "$guess is less than the minimum. Please select a number that is greater than {$argv[1]}\n");
  } elseif($guess > $argv[2]) {
    fwrite(STDOUT, "$guess is higher than the max. Please select a number that is greater than {$argv[2]}\n");
  } else {
    if($guess < $randomNumber) {
      fwrite(STDOUT, "The answer is greater than $guess\n");
    } elseif ($guess > $randomNumber) {
      fwrite(STDOUT, "The answer is less than $guess\n");
    } else {
      fwrite(STDOUT, "Correct\! \n");
      exit(0);
    }
}
} while($guess !== $randomNumber);
