<?php

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
	arsort($reportArray); //sorts by first index(in this case- Units_Sold)
	return $reportArray;
}

//gives equal spacing based on total length of spaces minus length of string
function spacing ($totalCharacters, $stringValue)
{
	$lengthOfString = strlen($stringValue); //turns value of integers into strings
	$numberOfSpaces = $totalCharacters - $lengthOfString;
	$stringValueWithSpaces = $stringValue;
	for ($i=0; $i<$numberOfSpaces; $i++){
		$stringValueWithSpaces .= " ";
	}
	return $stringValueWithSpaces;
}

echo "====================================================================" . PHP_EOL;

//grabs text file and renames as a variable
$unitsSorted = parseNames('parsecsv.txt');

//count employees
function countEmployees($array)
{
	return count($array);
}

//gets the number of employees to count from line 51- $unitsSorted echos it out to HRO- human readable output
$employeeCount = countEmployees($unitsSorted);
echo "There are {$employeeCount} total employees working." . PHP_EOL;

//adds units sold from all employees together
function soldUnits($array)
{
	$sumOfUnitsSold = 0;
	foreach ($array as $key => $value) {
		$sumOfUnitsSold = $value['Units_Sold'] + $sumOfUnitsSold;
	}
	 return $sumOfUnitsSold;
}

$unitsSold = soldUnits($unitsSorted);
echo "The company sold {$unitsSold} total products." . PHP_EOL;

//gets the avg. of untis sold/employees
function avgUnitsSold($IntUnitsSold, $IntEmployeeCount)
{
	$avgUnitsPerEmployee = $IntUnitsSold / $IntEmployeeCount;
	return $avgUnitsPerEmployee;
}

//avg units/employees math
$avg = avgUnitsSold($unitsSold, $employeeCount);
echo "The average number of units sold per employee = {$avg}." . PHP_EOL;

soldUnits ($unitsSorted) . PHP_EOL;

echo "====================================================================" . PHP_EOL;
echo "Units     |Full Name                               |Employee Number" . PHP_EOL;
echo "====================================================================" . PHP_EOL;

foreach ($unitsSorted as $employee) {
	echo spacing(10, $employee['Units_Sold']) . '|' . spacing(40, $employee['Full_Name']) . '|' . spacing(10, $employee['Employee_Number']) . PHP_EOL;
}