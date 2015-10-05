"use strict"
var i = 2;

do { 
	console.log('while loop iteration #' + i);
	i = i * 2;
} while (i <= 65536);
