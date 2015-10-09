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

// use forEach loops for generic arrays, and use a for loop for numeric problems... like finding the prime #s from 1-1000... 

// .push .forEach, are methods... methods are functions that are run on an object.
// tacos.push('bean and cheese'); adds the element to the end of the array so bean and cheese would be the last one in the list
// can push multiple elements ( in this case tacos) using a comma seperator... 'bean', 'chicken', 'egg', etc... 
// arrays can hold different types of data: strings, values, and can add differnet values like booleans, numbers, etc. all to the same array (in this example, the taco array could have numbers added, booleans, etc.)

var beatles = [' John', 'Paul' 'Ringo', 'George'];

beatles.push('Bob Dylan');

console.log(beatles);

beatles.pop(); // pops off the last piece of data in the array

console.log('I just popped Bob');

console.log(beatles);

// beatles.shift() removes the first element in the array, in the example above John would be removed. 
//beatles.unshift()('John') would put John back in the array

var daysOfTheWeek = ['Monday', 'Tuesday', 'Wednesday', 'Thursday'];
daysOfTheWeek.push('Friday', 'Saturday'); //adds F and S to the end of the list
daysOfTheWeek.unshift('Sunday'); //adds sunday to the beginning of the list
daysOfTheWeek.shift('Sunday'); /// would remove Sunday from the list

//arrayName.splice(startIndex, numberOfItemsToRemove);
daysOfTheWeek.splice(2,1) //will remove Wednesday from the splice (Wednesday is in the second position (0, 1, 2) and we are only removing 1 item form the list (so it would be daysOfTheWeek.splice(2,1)))




















