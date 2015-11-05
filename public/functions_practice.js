var random = Math.floor((Math.random() * 5) + 1);
console.log(random);

var guesses = 2;
var prompted = prompt('Can you guess the number?');

	while (random !== prompted && guesses > 0) 
	{
		if (random > prompted) 
		{
			alert('You guessed too low...' + guesses + ' guesses left');
		}		
		else if (random < prompted)
		{
			alert('You guessed too high...' + guesses + ' guesses left');
		}

	 	guesses--; 
		prompted = prompt('Guess again!');
	}

	if (random === prompted) 
	{
		alert('You guessed correctly!');
	}

	else 
	{
		alert('You ran out of guesses! :(');
	}

	






// }


// var prompted = prompt("what is your FULL name?")

// while(prompted == '') {
// 	prompted = prompt('Please enter name to continue')
// }
// alert('Welcome ' + prompted +'!');

// var pizza = confirm('Do you like pizza? Click Ok to continue... ')
// if (pizza) {
// 	alert('You do?');
// }








// var answer = prompt('What is your favorite color?');

// alert(answer);

// alert('Hello Hampton'); 

// var saidOk = confirm('You sure bout that, bruh?')
// if (saidOk) {
// 	alert('What a jerk!');
// }

// todo: Ask the user for their name.
//       Keep asking if an empty input is provided.

// todo: Show an alert message that welcomes the user based on their input.

// todo: Ask the user if they like pizza.
//       Based on their answer show a creative alert message.








// var myNameIs = 'Zee'; 
// function sayHello(firstName) {
// 	console.log('Well hello there ' + firstName);
// }
// sayHello(myNameIs); //use the function(variable) to call it. 

// below is another way to do the same thing as above... 
// var myNameIs = 'Zee'; 
// function sayHello(firstName) {
// 	return 'Hello ' + firstName;
// }
// console.log(sayHello(myNameIs));



// var random = Math.floor((Math.random()*100)+1);

// function isOdd(number){
// 	return (number % 2 !== 0) ? true : false ;
// }
// console.log('The magic number is: ' + random);
// if(isOdd(random) ){
// 	console.log(random + ' is odd.')
// }
// else{
// 	console.log(random + ' is even.')
// }


// function areaOfRectangle(length, width){
// 	return (length * width);
// }
// var area = areaOfRectangle(2, 3);
// console.log('The area of the rectangle is ' + area);

// //////////////////////////////

// function areaOfTriangle(base, height){
// 	return (base * height) * .5;
// }
// var area = areaOfTriangle(4,5);
// console.log('The area of the triangle is ' + area);

// ///////////////////////////////

// function areaOfCircle(radius){
// 	return (radius * radius) * Math.PI; 
// }
// var area = areaOfCircle (6);
// console.log('The area of the circle is ' + area);

// ///////////////////////////////

// function areaOfTrap(base1, base2, height){
// 	return ((base1 + base2)/2) * height;
// }
// var area = areaOfTrap (2, 4, 8);
// console.log('The area of the trap is ' + area);

// ///////////////////////////////

// function areaOfShade(length, width, base, height){
// 	return (areaOfRectangle(length, width)) - (areaOfTriangle(base, height));
// }
// var area = areaOfShade(8,15,9,8);
// console.log('The area of the shaded region is ' + area);

// //////////////////// 
// var sideOfEqualTri = 4;

// function areaOfEqualTri(side){
// return (Math.sqrt(3) / 4) * (Math.pow(side, 2)); 
// }

// function areaOfHex(side){
// 	return ((3 * Math.sqrt(3)) /2) * (Math.pow(side, 2));
// }

// var areaOfStarOfDave = (areaOfEqualTri(sideOfEqualTri) * 12);

// console.log(areaOfStarOfDave);
////////////////////////////////





// function isOdd(input) {
// 	return (input % 2 !== 0) ? true : false;
// } 
// if(isOdd(random)) {
// 	console.log(random + ' is odd');
// } else {
// 	console.log (random + ' is even');
// }











// function isEven(input) {
// 	return (input % 2 === 0) ? true : false;
// }

// for(var i = 0; i <= 100; i++) {
// 	// if(isEven(i)) {
// 	// 	console.log(i + ' is even');
// 	// }
// 	var message = (isEven(i)) ? i + ' is even' : i + ' is odd';
// 	console.log(message);
// }



// todo: Fill in your name here.

// todo:
// Create a function called 'sayHello' that takes a parameter 'name'.
// When called, the function should log a message that says hello from the passed in name.

// todo: Call the function 'sayHello' passing the variable 'myNameIs' as a parameter.

// do not worry about the details of this line
// just know that it generates a random number between 1 and 100

// todo:
// Create a function called 'isOdd' that takes a number as a parameter.
// The function should use the ternary operator to log a message.
// The log should tell the number passed in and whether it is odd or not.

// todo: Call the function 'isOdd' passing the variable 'random' as a parameter.