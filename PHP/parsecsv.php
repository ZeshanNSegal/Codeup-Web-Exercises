<?php

// Output should include:
// - avg units sold per employee
//get file, trim, and explode strings on line break
function parseNames($filename)
{
    $employeeNames = array();
    $handle = fopen($filename, 'r');
	$employeeNames = fread($handle, filesize($filename));
	$employeeString = trim($employeeNames);
	$employeeArray = explode("\n", $employeeString);
	fclose($handle);
	
	//for loop that gets first 6 lines in a seperate array
	for ($i=0; $i<6; $i=$i+1){
		$firstItemsinArray[] = array_shift($employeeArray);
	}
	//foreach for first 6 lines
	foreach ($employeeArray as $employeeParsed){

		$employeePersonArray = explode(", ", $employeeParsed);

		$fullName = $employeePersonArray[1] . " " . $employeePersonArray[2];

		$reportArray[] =[ //array push with literal notation
			'Units_Sold' => $employeePersonArray[3],
			'Full_Name' => $fullName,
			'Employee_Number' => $employeePersonArray[0]
		];		
	} 
	//sort array from high to low
	arsort($reportArray); //sorts by first value(in this case- Units_Sold)
	return $reportArray;
}

function spacing ($totalCharacters, $stringValue)
{
	$lengthOfString = strlen($stringValue);
	$numberOfSpaces = $totalCharacters - $lengthOfString;
	$stringValueWithSpaces = $stringValue;
	for ($i=0; $i<$numberOfSpaces; $i++){
		$stringValueWithSpaces .= " ";
	}
	return $stringValueWithSpaces;
}

$unitsSorted = parseNames('parsecsv.txt');

function countEmployees($array){
	return count($array);
}

$employeeCount = countEmployees($unitsSorted);
echo "There are {$employeeCount} employees working." . PHP_EOL;

function soldUnits($array){
	$sumOfUnitsSold = 0;
	foreach ($array as $key => $value) {
		$sumOfUnitsSold = $value['Units_Sold'] + $sumOfUnitsSold;
	}
	 return $sumOfUnitsSold;
}

$unitsSold = soldUnits($unitsSorted);
echo "The company sold {$unitsSold} products." . PHP_EOL;

function avgUnitsSold($IntUnitsSold, $IntEmployeeCount){
	$avgUnitsPerEmployee = $IntUnitsSold / $IntEmployeeCount;
	return $avgUnitsPerEmployee;
}

$avg = avgUnitsSold($unitsSold, $employeeCount);
echo "The average number of units per employee = {$avg}" . PHP_EOL;

soldUnits ($unitsSorted) . PHP_EOL;

echo "====================================================================" . PHP_EOL;
echo "Units     |Full Name                               |Employee Number" . PHP_EOL;
echo "====================================================================" . PHP_EOL;

foreach ($unitsSorted as $employee) {
	echo spacing(10, $employee['Units_Sold']) . '|' . spacing(40, $employee['Full_Name']) . '|' . spacing(10, $employee['Employee_Number']) . PHP_EOL;
}

// created a function called spacing with two values $tc and $sv. b/c of type juggling, we had to create $los and set it equal to the int. of $sv and strlen gets us the length of $sv. Next, we got the $nos by subtracting the $tc from the $los. We set $svws = to $sv(which is now a strlen). Created a for loop to set the units spacing. We returned the $svws. Last, we created a foreach loop to sort thru the employees[units sold] to create the spacing needed to get the values lined up based on 10 characters. So ten minus 2 characters would give us 8 empty spaces after the stringvalue. Has to be after $us has been defined! 

// echo $employee['Units_Sold'];
// var_dump($unitsSorted);
// echo formattedArray($unitsSorted);
// print_r($unitsSorted);

// $averageOfUnits = array_sum($employeePersonArray)/ count($employeePersonArray);
// echo "sum(a) = " . array_sum($a) . "\n";
// echo count($employeePersonArray[0], COUNT_RECURSIVE);
// echo count($fullName, COUNT_RECURSIVE);


//figure out how to create space length that does the things below: 
//length of units, full name, and employee number
//line up code- move employee number back, and assoc. values, line up the units, move Full Names back and center
//create a function takes in two values how many spaces total and the string to put in. 