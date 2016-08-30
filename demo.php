<?php

echo "\$argc is the number of arguments passed to a script".PHP_EOL;
var_dump($argc);

echo PHP_EOL;
echo "\$argv is an arrary of all the arguments".PHP_EOL;
var_dump($argv);

echo "the filename of the script is $argv[0]".PHP_EOL;

//null coalescing pattern

if (isset($argv[1])){
	$firstArgument = $argv[1];
} else {
	$firstArgument = "no value specified";
}

echo "The first argument is $firstArgument".PHP_EOL;


//or in ternary

$firstArgument = (isset($argv[1])) ? $argv[1]: "not specified";