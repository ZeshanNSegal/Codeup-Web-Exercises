<?php
require '../Auth.php';

session_start();
$sessionId = session_id();

if (!Auth::check()){
	header("Location: login.php");
	die();
} else {
	$username = Auth::user();
}

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