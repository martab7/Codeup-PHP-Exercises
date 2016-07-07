<?php

$a = $argv[1];
$b = $argv[2];


function validate($a, $b) {
  if(is_numeric($a) && is_numeric($b)) {
    return true;
  }
  if(!is_numeric($a)) {
    fwrite(STDERR, "$a should be a number.\n");
    return false;
    exit(1);
  }
  if(!is_numeric($b)) {
    fwrite(STDERR, "$b should be a number.\n");
    return false;
    exit(1);
  }
}

function math($a, $b, $divide = false) {
  $validated = validate($a, $b);
  if($validated == true) {
    echo add($a, $b), PHP_EOL;
    echo subtract($a, $b), PHP_EOL;
    echo multiply($a, $b), PHP_EOL;
    echo divide($a, $b), PHP_EOL;
    echo modulus($a, $b), PHP_EOL;
  } elseif($validated == true && $divide == true) {
    echo "yes";
  } else {
    echo "Could not process your arguments.\n";
  }
}

function add($a, $b)
{
    return $a + $b;
}

function subtract($a, $b)
{
    return $a - $b;
}

function multiply($a, $b)
{
    return $a * $b;
}

function divide($a, $b)
{
    return $a / $b;
}

function modulus($a, $b)
{
    return $a % $b;
}
echo math($a, $b);
