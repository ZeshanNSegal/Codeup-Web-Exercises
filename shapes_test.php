<?php

require_once "rectangle.php";
require_once "square.php";

$rect1 = new Rectangle(9,8);
echo "The area of rectangle 1 is: " . $rect1->getArea() . PHP_EOL;

$rect2 = new Rectangle(4,5);
echo "The area of rectangle 2 is: " . $rect2->getArea() . PHP_EOL;

$square1 = new Square(5);
echo "The perim of square 1 is: " . $square1->getPerimeter() . PHP_EOL;

$square2 = new Square(4);
echo "The perim of square 2 is: " . $square2->getPerimeter() . PHP_EOL;