<?php
require('functions.php');

session_start();
$sessionId = session_id();

if (!isset($_SESSION['LOGGED_IN_USER'])){
	header("Location: login.php");
	die();
} else {
	$username = $_SESSION['LOGGED_IN_USER'];
}
// get the current session id

?>
<!DOCTYPE html>
<html>
<head>
    <title>AUTHORIZED</title>
    <link rel= "stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.5/css/bootstrap.min.css">
    <link rel= "stylesheet" href="/logincss.css">
</head>
<body>
    <h1>AUTHORIZED and logged in as <?= $username ?></h1>
    <a class="btn btn-primary" href="/logout.php">Logout</a>
</body>
</html>