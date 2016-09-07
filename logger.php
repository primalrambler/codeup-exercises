<?php

$datestamp = date('Y-m-d');
$timestamp = date('H:i:s');

function logMessage($logLevel, $message)
{
    $filename = 'test.log';
	$handle = fopen($filename, 'a');
	fwrite($handle, PHP_EOL . $logLevel." ".$message);
}

logMessage("INFO", "This is an info message.");
logMessage("ERROR", "This is an info message.");
echo $datestamp.PHP_EOL;
echo $timestamp.PHP_EOL;
