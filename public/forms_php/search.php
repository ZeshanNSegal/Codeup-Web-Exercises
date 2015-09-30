<!doctype html>
<html>
	<head>
		<title>SEARCH</title>
	</head>
	<body>

 		<h1>GET</h1>
 		<?php var_dump($_GET); ?>
    	<h1>POST</h1>
    	<?php var_dump($_POST); ?>

 		<form method="GET" action="/forms_php/search.php">
        	<input id="search" name="search" type="search" placeholder="I Want To Search" required autofocus><br><br>
		    <button type="submit">Click On Me, Dummy!</button>
		</form>

		<br>

 		<h1>LOGIN</h1>
 		<form method="POST" action="/forms_php/search.php">
		    <label for="username">Username:</label><br>
        	<input id="username" name="username" type="text" placeholder="I Want Your Username" required><br>
		    <label for="password">Password:</label><br>
		    <input id="password" name="password" type="password" placeholder="Gimmie Your Password"><br><br>
		    <button type="submit">Submizzle My Nizzle!</button><br>
		</form>


 		<h1>SIGN-UP FORM</h1>
 		<form method="POST" action="/forms_php/search.php">
		    <label for="name">Name:</label><br>
        	<input id="name" name="name" type="text" placeholder="I Want Your Name" required><br>
	       	<label for="sign_up_email">Email:</label><br>
    		<input id="sign_up_email" name="sign_up_email" type="text" placeholder="I Want Your Email" required><br>
	        <label for="sign_up_username">Username:</label><br>
    		<input id="sign_up_username" name="sign_up_username" type="text" placeholder="I Want Your Username" required><br>
	        <label for="password">Password:</label><br>
	        <input id="password" name="password" type="password" placeholder="Gimmie Your Password"><br><br>
	        <button type="submit">Click My Button Real Good!</button>
		</form>

		<h1>CONTACT ME</h1>
 		<form method="POST" action="/forms_php/search.php">
		    <label for="address">Address:</label><br>
        	<input id="address" name="address" type="text" placeholder="I Want Your Addy" required><br>
		    <label for="subject">Subject:</label><br>
        	<input id="subject" name="subject" type="text" placeholder="I Want Your Subject" required><br>
		    <label for="body">Body:</label><br>
        	<textarea id="body" name="body" rows=5 cols=20 placeholder="I Want Your Body" required></textarea><br><br>
        	<input type="checkbox" id="mailing_list" name="mailing_list" value="yes" checked>
			<label for="mailing_list">Sign Me Up For Your Mailing List!</label><br><br>
		    <button type="submit">Push Here For Some Real Good Stuff!</button>
		</form><br>

		<h1>What Operating Systems Have You Used?</h1>
		<label><input type="checkbox" id="os1" name="os[]" value="linux"> Linux</label><br>
		<label><input type="checkbox" id="os2" name="os[]" value="osx"> OS X</label><br>
		<label><input type="checkbox" id="os3" name="os[]" value="windows" checked> Windows</label><br>
		
		<h1>What Is The Capital Of Texas?</h1>
			<label><input type="radio" name="q1" value="houston">Houston</label><br>
			<label><input type="radio" name="q1" value="dallas">Dallas</label><br>
			<label><input type="radio" name="q1" value="austin">Austin</label><br>
			<label><input type="radio" name="q1" value="san antonio">San Antonio</label><br>

	</body>
 </html>