<?php

$things = array('Sgt. Pepper', "11", null, array(1,2,3), 3.14, "12 + 7", false, (string) 11);

foreach ($things as $thing1) 
{
	if (is_string($thing1))
	{
		echo "string" .PHP_EOL;
	}
	elseif (is_null($thing1))
	{
		echo "null" .PHP_EOL;
	}
	elseif (is_array($thing1))
	{
		echo "array" .PHP_EOL;
	}
	elseif (is_float($thing1))
	{
		echo "float" .PHP_EOL;
	}
	elseif (is_bool($thing1))
	{
		echo "boolean" .PHP_EOL;
	}
	else{
		echo "not sure what this is" . PHP_EOL;
	}
}

echo "===================================================" . PHP_EOL;

foreach ($things as $eachThing) 
{
	if (is_scalar($eachThing))
	{
		echo gettype($eachThing) . PHP_EOL;
	}	
}

echo "===================================================" . PHP_EOL;

foreach ($things as $eachThing) 
{
	if (is_array($eachThing))
	{
		echo "Array (";
		foreach ($eachThing as $numbers)
		{
			echo " {$numbers} ";	
		}
		echo ")" . PHP_EOL;
	}
	else {
		echo "{$eachThing}" . PHP_EOL;
	}
}


























