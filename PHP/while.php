<?php

$test = 5;
while ($test <= 15) {
	echo "\$test is equal to {$test}" . PHP_EOL;
	++$test;
}



$evenNum = 1;
while ($evenNum <= 100) {
	if($test % 2 == 0){
	echo "\$evenNum is equal to {$evenNum}" . PHP_EOL;	
	}
	$evenNum += 1;
}

$oddNum = 1;
while ($oddNum <= 100) {
	echo "\$oddNum is equal to {$oddNum}" . PHP_EOL;
	$oddNum += 2;
}

// // Example from class below for do-while loop

// do {
// 	echo "Please input your name";
// 	$name = getValidNameFromUser();

// } while (!is_string($name));
