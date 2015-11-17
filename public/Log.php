<?php

class Log
{
	public $filename = '';

	public function logMessage($logLevel, $message)
	{
		//Each entry is formated with YYYY-MM-DD HH:MM: SS [LEVEL] MESSAGE
		$todaysDate= date("Y-m-d");
		$todaysDateTime= date("h:i:s A");

		//Append string to file if file exists or create file and write
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