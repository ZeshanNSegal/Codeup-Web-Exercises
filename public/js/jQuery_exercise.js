"use strict";

$(document).ready(function() {
	var codeup = $('.codeup'); 
	var flanders = $('#flandersHello');
		
	// $('#flandersHello').css('background-color', '#ff0').css('font-size', '50px').css('text-align', 'center');
	// $('*').css('border', '1px solid red').css('color', 'red');
	// $('p, .codeup1, .codeup2').css('font-size', '26px').css('color', 'blue');
	// $('li').css('font-size', '20px').css('color', 'green');
	// $('h1, p, li').css('background-color', 'grey');
	// alert( $('h1').html() );

	$('h1').click(function() {
		$(this).css('background-color', '#998766');
	});

	$('p').dblclick(function() {
		$(this).css('font-size', '18px');
	});

	$('li').hover(
		function() {
			$(this).css('color', 'red');
		}, 
		function() {
			$(this).css('color', 'initial');
		}
	);
});

// $("nav-links a").click(function() {
// 		console.log('I was clicked.');

// 			$(this).css('background-color', '#4f4');
// 	});

// $("#nav-links a").dblclick(function() {
// 		$(this).css('background-color', "#fff");
// 	});

// $("nav-links a").hover(function() {
// 		$(this).css('font-size', '2em').css('font-weight', 'bold').css('color', '#faa');
// 	}, function() { **** two events for hover hover in and hover out**** 
// 		$(this).css({
// 			"font-size": "1em",
// 			"font-weight": "normal",
// 			"color": "#000"
// 		})