<?php

for($fizzbuzz = 0; $fizzbuzz <= 100; $fizzbuzz++) 
{
	if($fizzbuzz % 15 === 0)
	{
		echo 'fizzbuzz' . PHP_EOL;
	} 
	elseif ($fizzbuzz % 5 === 0)
	{
		echo 'buzz' . PHP_EOL;
	} 
	elseif ($fizzbuzz % 3 === 0)
	{
		echo 'fizz' . PHP_EOL;
	} 
	else
	{
		echo $fizzbuzz . PHP_EOL;
	};
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

