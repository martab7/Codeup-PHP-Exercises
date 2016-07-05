<?php

$randomNumber = mt_rand(0, 100);

do{
  fwrite(STDOUT, 'Guess my number! ');
  $guess = fgets(STDIN);

  if($guess < $randomNumber) {
    fwrite(STDOUT, "The answer is greater than $guess\n");
  } elseif ($guess > $randomNumber) {
    fwrite(STDOUT, "The answer is less than $guess\n");
  } else {
    fwrite(STDOUT, "Correct\! \n");
    exit(0);
  }
} while($guess !== $randomNumber);
