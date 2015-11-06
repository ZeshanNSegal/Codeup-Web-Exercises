<?php
// Your inspect() function should look at the passed argument and return a string with the variable's type and its value, similar to "The integer is 12.".
// Use your new function to inspect the given variables one at a time. Create these calls in an iterative manner: add a call to inspect() for $num1 and then test your code, add a call to inspect() for $num2 and then test your code, etc.

// There are some special cases your inpsect() function needs to handle. In particular:

####// If the variable is NULL, return "The value is NULL."
####// If the variable is an array, return "The value is an array"
####// If the variable is an empty array, return "The value is an empty array."
####// If the variable is a boolean, make sure your return value says whether it is TRUE or FALSE.
// If the variable is an empty string, return "The string is empty."

function inspect($value)
{
	switch (gettype($value)) {
		case 'null':
			return "The value is NULL.";
			break;
		case 'array':
			if ($value == []){
				return "The value is an empty array.";
			} else {
				return "The value is an array.";			
			}
		case 'boolean':
			if ($value == 1){
				return "Value is a Boolean that is TRUE";
			} else {
				return "Value is a Boolean that is FALSE";
			}
		case 'string':
			return "The value of the string is {$value)"; 	
		default:
			return "The " . gettype($value) . " is {$value}" . PHP_EOL;
			break;
	}
}	


// Do not mofify these variables!
$string1 = "I'm a little teapot";
$string2 = '';
$array1 = [];
$array2 = [1, 2, 3];
$bool1 = true;
$bool2 = false;
$num1 = 0;
$num2 = 0.0;
$num3 = 12;
$num4 = 14.4;
$null = NULL;

// TODO: After each echo statement, use inspect() to output the variable's type and its value

echo 'Inspecting $num1:' . PHP_EOL;

echo 'Inspecting $num2:' . PHP_EOL;

echo 'Inspecting $num3:' . PHP_EOL;

echo 'Inspecting $num4:' . PHP_EOL;

echo 'Inspecting $null:' . PHP_EOL;

echo 'Inspecting $bool1' . PHP_EOL;

echo 'Inspecting $bool2' . PHP_EOL;

echo 'Inspecting $string1' . PHP_EOL;

echo 'Inspecting $string2' . PHP_EOL;

echo 'Inspecting $array1' . PHP_EOL;

echo 'Inspecting $array2' . PHP_EOL;
