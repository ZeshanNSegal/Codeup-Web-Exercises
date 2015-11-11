<?php

function parseContacts($filename)
{
    $contacts = array();

    // todo - read file and parse contacts// This is reading contents from the file, 
	$handle = fopen($filename, 'r');
	$contents = fread($handle, filesize($filename));
	$contentsString = trim($contents);
	$contactsArray = explode("\n", $contentsString);
	$contactInfoWithKeys = [];

	//foreach loop to parse out original text, remove piping, make new array, call function formatPhoneNumberWithDashes to add dashes- $newParse line 16, and create name and number arrays
	foreach ($contactsArray as $personContactInfoString)
	{
		$personInfoArray = explode("|", $personContactInfoString);
		$personInfoArray[1] = formatPhoneNumberWithDashes($personInfoArray[1]);
		$contactInfoWithKeys[] = [ //array push with literal notation
			'name' => $personInfoArray[0],
			'number' => $personInfoArray[1]
		];	
	}

	fclose($handle);
    return $contactInfoWithKeys;
}
//function to format numbers with dashes
function formatPhoneNumberWithDashes($newNumber)
{
	return substr($newNumber, 0, 3) . '-' . substr($newNumber, 3, 3) . '-' . substr($newNumber, -4);
}

var_dump(parseContacts('contacts.txt'));