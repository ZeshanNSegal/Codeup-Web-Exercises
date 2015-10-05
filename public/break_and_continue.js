"use strict"

do {
	var random = Math.floor((Math.random() * 50) + 1);
	if (random % 2 !== 0) {
		console.log('Random odd number to skip is: ' + random);
		break;
	}

		console.log(random + ' was even. Generating a new random number.');
} while (random % 2 == 0);

for(var i = 1; i<50; i+=2) {
	if (i == random){
		console.log('Yikes! We should skip this number: ' + random)
		continue;
	}
	console.log('Here is an odd number: ' + i);
}