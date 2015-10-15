// JS Calculator.js
(function(){
	
"use strict";

var numbers = document.getElementsByClassName('numbers'); 
var operators = document.getElementsByClassName('operators'); 
var clear = document.getElementById('clear');
var equalButton = document.getElementById('equalButton');

function numberButton(event) {
	if (document.getElementById('middle').value == ''){
		document.getElementById('left').value += this.innerHTML; 
	} else {
		document.getElementById('right').value += this.innerHTML;
	}
}

function operatorButton(event) {
	document.getElementById('middle').value = this.innerHTML; 
}

function clearButton(event) {
	document.getElementById('left').value = '';
	document.getElementById('middle').value = '';
	document.getElementById('right').value = '';
	document.getElementById('equals').value = '';
}

function calculateOutput(){
	var left = document.getElementById('left');
		console.log("document.getElementById('left')");
	var middle = document.getElementById('middle');
		console.log("document.getElementById('middle')");
	var right = document.getElementById('right');
		console.log("document.getElementById('right')");
	var equals = document.getElementById('equals');
		console.log(equals);
	
if (middle.value != ''){
	console.log(middle.value);
	switch (middle.value){
		case "+": 
			equals.value = parseInt(left.value) + parseInt(right.value);
			break;
		case "-":
			equals.value = parseInt(left.value) - parseInt(right.value);
			break;
		case "*":
			equals.value = parseInt(left.value) * parseInt(right.value);
			break; 
		case "/":
			equals.value = parseInt(left.value) / parseInt(right.value); 
			break;
	}
	} else {
		clearButton();

	} 
}

for(var i = 0; i < numbers.length; i += 1){
	numbers[i].addEventListener('click', numberButton, false);
 }

for(var i = 0; i < operators.length; i += 1){
	operators[i].addEventListener('click', operatorButton, false);
}

equalButton.addEventListener('click', calculateOutput, false);

clear.addEventListener('click', clearButton, false);
})()


