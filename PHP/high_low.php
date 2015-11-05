<?php

// Dump arg count
var_dump($argc);
// Dump arg vars
var_dump($argv);

if ($argc < 3){
	die('Please start over and pass me a min and max' . PHP_EOL);
}

$minimum = $argv[1];
$maximum = $argv[2]; 
$random = mt_rand ($minimum, $maximum);

echo "\$random value is $random" . PHP_EOL;

fwrite(STDOUT, 'Guess the number, and I\'ll let you know if you need to guess higher or lower. ' . PHP_EOL);

do {

	$userGuess = trim(fgets(STDIN));
	var_dump($userGuess);

	if($userGuess < $random){
		//Output the user's guess
		fwrite(STDOUT, "GUESS HIGHER" . PHP_EOL);
		// echo 'HIGHER' . PHP_EOL;
	} elseif($userGuess > $random){
		//Output the user's guess
		fwrite(STDOUT, "GUESS LOWER" . PHP_EOL);
		// echo 'LOWER' . PHP_EOL;
	} 
} while ($userGuess != $random);

//Output the user's guess
fwrite(STDOUT, "GOOD GUESS" . PHP_EOL);


