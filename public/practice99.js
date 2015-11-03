"use strict"
// var i = 2;

// do {
// 	console.log('While loop iteration# ' + i);
// 	i = i * 2;
// } while (i <= 65536);
// // could not come up with a do only version... and looked at my old work to come up with this one... 

// var i = 4

// do{ 
// 	console.log('While loop iteration # ' + i);
// 	i = i * 2; 
// } while (i <= 8192);

// var i = 5; 
// do{
// 	console.log('While loop iteration #' + i);
// 	i = i * 2;
// } while (i <= 5120);

// // I also don't understand the math... can we break this down?

// for (var i = 0; i <= 10; i++) {
//     console.log('for loop iteration #' + i);
// }

// for (var i = 100; i >= 5; i-=5) {
// 	console.log('for loop iteration #' + i)
	// i = 1 * 5; this line is not necessary// added in after looking at prevous work... still doesn't work
// } this decrements by 1, how do I decrement by 5? i-=5 is where the decrement happens

// homework of doing a bunch of these different types of loops and console logging the answers. to get me to figure out how to write them properly
// homework of when to use each of these different kinds of loops, if/else, etc. 


// If the number isn't odd, keep getting a new random number till it is odd.
// Use console.log to log all the odd numbers from 1 to 50, except the random odd number you 
// generated, by using break and continue. Try to match the output shown below 
//  (your random number will be different).

do{
	var random = Math.floor((Math.random() * 50) + 1);
	if (random % 2 !== 0) {
		console.log('Random odd number to skip is: ' + random);
		break;
	}
		console.log(' was even. Generating a new random number.');
} while (random % 2 == 0);

for (var i = 1; i < 50; i += 2) {
	if(i == random){
		console.log('Yikes! We should skip this number: ' + random)
		continue;
	}
	console.log('Here is an odd number: ' + i);
}

// go over 99 bottles tonite, next try and do loops that give even numbers and odd numbers, multiples of 3, 4, etc... helps with conditionals. 
// do each one in a while, do while, and a for loop...

// while vs. do while- want the do while to run once no matter what 
// while loop only do within condionals, and only do when conditions are met

// for loops- want to go a certain amount iterations 
// for eachs loop thru arrays... only arrays in JS. 


// this one works.
for (var bottles = 99; bottles >= 2; bottles -= 1){
	console.log(bottles + ' bottles of beer on the wall,', bottles + ' bottles of beer!', 'Take one down, pass it around, ' + (bottles -1) + ' bottles of beer on the wall.');

	if (bottles == 2) {
	console.log('1 bottle of beer on the wall, 1 bottle of beer. Take one down, pass it around, no more bottles of beer on the wall.');
	}
}


///// this one works... 
var number = 99;
while(number >= 1) {
	if(number == 1) {
		console.log(number + ' bottle of beer on the wall. Take it down, pass it around, no more bottles of beer on the wall!');
	} else {
		console.log(number + ' bottles of beer on the wall. Take one down pass it around, ');
	}
		number -= 1;
}
	console.log('No more bottles of beer. No more bottles of beer. Someone needs to go to the store to get some more.')
	console.log(number);

///this one works except when I get to one bottle of beer on the wall. 

for (var bottles = 99; bottles >= 2; bottles -= 1){
	console.log(bottles + ' bottles of beer on the wall,', + bottles + ' bottles of beer! Take one down, pass it around, ' + (bottles - 1) + ' bottles of beer on the wall');

	if (bottles == 2) {
		console.log('1 bottle of beer on the wall, 1 bottle of beer. Take one down, pass it around, no more bottles of beer on the wall!')

	}
}

// couldn't get this to work this way... 
for(var number = 99; number > 1; number -= 1){
	if(number > 1){
		console.log(number + ' bottles of beer on the wall.' + number + ' bottles of beer. Take one down, pass it around, ' + number - 1 + ' bottles of beer on the wall.')
	} else {
		console.log(number + ' bottle of beer on the wall.' + number + ' bottle of beer. Take it down, pass it around. No more bottles of beer on the wall')
	}
}
//could not ge thtis one to work either... 
// var number = 99; 

