"use strict"
$(document).ready(function() {
	$("#btn").click(function(){
		$("dd").toggleClass("invisible:");
	});
	$("dt").click(function() {
		$(this).next("dd").toggleClass("invisible");
	});
	$("ul").each(function(index) {
		$(this).children().first().css("font-weight", "bold");
	});
	$("li").click(function() {
		$("li").parent().addClass("invisible");
	});
	$("h3").click(function(){
		$("li").parent(removeClass("invisible");
	});
});


	// $('li').first().css('font-weight', 'bold');
		// $('li:nth-child(3)').css('background-color', '#0F0'); alt. way to do it.
				// $('li').first().css('font-weight', 'bold');