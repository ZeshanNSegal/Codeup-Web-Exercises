"use strict";

// todo:
// Create an array holding the names of the planets of our solar system (in order, starting closest to the sun).
var planets = ['Mercury', 'Venus', 'Earth', 'Mars', 'Jupiter', 'Saturn', 'Neptune'];

// function for logging the planets array
function logPlanets() 
{
    console.log('Here is the list of planets:');
    console.log(planets);
}

console.log('Adding "The Sun" to the beginning of the planets array.');
// todo: Do what the log statement above says you will do.
planets.unshift('Sun');
logPlanets();


console.log('Adding "Pluto" to the end of the planets array.');
// todo: Do what the log statement above says you will do.
planets.push('Pluto');
logPlanets();

console.log('Removing "The Sun" from the beginning of the planets array.');
// todo: Do what the log statement above says you will do.
planets.shift();
logPlanets();

console.log('Removing "Pluto" from the end of the planets array.');
// todo: Do what the log statement above says you will do.
planets.pop();
logPlanets();

console.log('Finding and logging the index of "Earth" in the planets array.');
// todo: Do what the log statement above says you will do.
var index = planets.indexOf[3];
console.log('planets.indexOfEarth');

console.log('Using splice to remove the planet after Earth.');
// todo: Do what the log statement above says you will do.
var removed = planets.splice(3, 1);
logPlanets();

console.log('Using splice to add back the planet after Earth.');
// todo: Do what the log statement above says you will do.
planets.splice(planets.indexOf ('Earth') + 1, 0, 'Mars');
logPlanets();

console.log('Reversing the order of the planets array.');
// todo: Do what the log statement above says you will do.
planets.reverse();
logPlanets();

console.log('Sorting the planets array.');
// todo: Do what the log statement above says you will do.
planets.sort();
logPlanets();

// Copy the array of planets you created in the last lesson.
var planets = ['Mercury', 'Venus', 'Earth', 'Mars', 'Jupiter', 'Saturn', 'Neptune'];

// todo: Join the planets array with pipes (|) to create a variable named 'planetsAsString'.
var planetsAsString = planets.join('|');
console.log(planetsAsString);


// todo: Split the 'planetsAsString' variable by pipes (|) to create a variable named 'planetsAsArray'.
var planetsAsArray =planetsAsString.split('|');
console.log(planetsAsArray);

















