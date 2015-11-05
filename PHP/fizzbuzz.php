<?php

// Dump arg count
var_dump($argc);
// Dump arg vars
var_dump($argv);

$max = $argv[1];
$fbVarMin = $argv[2];
$fbVarMax = $argv[3];
// $fizz = $argv[5];
// $buzz = $argv[4];

fwrite(STDOUT, 'FIZZBUZZ! Enter 3 numbers. One for Fizzbuzz One for a minimum and one for a maximum. ' . PHP_EOL);

for($fizzbuzz = 0; $fizzbuzz < $max; $fizzbuzz++) {
	echo $fizzbuzz . PHP_EOL;

	if($fizzbuzz % $fbVarMin === 0 && $fizzbuzz % $fbVarMax === 0){
		echo("fizzbuzz" . PHP_EOL);
	} elseif ($fizzbuzz % $fbVarMin === 0){
		echo("fizz" . PHP_EOL);
	} elseif ($fizzbuzz % $fbVarMax === 0){
		echo("buzz" . PHP_EOL);
	} else{
		echo "$fizzbuzz" . PHP_EOL;
	}
}

echo "___________________________";

$fizzbuzz = 0;

while($fizzbuzz < 100){
	$fizzbuzz++;
	if($fizzbuzz % 3 === 0 && $fizzbuzz % 5 === 0) {
	echo("fizzbuzz\n");

	} elseif($fizzbuzz % 3 === 0){
		echo("fizz\n");

	} elseif($fizzbuzz % 5 === 0){
		echo("buzz\n");
		
	}else{
		echo "$fizzbuzz\n";
	}
}

