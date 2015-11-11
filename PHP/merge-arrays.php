<?php

$names = ['Tina', 'Dana', 'Mike', 'Amy', 'Mel', 'Adam', 'Michael'];

$compare = ['Tina', 'Dean', 'Mel', 'Amy','Zee', 'Michael'];

//returns if there were matches T or F
function search ($query, $searchNames)
{
	if(in_array($query, $searchNames)) { 
		return true;
	} else {
		return false;
	}		
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
			if(search($query, $secondArray)){
				array_push($matches, $query); 
			} 
		}
	foreach ($matches as $matchNames) {
		echo $matchNames . " was a matched name." . PHP_EOL;
	}
}

//combines arrays with duplicates
function combineArrays($firstArray, $secondArray) 
{
	$thirdArray = [];
	for ($i = 0; $i < count($firstArray); $i = $i + 1){
		if ($firstArray[$i] == $secondArray[$i]){
			array_push($thirdArray, $firstArray[$i]);
		} else {
			array_push($thirdArray, $firstArray[$i], $secondArray[$i]);
		}
	}
	print_r($thirdArray);
}

echo combineArrays ($names, $compare);
echo compare_arrays ($compare, $names); 
echo compare_arrays ($names, $compare); 
echo matchingNames ($names, $compare);
