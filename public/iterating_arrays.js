// // todo:
// // Create an array of 4 names using literal array notation, in a variable called 'names'.
// var names = ['Zee', 'Bee', 'Cee', 'Dee', 'Gee', 'Pee'];

// var greetings = [];

// names.forEach(function (element, index, aray){
// 	greetings[index] = 'hi there,  ' + element;
// });

// greetings.forEach(function (element, index, array){
// 	console.log('The value "element" ' + element + ' is at index ' + index + ' which is the same as ' + array[index])
// });
// // todo:
// // Create a log statement that will log the number of elements in the names array.
// console.log(names.length);


// function sayHi(name) {
// 	return 'Hello, ' + name;
// }

// todo:
// Create log statements that will print each of the names array elements individually.

// for(var i = 0; i < names.length; i+=1){
// 	// var message = sayHi(names[i]);
// 	// console.log(message);
// 	console.log('The name at index ' + i + ' is ' + names[i]);
// }
// ////// For-Each Loop below is the same as the above. It runs for each element in that array before each loop runs a specific function

// names.forEach(function (element, index, array){
// 	console.log('The name at index ' + index  + ' is ' + element);
// });

// //anonymous function  runs aoutomatically. The give JS a lot of expressive power, and ability to reuse code. 
// //the first forEach (above) will be seen more often than the iteration below... 

// function iterateNames(element, index, array){
// 	console.log('The name at index ' + index  + ' is ' + element);
// }

// names.forEach(iterateNames); 

// // console.log(names[0]);
// // console.log(names[1]);
// // console.log(names[2]);
// // console.log(names[3]);
// // console.log(names[4]);
// // console.log(names[5]);


// var shapes = ['octogon', 'sphere', 'square', 'rectangle'];

// shapes.forEach(function(shape, index, array){
// 	console.log('The shape at index ' + index + ' is ' + shape);
// 	console.log('The element at '  + index + ' is the same as ' + array[index]);
// });


// var tacos = [ 'chorizo', 'picadillo', 'guac', 'norteno', 'barbacoa', 'fajita', 'lengua'];

// tacos.forEach(function (taco, index, array){
// 	if(index > 0){
// 		console.log('The last taco I ate was a ' + array[index -1]);
// 	}

// 	console.log('I am eating a ' + taco + ' taco in Texas');
// 	if(index < array.length -1) {
// 		console.log('I will eat a ' + array[index + 1] + ' taco next.');
// 	}
// 	console.log('yum');
// });


var colors = ['red', 'orange', 'yellow', 'green', 'blue', 'indigo'];

for (var i = 0; i < colors.length; i+= 1) {
	console.log('The color at index ' + i + ' is: ' + colors[i]);
}

var colors = ['red', 'orange', 'yellow', 'green', 'blue', 'indigo'];
colors.forEach(function (element, index, array){
	console.log('The color at index ' + index + ' is: ' + element);
});







