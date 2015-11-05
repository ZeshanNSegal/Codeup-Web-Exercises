<?php
// USING I/O STREAMS NOTES

do {

// Write the output
// Notice the space after the ?
fwrite(STDOUT, 'What is your first name? ');

// Get the input from user
// trim gets rid of 'return' character empty space from the ends 
$firstName = trim(fgets(STDIN));

	//while the $firstname is empty it will keep running the do loop above
} while (empty($firstname))
	// Output the user's name
	fwrite(STDOUT, "Hello $firstName\n");


?>