<?php

$a = 10;
$b = 20;
$c = '20';

echo "a is $a" . PHP_EOL;
echo "b is $b" . PHP_EOL;
echo "c is $c" . PHP_EOL;


if ($a < $b) {
     echo "$a is less than $b\n";
} else {
     echo "$a is greater than $b\n";
}


if ($b >= $c) {
     echo "$b is greater than or equal to $c\n";
} else {
     echo "$b is NOT greater than or equal to $c\n";
}


if ($b >= $c) {
     echo "$b is less than $c\n";
} else {
     echo "$b is greater than or equal to $c\n";
}


if ($b === $c) {
     echo "$b is identical to $c" . PHP_EOL;
} elseif  ($b != $c){
     echo "$b is not equal to $c" . PHP_EOL;
} elseif ($b == $c) {
     echo "$b is equal to $c" . PHP_EOL;
} elseif ($b !== $c) {
     echo "$b is not identical to $c" . PHP_EOL;
}


if ($a < $b) {
     echo "$a is less than $b\n";
}

if ($b > $a) {
     echo "$b is greater than $a\n";
}

if ($b >= $c) {
     echo "$b is greater than or equal to $c\n";
}

if ($b <= $c) {
     echo "$b is less than or equal to $c\n";
}

if ($b == $c) {
     echo "$b is equal to $c\n";
}

if ($b === $c) {
     echo "$b is is not equal to $c\n";
}

if ($b != $c) {
     echo "$b is not equal to $c\n";
}

if ($b !== $c) {
     echo "$b is not identical to $c\n";
}

 ?>
