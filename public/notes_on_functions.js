"use strict";


function isEven(input) {
	return (input % 2 === 0) ? true : false;
}

for(var i = 0; i <= 100; i++) {
	// if(isEven(i)) {
	// 	console.log(i + ' is even');
	// }
	var message = (isEven(i)) ? i + ' is even' : i + ' is odd';
	console.log(message);
}



// console.log(isEven(602));


// function sum(a, b) {
// 	return a + b;
// }

// console.log(sum(100,500)); 


// This is the same as the above ternanry operation... the above is more efficient // 	var remainder = input % 2;
// 	if (remainder === 0) {
// 		return true;
// 	} else {
// 		return false;
// 	}
// }



// function areaOfRectangle(length, height) {
// 	var area = length * width;
// 	return area;
// }
 
// var rectangleArea = areaOfRectangle(10, 5);
// console.log(rectangleArea);

// var secondArea = areaOfRectangle(30, 3);
// console.log(secondArea)









// function sum(a, b) {
// 	return a + b;
// }
// function doSomething () {
// 	//code goes here
// }

// function doSomething () {
// 	var result;
// 	//calculate result
// 	return result;
// 	//can only return a result once
// 	//can have several return results in a function using if else statements
// }

// //calling the function:
// doSomething(); // call the function doSomething()

// var result = doSomething(); //Result now holds the value of what doSomething() returns
// console.log(doSomething()); 
// // The value doSomething() returns is passed to the console.log

// var doAnotherThing = doSomething; //No ()!!
// doAnotherThing(); //Calls the code defined in doSomething()

















