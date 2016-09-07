<?php

function logMessage($level, $message)
{
	$timestamp = date('H:i:s');
	$datestamp = date('Y-m-d');
    $filename = 'log-'.$datestamp.'.log';
	$handle = fopen($filename, 'a');
	fwrite($handle, PHP_EOL .$datestamp." ".$timestamp." ".$level." ".$message);
}

function logError($message)
{
    logMessage('ERROR',$message);
}

function logInfo($message)
{
    logMessage('INFO',$message);
}

logInfo("This is an info message.");
logError("This is an error message.");

