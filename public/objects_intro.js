"use strict"
// to call a function you need to use ()!
var person = {};
person.firstName = 'Zee';
person.lastName = 'Segal';

person.sayHello = function() 
{
	console.log(this.firstName + ' ' + this.lastName + ' says, "Hi everybody!"');
};


