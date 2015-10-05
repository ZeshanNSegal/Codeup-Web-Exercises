"use strict";

var i = 1;

while (i <= 10) {
	console.log('while loop iteration #' + i);
}

var i = 10;

while (i < 10){
	console.log('while loop iteration #' + i);
	i++;
}

var i = 10; 

do {
	// collect use info
	console.log('while loop iteration #' + i);
	i++;
} while (i<10);