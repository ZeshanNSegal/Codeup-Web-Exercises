"use strict";

// create a circle object
var circle = 
{
    radius: 3,
    getArea: function () 
    {
        var area = Math.pow(this.radius, 2) * Math.PI; // todo: finish this method
        // hint: area = pi * radius^2
        return area;// todo: return data
    },

    getCircumferece: function () 
    {
        return 2 * Math.PI * this.radius; 
    },

    getDiameter: function() 
    {
        return 2 * this.radius;
    },

    logInfo: function (do_round) 
    {
        var area = this.getArea();
        if (do_round) 
        { 
            area = Math.round(area);
        }
        // todo: complete this method. if round is true, round the result to the nearest integer.
        console.log('Area of a circle with radius: ' + this.radius + ', is: ' + area);
    }
};

// log info about the circle
circle.logInfo(false);
circle.logInfo(true);

// todo:
// Change the radius of the circle to 5.

circle.radius = 5; 


// var circle = {
//     radius: 5,
//     getArea: function () {
//         var area = Math.pow(this.radius, 2) * Math.PI;
//         return area; 
//     },

//     logInfo: function (do_round) {
//         var area = this.getArea();
//         if (do_round) {
//             area = Math.round(area)
//         }
//         console.log('Area of a circle with radius: ' + this.radius + ', is: ' + area);
//     }
// };
circle.logInfo(false);
circle.logInfo(true);

console.log('The diameter of a circle witha radius of ' + circle.radius + ' is ' circle.getDiameter());

console.log('The circumference of a circle with a radius of ' + circle.radius + ' is ' circle.getCircumference());