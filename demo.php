<?php

//get the cohort's name file to run the demo randomizer


if (! isset($argv[1])){
	echo 'give me filename!'.PHP_EOL;
	die;
}

cohort = $argv[1];

function getFileContents($filename)
{
	$handle = fopen($filename, 'r');

	$fileContents = $fread($handle, filesize($filename));

	fclose($handle);

	return $fileContents;
}

$names = (getFileContents($cohort));

$names = explode("\n", $names);