<?php

function getDateStamp ()
{
	return $datestamp = date('Y-m-d');	
}

function getTimeStamp()
{
	return $timestamp = date('H:i:s');
}


function logInfo($message)
{
    $filename = 'log-'.getDateStamp().'.log';
	$handle = fopen($filename, 'a');
	fwrite($handle, PHP_EOL .getDateStamp()." ".getTimeStamp()." INFO ".$message);
}

function logError($message)
{
    $filename = 'log-'.getDateStamp().'.log';
	$handle = fopen($filename, 'a');
	fwrite($handle, PHP_EOL .getDateStamp()." ".getTimeStamp()." ERROR ".$message);
}

logInfo("This is an info message.");
logError("This is an error message.");

