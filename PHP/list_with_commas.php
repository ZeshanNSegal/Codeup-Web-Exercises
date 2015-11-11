<?php

// List of famous peeps
$physicistsString = 'Gordon Freeman, Samantha Carter, Sheldon Cooper, Quinn Mallory, Bruce Banner, Tony Stark';

//removes the space and commas turns into an array
$newPhysicistsArray = explode(', ', $physicistsString);

//creates the alphabetized version of statement echoed below...
$newPhysicistsString2 = humanizedList($newPhysicistsArray, true);

//function to alphabetize list and concatenate new string
function humanizedList($array, $sorting = false)
{
	if ($sorting) { //if true, sorts alphabetically
		sort($array);
	}
    $lastNamePop = array_pop($array); //pops last name off array (Tony Stark)
    $physicistsString2 = implode(', ', $array) . ', and ' . $lastNamePop;// adds back last name popped off the list and concatenates
    return $physicistsString2;
}

echo "Some of the most famous fictional theoretical physicists are {$newPhysicistsString2}." . PHP_EOL;