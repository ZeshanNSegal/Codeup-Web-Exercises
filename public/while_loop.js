"use strict"
 // 4 different ways to run the same loop 
var i = 2;

do { 
	console.log('while loop iteration #' + i);
	i = i * 2;
} while (i <= 65536);

var i = 1;

do {
console.log('while loop iteration #' + Math.pow(2,i));
i++;
} while (i <= 16);

var i = 1;

while(i < 65536) {
	i *= 1;
	i = i * 2;
	console.log(i);
}

var i = 1;

while (i <= 16) {
	console.log(Math.pow(2, i));
	i += 1; // i = i + 1;
}
 //for(starts, compares, changes)
for (var i = 0; i < 10; i++) {
	console.log('for loop iteration #' + 1); 
}


var i = 0;

for (; i < 10;) {
	console.log('for loop iteration #' +1);
	i++;
}

for (var i = 0, j = 9; i < 10; i++, j--){
	console.log('for loop iteration #' + 1 + ', j = ' + j);
}



// var i = 5;

// do {
// 	console.log('while loop iteration #' + i)
// 	i = i * 5;
// } while (i <= 500050005000);