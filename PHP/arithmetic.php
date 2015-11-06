<?php

function displayError($a, $b, $errorType)
{
	return "ERROR: Both arguments must be numbers to " . ($errorType) . ". You entered in " . ($a) . " & " . ($b) . PHP_EOL;
}

function validateZero($b) 
{
	return $b == 0;
}

function validateNumbers($a, $b) {
	if (is_numeric($a) && is_numeric($b))
	{
		return true; 
	}
	return false;
}

function add($a, $b)
{
	if(validateNumbers($a, $b)) 
	{
    	return $a + $b;	
	} 
	else 
	{
		return displayError($a, $b, 'add');
	}
}

function subtract($a, $b)
{
	if(validateNumbers($a, $b)) 
	{
    	return $a - $b;
    } 
    else 
    {
    	return displayError($a, $b, 'subtract');
	}	
}

function multiply($a, $b)
{
	if(validateNumbers($a, $b)) 
	{
    	return $a * $b;
    } 
    else 
    {
		return displayError($a, $b, 'multiply');
	}
}	

function divide($a, $b)
{
	if (validateZero($b)) 
	{
    	return "ERROR: You can't divide by 0, dummy. You entered in ($a, $b)!" . PHP_EOL;
    } 
    elseif (validateNumbers($a, $b)) 
    {
    	return $a / $b;
	} 
	else 
	{
    	return displayError($a, $b, 'divide');
    }	
}

function modulus($a, $b)
{
	if (validateNumbers($a, $b))
	{
		return $a % $b;
	} 
	else 
	{
		return displayError($a, $b, 'modulus');
	}
}

function multiplyForLoop($a, $b)
{
	if (validateNumbers($a, $b))
	{
		$sum = 0;
		for ($i=0; $i < $b; $i++) 
		{
			$sum = $sum + $a;
		}
		return $sum;
	} 
	else 
	{
		return displayError($a, $b, 'multiply');
	}
}

echo add(5, 'awesome') . PHP_EOL;
echo subtract(5,4) . PHP_EOL;
echo multiply(5, 4) . PHP_EOL;
echo divide(6,3) . PHP_EOL;
echo modulus(6,3) . PHP_EOL;
echo multiplyForLoop(1, 'zee') . PHP_EOL; #multiplying with for loop