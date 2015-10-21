"use strict"

function displayNewCity(city){
	var newCity;
	$.get("http://api.openweathermap.org/data/2.5/forecast?q=" + city, {
    APPID: "a3d9eecd1b08738898fb99c7a8200755",
     units: "imperial",
     cnt: 3
	}).done(function(data) {
    console.log(data);
	var cityWeather;
	var newCityName = data.city.name;
	$("h4").html(newCityName);
		data.list.forEach(function(day, i) {
			cityWeather = "<h3>" + day.main.temp_max + "&deg; / " + day.main.temp_min + "&deg;</h3>";
			cityWeather += '<img src="http://openweathermap.org/img/w/' + day.weather[0].icon + '.png">';
			cityWeather += "<p><strong>" + day.weather[0].main + ": </strong>" + day.weather[0].description[0].toUpperCase() + day.weather[0].
				description.substring(1, day.weather[0].description.length) + "</p>";
			cityWeather += "<p><strong>Humidity: </strong>" + day.main.humidity + "</p>";
			cityWeather += "<p><strong>Wind: </strong>" + day.wind.speed + "</p>";
			cityWeather += "<p><strong>Pressure: </strong>" + day.main.pressure + "</p>";
			$(".day" + (i + 1)).html(cityWeather);	 
			console.log(day);
		});
	});
}

displayNewCity("San Antonio, TX"); 

// google stuff
	var mapOptions = {
    // Set the zoom level
	    zoom: 5,

	    // This sets the center of the map at our location
	    center: {
		    lat:  29.4284595,
		    lng: -98.492433
    	}
  	};
	var map = new google.maps.Map(document.getElementById("map-canvas"), mapOptions);
  	var sanAn = { lat: 29.4284595, lng: -98.492433 };
  	var marker = new google.maps.Marker({
      position: sanAn,
      map: map
    });

    $("#location-form").submit(function(event) {
    	event.preventDefault();
    	var location = $('#location').val();
    	var geocoder = new google.maps.Geocoder();

    	// Geocode our address
	    geocoder.geocode({ "address": location }, function(results, status) {

		    // Check for a successful result
		    if (status == google.maps.GeocoderStatus.OK) {

		       // Recenter the map over the address
		       map.panTo(results[0].geometry.location);
		       		
		       		marker.setMap(null);
 				 	// clearMarkers();
  					// markers = [];

		       marker = new google.maps.Marker({
		       	position: results[0].geometry.location,
		       	map:map
		       });
		       //Displays New City Name at the top of my page... 
		       displayNewCity(results[0].formatted_address)
		    } else {

		       // Show an error message with the status if our request fails
		       alert("Geocoding was not successful - STATUS: " + status);
		   }
		});

    	console.log($('#location').val());

    });

// var date = new Date(data.list[index].dt * 1000);
// date.toLocaleString().(0, date, toLocaleString().indexOf(',' ) );

