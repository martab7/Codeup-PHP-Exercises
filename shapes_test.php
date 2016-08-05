<?php
require_once('Rectangle.php');
require_once('Square.php');

$rectangle = new Rectangle(5,6);
echo $rectangle->area() . PHP_EOL;
echo $rectangle->perimeter() . PHP_EOL;

$square = new Square(5);
echo $square->area() . PHP_EOL;
echo $square->perimeter() . PHP_EOL;
?>
