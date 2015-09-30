<?php
  var_dump($_GET);
  var_dump($_POST);
?>
<!doctype html>
<html>
<head>
		<title>My First HTML Form</title>
	</head>
	<body>

 		<h1>User Login</h1>
 		<form method="POST" action="/my_first_form.php">
		        <label for="username">Username</label><br>
        		<input id="username" name="username" type="text" placeholder="I Want Your Username" required><br><br>
		        <label for="password">Password</label><br>
		        <input id="password" name="password" type="password" placeholder="Gimmie Your Password"><br><br>
		        <button type="submit">Click On Me, Dummy!</button><br><br>
		</form>
		<hr>

		<form method="POST" action="/my_first_form.php">
			<h1>Compose an Email</h1>
		        <label for="to">To:</label><br>
        		<input id="to" name="to" type="text" placeholder="Enter Email" required><br><br>
		        <label for="from">From:</label><br>
		        <input id="from" name="from" type="from" placeholder="Your Email Address"><br><br>
		        <label for="subject">Subject:</label><br>
        		<input id="subject" name="subject" type="text" placeholder="Subject Of Email"><br><br>
		        <label for="body">Body:</label><br>
		        <textarea id="body" name="body" rows="20" cols="40" placeholder="Body Of The Email"></textarea><br><br>
				<input type="checkbox" id="Save a Copy to Sent Folder?" name="Save a Copy to Sent Folder?" value="yes" checked>
		    	<label for="checkbox">Save a Copy to Sent Folder?</label><br>
		        <button type="submit">Click On Me, Dummy!</button><br><br>
		</form>
		<hr>

		<form method="POST" action="/my_first_form.php">
			<h1>Multiple Choice Test</h1>

			<h2> Who Type of Bread Do You Like?</h2>
				<p><label><input type="radio" name="q1" value="rye">Rye</label></p> <!-- Use ,p></p> instead of <br> -->
				<p><label><input type="radio" name="q1" value="wheat">Wheat</label></p>
				<p><label><input type="radio" name="q1" value="white">White</label></p>
			
			<h2>What's the Best Thing to Add to Your Sandwich?</h2>
				<p><label><input type="radio" name="q2" value="bacon">Bacon</label></p>
				<p><label><input type="radio" name="q2" value="avo">Acvocado</label></p>

			<h2>What Kind Of Sauce You Want On Your Sandwich?</h2>
				<label><input type="checkbox" id="os1" name="os[]" value="mustard">Mustard</label>
				<label><input type="checkbox" id="os2" name="os[]" value="mayo">Mayo</label>
				<label><input type="checkbox" id="os3" name="os[]" value="horseradish">Horseradish</label>

			<h2>What Else Do You Want On Your Sandwich?</h2>	
				<label for="sandwich"></label>
				<p>
					<select id="os" name="os[]" multiple>
						<option value="onions">Onions</option>
						<option value="tomtato">Tomato</option>
						<option value="lettuce">Lettuce</option>
					</select>
				</p>	

				<button type="submit">Submit Sandwich Options</button>

		</form>
		<hr>

		 <form method="POST" action="/my_first_form.php">
		 	<h1>Select Testing</h1>

		 	<h2>Are You Alive?</h2>
		 		<label for="alive">Select Your Answer: </label>
		 		<select id="alive" name="alive">
		 			<option value="1">Yes</option>
		 			<option value="0">No</option>
		 		</select>	
		 		<button type="submit">Submit Answer</button>

		 </form>	

	</body>

 </html>