// do {
// 	if(number>1){
// 		console.log(number + ' bottles of beer on the wall.' + number + ' bottles of beer. Take one down pass it around, ' + (number-1) + ' bottles of beer on the wall.');		
// 	} else {
// 		console.log(number + ' bottle of beer on the wall. It\'s our last bottle of beer. Go to the store. Buy some more!')
// 	}
// } while (number >= 1); 
// 	number--;
// console.log('No mas cervesas, señior!');


for (var bottles = 99; bottles >= 2; bottles -= 1) {
	console.log(bottles + ' bottles of beer on the wall, ', + bottles + ' bottles of beer. Take one down, pass it around, ' + (bottles-1) + ' bottles of beer on the wall.');

	if (bottles == 2) {
		console.log('One bottle of beer on the wall, one bottle of beer. Take one down, pass it around. No more bottles of beer on the wall.')
	}
}

var bottles = 99; 

while(bottles >= 1){

	if(bottles == 1) {
		console.log(bottles + ' bottle of beer on the wall. Take it down, pass it around. No more bottles of beer on the wall.');
	} else {
		console.log(bottles + ' bottles of beer on the wall. Take one down, pass it around.');
	}
	bottles -= 1;
}
console.log('No more bottles of beer on the wall. Go to the store and buy some more!');

// for ( var number = 99; number >= 1; number -= 1){

// }

for(var i = 10; i >= 1; i -= 2){
	console.log(i);
}


//gives odd numbers b/c continue skips the even iterations in the loop 
for(var i = 1; i < 10; i++){
	if (i % 2 == 0){
		continue;
	}console.log(i);
}

//gives even numbers because of the modulus not being equal to 0, and skips the odd iterations in the loop 
for(var i = 1; i < 10; i++){
	if (i % 2 !== 0){
		continue;
	}console.log(i);
}


//do while loop 

var i = 1;

do {
    console.log('while loop iteration #' + i);
    i++;
} while (i <= 10);


var i = 10;
do{
	console.log('while loop iteration #' + i);
	i--;
} while (i >= 0);






// ignore these lines for now
// just know that the variable 'color' will end up with a random value from the colors array
var colors = ['red', 'orange', 'yellow', 'green', 'blue', 'indigo', 'violet'];
var color = colors[Math.floor(Math.random()*colors.length)];
var favorite = 'red'; // TODO: change this to your favorite color from the list
var message; 
// TODO: Create a block of if/else statements to check for every color except indigo and violet.
// TODO: When a color is encountered log a message that tells the color, and an object of that color.
//       Example: Blue is the color of the sky.

switch (color) {
	case 'red':
		message = ("Red is my favorite Color");
		break;
	case 'orange':
		message = ("Oranges are orange");
		break;
	case 'yellow':
		message = ("Yellow is gross");
		break;
	case 'green':
		message = ("Grass is green");
		break;
	case 'blue': 
		message = ("The sky is blue");
		break;
	default:
		message= ("I don\'t know anything about that color.")					
}

console.log(color);
console.log(message);

// if (color == 'red') {
// 	message = ("Red is my favorite color.");

// } else if (color == 'orange') {
// 	message = ("Oranges are orange.");

// } else if (color == 'yellow') {
// 	message = ("Yellow is a color that is gross.");

// } else if (color == 'green') {
// 	message = ("Green is a good color");

// } else if (color == 'blue') {
// 	message = ("Blue is a color I am wearing");

// } else {
// 	message = ("I don't know anything about that color.")
// }

// message = (color == 'red') ? "That is my favorite color" : "That is not my favorite color";

//ternary// 

// TODO: Have a final else that will catch indigo and violet.
// TODO: In the else, log: I do not know anything by that color.

// TODO: Using the ternary operator, conditionally log a statement that
//       says whether the random color matches your favorite color.








