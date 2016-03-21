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

 		<h1 style="color:red">User Login</h1>
 		<form method="POST" action="/forms_php/my_first_form.php">
		        <label for="username">Username</label><br>
        		<input id="username" name="username" type="text" placeholder="I Want Your Username" autofocus required><br><br>
		        <label for="password">Password</label><br>
		        <input id="password" name="password" type="password" placeholder="Gimmie Your Password" required><br><br>
		        <button type="submit">Click On Me, Dummy!</button><br><br>
		</form>
		
		<form method="POST" action="/forms_php/my_first_form.php">
			<h1>Compose an Email</h1>
		        <label for="to">To:</label><br>
        		<input id="to" name="to" type="text" placeholder="Enter Email" required><br><br>
		        <label for="from">From:</label><br>
		        <input id="from" name="from" type="from" placeholder="Your Email Address"><br><br>
		        <label for="subject">Subject:</label><br>
        		<input id="subject" name="subject" type="text" placeholder="Subject Of Email"><br><br>
		        <label for="body">Body:</label><br>
		        <textarea id="body" name="body" rows="3" cols="18" placeholder="Body Of The Email"></textarea><br><br>
				<input type="checkbox" id="Save a Copy to Sent Folder?" name="Save a Copy to Sent Folder?" value="yes" checked>
		    	<label for="checkbox">Save a Copy to Sent Folder?</label><br>
		        <button type="submit" style="color:blue">Click On Me, Dummy!</button><br><br>
		</form>

		<form method="POST" action="/forms_php/my_first_form.php">
			<h1>Multiple Choice Sandwich</h1>

			<h2> Who Type of Bread Do You Like?</h2>
				<p><label><input type="radio" name="q1" value="rye">Rye</label></p> <!-- Use ,p></p> instead of <br> -->
				<p><label><input type="radio" name="q1" value="wheat">Wheat</label></p>
				<p><label><input type="radio" name="q1" value="white">White</label></p>
			
			<h2>What's the Best Thing to Add to Your Sandwich?</h2>
				<p><label><input type="radio" name="q2" value="bacon">Bacon</label></p>
				<p><label><input type="radio" name="q2" value="avo">Acvocado</label></p>

			<h2>What Kind Of Sauce You Want On Your Sandwich?</h2>
				<label><input type="checkbox" id="suace1" name="sauce[]" value="mustard">Mustard</label>
				<label><input type="checkbox" id="sauce2" name="sauce[]" value="mayo">Mayo</label>
				<label><input type="checkbox" id="sauce3" name="sauce[]" value="horseradish">Horseradish</label>

			<h2>What Else Do You Want On Your Sandwich?</h2>	
				<label for="sandwich">Select Your Choice Below:</label>
				<p>
					<select id="extras" name="extras[]" multiple>
						<option value="onions">Onions</option>
						<option value="tomtato">Tomato</option>
						<option value="lettuce">Lettuce</option>
					</select>
				</p>	

				<button type="submit">Submit Sandwich Options</button>
		</form>

		<form method="POST" action="/forms_php/my_first_form.php">
		 	<h1>Select Testing</h1>

		 	<h2>Are You Alive?</h2>
		 		<label for="alive">Select Your Answer:</label>
		 		<select id="alive" name="alive">
		 			<option selected value="1">Yes</option>
		 			<option value="0">No</option>
		 		</select><br>	
		 		<button type="submit">Submit Answer</button>
		 </form>	

	</body>

 </html>