<?php
require('functions.php');

session_start();
// get the current session id
$sessionId = session_id();

function pageController()
{

	if (isset($_SESSION['LOGGED_IN_USER'])){
		header("Location: authorized.php"); 
		die();
	}

	$userName = inputHas('userName') ? escape($_REQUEST['userName']) : '';
	$password = inputHas('password') ? escape($_REQUEST['password']) : '';
	$login = '';

	if($userName != '' || $password != ''){
		if ($userName == 'guest' && $password == 'password')
		{
			$_SESSION['LOGGED_IN_USER'] = $userName;
			header("Location: authorized.php");
			die();
		} else{
			$login = 'LoginFailed';
		}
	}

	return array(
		'userName'=> $userName, 
		'password'=> $password, 
		'login' => $login
	);
}

extract(pageController());
?>

<!DOCTYPE html>
<html>
<head>
    <title>LOGIN</title>
    <link rel= "stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.5/css/bootstrap.min.css">
    <link rel= "stylesheet" href="/logincss.css">
</head>
<body>
	<h2>PLEASE LOGIN</h2>
	<div id = "container">
	    <form method="POST">
	        <label>UserName:</label>
	        <input value="<?=$userName?>" type="text" name="userName"><br>
	        <label>Password: </label>
	        <input type="password" name="password"><br>
	        <input type="submit">
	    </form>
	    <h2><?= $login ?><h2>
    </div>
</body>
</html>