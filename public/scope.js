"use strict";

function getRandomNumber() 
{
	var rand = Math.floor((Math.random() * 50) + 1);
	return rand;
}

function playAgain() 
{
	var answer = confirm('Do you want to play again?');
	return answer;
}

function getGuess() 
{
	var guess = prompt('Please enter your guess between 1 and 50');
	return guess;
}

function isValidGuess(guess) 
{
	var parsedGuess = parseInt(guess);

	if(isNaN(parsedGuess)) 
	{
		return false;
	} 
	else 
	{
		return true;
	}
}

function getValidGuess() 
{
do 
{
	var guess = getGuess();
} 
while(isValidGuess(guess) == false);
	return guess;
}

function playGame()
{
	var random = getRandomNumber();
	console.log(random);

	var i = 0;
	do 
	{
		var guess = getValidGuess();

		if(!guess) 
		{
			break;
		}

		if(guess == random) 
		{
			 alert('You did it!');
		} 
		else if(guess > random) 
		{
			 alert('You are too high!');
		} 
		else if (guess < random) 
		{
			alert('Too low, sucker!');
		}	

		i = i + 1; 

	}

	while (random != guess && i < 5);
}

do 
{
	playGame();
	var replay = playAgain();
} 
while(replay);




// (function () {

// 	var iffeVar = "locals only";
// 	var random = Math.floor((Math.random() * 5) + 1);
// 	// console.log(random);

// 	var guesses = 2;
// 	var prompted = 0;


// 		while (random != prompted) {

// 			if(guesses <= 0) {
// 				break;
// 			}
			
// 			prompted = prompt('Can you guess the number?');

// 			if (random > prompted) {
// 				alert('You guessed too low...' + guesses + ' guesses left');
// 			}		
// 			else if (random < prompted){
// 				alert('You guessed too high...' + guesses + ' guesses left');
// 			}

// 		 	guesses--; 

// 			if (random == prompted) {
				
// 				alert('You guessed correctly!');
// 			}

// 			// else {
// 			// 	alert('You ran out of guesses! :(');
// 			// }

// 		}


// 		if (confirm("Play again?")) {
// 	  		window.location.reload(true);
// 		}	

// 	alert(iffeVar); 
// })();
