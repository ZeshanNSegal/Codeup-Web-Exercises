<?php
date_default_timezone_set("America/Chicago");
function logMessage($logLevel, $message)
{
	$todaysDate= date("Y-m-d");
	$todaysDateTime= date("h:i:s A");
    $filename = "log-{$todaysDate}.log";
	$handle = fopen($filename, 'a');
	$formattedMessage = $todaysDate . " ". $todaysDateTime .  " " . $logLevel . " " . $message . PHP_EOL;
	fwrite($handle, $formattedMessage);
	fclose($handle);
}

function logInfo($message)
{
	logMessage("INFO", $message);
}

function logError($message)
{
	logMessage("ERROR", $message);	
}

function logWarning($message)
{
	logMessage("WARNING", $message);
}

function logCritical($message)
{
	logMessage("CRITICAL", $message);
}

logInfo("This is an INFO message.");
logError("This is an ERROR message.");
logWarning("This is a WARNING message.");
logCritical("This is a CRITICAL message.");
