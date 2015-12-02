<?php
require_once '../Auth.php';
require_once '../Input.php';

session_start();
// get the current session id
$sessionId = session_id();

$userName = Input::get('userName');
$password = Input::get('password');
$login = '';


// why is this an if statement and the line below it, as well? 
if(Auth::check())
{
	header("Location: authorized.php"); 
	die();
}

if(Auth::attempt($userName, $password))
{
	header("Location: authorized.php");
	die();
} 

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
	        <input value="<?= Input::escape($userName)?>" type="text" name="userName"><br>
	        <label>Password:</label>
	        <input type="password" name="password"><br>
	        <input type="submit">
	    </form>
	    <h2><?= $login ?><h2>
    </div>
</body>
</html>