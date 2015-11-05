<?php

 // Set the default timezone
 date_default_timezone_set('America/Chicago');

 // Get Day of Week as number
 // 1 (for Monday) through 7 (for Sunday)
 $dayOfWeek = date('N');
 echo $dayOfWeek;

 switch($dayOfWeek) {
     case 1:
         // Output Monday
     	echo '$dayOfWeek is Monday';
     	break;
     case 2:
         // Output Tuesday
     	echo '$dayOfWeek is Tuesday';
     	break;
     case 3:
         // Output Wednesday	
     	echo '$dayOfWeek is Wednesday';
     	break;
     case 4:
         // Output Thursday
     	echo '$dayOfWeek is Thursday';
     	break;
     case 5:
         // Output Friday
     	echo '$dayOfWeek is Friday';
     	break;
     case 6:
         // Output Saturday
     	echo '$dayOfWeek is Saturday';
     	break;	
     case 7:
         // Output Sunday
     	echo '$dayOfWeek is Sunday';
     	break;
     default:
         // Output Z-Day
     	echo '$dayOfWeek is Z-day';
     	break;	
 }

if($dayOfWeek == 1){
	echo '$dayOfWeek is Monday';
} elseif ($dayOfWeek == 2) {
	echo '$dayOfWeek is Tuesday';
}elseif ($dayOfWeek == 3) {
	echo '$dayOfWeek is Wednesday';
}elseif ($dayOfWeek == 4) {
	echo '$dayOfWeek is Thursday';
}elseif ($dayOfWeek == 5) {
	echo '$dayOfWeek is Friday';
}elseif ($dayOfWeek == 6) {
	echo '$dayOfWeek is Saturday';
}elseif ($dayOfWeek == 7) {
	echo '$dayOfWeek is Sunday';
}else "$dayOfWeek is Z-day";		

