<?php

$randomNumber = mt_rand($argv[1], $argv[2]);

do{
  fwrite(STDOUT, 'Guess my number! ');
  $guess = fgets(STDIN);

  if($guess < $argv[1]) {
    fwrite(STDOUT, "$guess is less than the minimum. Please select a number that is greater than {$argv[1]}");
  } elseif($guess > $argv[2]) {
    fwrite(STDOUT, "$guess is higher than the max. Please select a number that is greater than {$argv[2]}");
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
