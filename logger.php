<?php

function getDateStamp ()
{
	return $datestamp = date('Y-m-d');	
}

function getTimeStamp()
{
	return $timestamp = date('H:i:s');
}


function logMessage($logLevel, $message)
{
    $filename = 'test.log';
	$handle = fopen($filename, 'a');
	fwrite($handle, PHP_EOL .getDateStamp()." ".getTimeStamp()." ". $logLevel." ".$message);
}

logMessage("INFO", "This is an info message.");
logMessage("ERROR", "This is an info message.");

