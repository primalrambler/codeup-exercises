<?php

function getDateStamp ()
{
	return $datestamp = date('Y-m-d');	
}

function getTimeStamp()
{
	return $timestamp = date('H:i:s');
}


function logMessage($level, $message)
{
    $filename = 'log-'.getDateStamp().'.log';
	$handle = fopen($filename, 'a');
	fwrite($handle, PHP_EOL .getDateStamp()." ".getTimeStamp()." ".$level." ".$message);
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

