"use strict"

for (var i = 100; i >= 5; i -= 5) {
	console.log('for loop iteration #' + i);
}

for (var i = 500; i >= 10; i -= 10) {
	console.log('for loop iteration #' + i);
}

for (var i = 300; i <= 400; i += 5) {
	console.log('for loop iteration #' + i);
}

for (var i = 500; i <= 1000000000; i *= 5) {
	console.log('for loop iteration #' + i);
}

for (var z = 26; z >= 1; z -= 1) {
	console.log('for loop iteration #' + z)
}

//my version below... 
for (var bottles = 99; bottles >= 2; bottles -= 1) {
	console.log(bottles + ' bottles of beer on the wall,', bottles + ' bottles of beer.', 'Take one down, pass it around, ' + (bottles -1) + ' bottles of beer on the wall.')

	if (bottles == 2) {
		console.log('1 bottle of beer on the wall, 1 bottle of beer. Take one down, pass it around, no more bottles of beer on the wall. No more bottles of beer on the wall, no more bottles of beer. Go to the store and buy some more, 99 bottles of beer on the wall.');
	}
}

////////////////////
///three examples on how to do it properly/differently below while-if-else, for-if-else, do-while-if-else

var number = 99;

while(number >= 1) {

	if(number == 1) {
		console.log(number + ' bottle of beer on the wall. Take it down and pass it around.');
	} else {
		console.log(number + ' bottles of beer on the wall. Take one down, and pass it around.');
	}

	number -= 1;
}
console.log('No bottles of beer. Someone needs to go to the store to get some more.');
console.log(number);

//////////////////////


for(var number = 99; number >= 1; number -= 1) {

	if(number > 1) {
	} else {
		console.log(number + ' bottles of beer on the wall. Take one down, and pass it around.');
	}
		console.log(number + ' bottle of beer on the wall. Take it down and pass it around.');
}
console.log('No bottles of beer. Someone needs to go to the store to get some more.');
console.log(number);

////////////////////////

var number = 99;

do {
	if(number > 1){
		console.log (number + ' bottles of beer on the wall.');
	} else {
		console.log(number + ' bottle of beer on the wall. It\'s our last bottle of beer.');
	}

	number--;
} while (number >= 1);

console.log('No mas cervezas, senior!');

/////////////////////
//below generates a random number b/t 1-10

do {
	var random = Math.floor(Math.random() * 100);
} while (random % 2 == 0);

	console.log(random);

////////////////////////////

///loop to count from 0-10
for (var i = 0; i <= 10; i++) {
	console.log(i);
}

//below is an example of a nested loop 

for (var i = 9; i <= 10; i++) {

	for(var j = 0; j <= 10; j++) {
		console.log(i * j);
		console.log('inner loop');
	}

	console.log('outer loop');
}
		
//////////////////////////////
//Breaking and continuing loops













