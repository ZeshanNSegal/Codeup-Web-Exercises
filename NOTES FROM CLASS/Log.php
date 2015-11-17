<?php

date_default_timezone_set("America/Chicago");

class Log
{
	public $filename = 'unknown';

	public function logMessage($logLevel, $message)
	{
		$todaysDate= date("Y-m-d");
		$todaysDateTime= date("h:i:s A");
		$handle = fopen($this->filename, 'a');
		$formattedMessage = $todaysDate . " ". $todaysDateTime .  " " . $logLevel . " " . $message . PHP_EOL;
		fwrite($handle, $formattedMessage);
		fclose($handle);	
	}

	public function info($message){
		$this->logMessage("Info", $message);
	}

	public function error($message){
		$this->logMessage("Error", $message);
	}
}
?>