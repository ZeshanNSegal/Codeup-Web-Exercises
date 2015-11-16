// todo:
// Create an array of objects that represent books.
// Each book should have a title and an author.
// The book author should be an object with a firstName and lastName.
// Be creative and add at least 5 books to the array
var books = [

	{
		title: "Snow Crash",

		author: 
		{
			firstName: "Neal", 
			lastName: "Stephenson" 
		},

		genre: "Science-Fiction"
	},

	{
		title: "Rant: The Oral Biography of Buster Casey",

		author: 
		{
			firstName: "Chuck", 
			lastName: "Palahniuk"
		},

		genre: "Satire"
	},

	{
		title: "Another Roadside Attraction",

		author: 
		{
			firstName: "Tom",
			lastName: "Robbins"
		},

		genre: "Historical Fiction"
	},

	{
		title: "Ready Player One",

		author: 
		{
			firstName: "Ernest",
			lastName: "Cline"
		},

		genre: "Science Fiction"
	},

	{
		title: "And You Shall Know Our Velocity",

		author: 
		{
			firstName: "David", 
			lastName: "Eggers"
		},

		genre: "Fiction"
	},

	{
		title:"One Hundred Years of Solitude",

		author: 
		{
			firstName: "Gabriel",
			lastName: "Garcia Marquez"
		},

		genre: "Magic Realism"
	}

];

// log out the books array
console.log(books);

// todo:
// Loop through the array of books using .forEach and print out the specified information about each one.
// start loop here
books.forEach(function (book, index) 
{
	console.log("-------------------------------------------------");
    console.log("Book #" + (index +1));
    console.log("Title: " + book.title);
    console.log("Author: " + book.author.firstName, book.author.lastName);
    console.log("Genre: "  + book.genre);
    console.log("-------------------------------------------------");
});    

// end loop here