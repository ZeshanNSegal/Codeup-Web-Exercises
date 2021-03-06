<?php

$names = ['Tina', 'Dana', 'Mike', 'Amy', 'Mel', 'Zee', 'Michael'];

$compare = ['Tina', 'Dean', 'Mel', 'Amy','Zee', 'Michael'];

//returns if there were matches 
function search ($query, $searchNames)
{
	if(in_array($query, $searchNames)) { 
		return true;
	} 		
	return false;
}

//counts elements in common between two arrays
function compare_arrays ($firstArray, $secondArray)
{
	$match = 0;
	$diff = 0; 
	foreach ($firstArray as $query) {
		if (search($query, $secondArray)){
			$match = $match + 1;
		} else {
			$diff = $diff + 1;
		}
	}
	return "There were {$match} matches and {$diff} differences." . PHP_EOL;
}
//This function calls the matches and prints the names of the matching people from original arrays
function matchingNames($firstArray, $secondArray) 
{
		$matches = [];
		foreach ($firstArray as $query){
			if(search($query, $secondArray)) {
				array_push($matches, $query); 
			} 
		}
	foreach ($matches as $matchNames) {
		echo $matchNames . " was a matched name." . PHP_EOL;
	}
}

// combine arrays without duplicates
function combinedArrays($firstArray, $secondArray)
{
	foreach($secondArray as $query){
		if(!search($query, $firstArray)) {
			array_push($firstArray, $query);
		}
	}
	print_r($firstArray);
}

echo combinedArrays($names, $compare);
// echo compare_arrays ($compare, $names); 
// echo compare_arrays ($names, $compare); 
// echo matchingNames ($names, $compare);

