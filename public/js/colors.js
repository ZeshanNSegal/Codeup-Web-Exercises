"use strict";

// ignore these lines for now
// just know that the variable 'color' will end up with a random value from the colors array
var colors = ['red', 'orange', 'yellow', 'green', 'blue', 'indigo', 'violet'];
var color = colors[Math.floor(Math.random()*colors.length)];

var favorite = "green";

console.log("Random color chosen is " + color);
console.log("My favorite color is " + favorite);

if ("red" == color) {
	console.log("The car passing is red");
} else if("orange" == color) {
	console.log ("The sun can be orange.");
} else if ("yellow" == color) {
	console.log ("The sun can also be yellow.");
} else if ("green" == color) {
	console.log ("That\'s my color dawg");
} else if ("blue" == color) {
	console.log ("The sky is blue.");
} else {
	console.log ("I do not know anything by that color.");
}

var message; 	

message = (color == favorite) ? "That\'s my color, dawg!" : "That ain\'t the right one, player.";
console.log(message);



//  TODO: change this to your favorite color from the list

// TODO: Create a block of if/else statements to check for every color except indigo and violet.
// TODO: When a color is encountered log a message that tells the color, and an object of that color.
//       Example: Blue is the color of the sky.

// TODO: Have a final else that will catch indigo and violet.
// TODO: In the else, log: I do not know anything by that color.

// TODO: Using the ternary operator, conditionally log a statement that
//       says whether the random color matches your favorite color.

// var name = "Lety";

// if(name === "Letty") {
// 	var message = "Hi Letty";
// } else if(name == "Zee"){
// 	var message = "Hi Zee";
// } else {
// 	var message = "Howdy " + name;
// }

// var name = "Letty";
// var message = " ";

// if(name === "Letty") {
// 	message = "Hi Letty";
// } else if(name === "Zee"){
// 	message = "Hi Zee";
// } else {
// 	message = "Howdy " + name;
// }
// console.log(message);

// var name =  true;
// var message = " ";
// // Ternanry
// message = (name == "Zee") ? "Hi Zee" : "Hello Nazi";
// console.log(message);


// name = " ";

// if(name == "Tony") {
// 	message = "Hi Tony";
// } else if (name == "shawn") {
// 	message = "Hi shawn";
// } else if (name == "Craig") {
// 	message = "Hi Craig";
// } else if (name == "Trey") {
// 	message = "Hi Trey";
// } else {
// 	message = "Yo";
// }
// console.log(message);



// name = "Zee";

// if(name == "Tony") {
// 	message = "Hi Tony";
// } else if (name == "shawn") {
// 	message = "Hi shawn";
// } else if (name == "Craig") {
// 	message = "Hi Craig";
// } else if (name == "Trey") {
// 	message = "Hi Trey";
// } else {
// 	message = "Yo";
// }
// console.log(message);

// name = "Bill";
// if(typeof name == "string"){
// 	message = "Hi " + name;
// } else {
// 	message = "The variable is not a string.";
// }
// console.log(message);
