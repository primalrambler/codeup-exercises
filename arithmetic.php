<?php

$inputArray = [];

function add($a, $b)
{
    return $a + $b;
}

function subtract($a, $b)
{
    return $a - $b;
}

function multiply($a, $b)
{
    return $a * $b;
}

function divide($a, $b)
{
    return ($b == 0) ? "cannot divide by zero" : $a / $b;

}

function modulus($a, $b)
{
	return ($b > -1 && $b< 1) ? "cannot mod by zero" : $a % $b;
}

// Add code to test your functions here

$testNumberArray = [
	'integer' => [37, 110],
	'decimal' => [3.4897, 57.8929],
	'fractional' => [0.8842, 0.004837],
];


function validateInput (){
	//get first number
	do {
		fwrite(STDOUT,"Enter the first number: ");
		$a = trim(fgets(STDIN));
		if (!is_numeric($a)){
			echo "That wasn't a number dumb ass.".PHP_EOL;
		}
	} while (!is_numeric($a));

	//get second number
	do {
		fwrite(STDOUT,"Enter the second number: ");
		$b = trim(fgets(STDIN));
		if (!is_numeric($b)){
			echo "That wasn't a number dumb ass.".PHP_EOL;
		}
	} while (!is_numeric($b));
	// print_r([$a, $b]);
	return [$a, $b];
}

//runs the numbers through all functions. signIndex is to change between positive and negative
// 1 -> matches data entry sign
//-1 -> flips data entry sign
//assumes data entered purposefully, default to 1

function testNumbers($numArray, $signIndex0 = 1, $signIndex1 = 1)
{
	echo $numArray[0] * $signIndex0." + ".$numArray[1] * $signIndex1." = ".add($numArray[0] * $signIndex0,$numArray[1] * $signIndex1).PHP_EOL;
	echo $numArray[0] * $signIndex0." - ".$numArray[1] * $signIndex1." = ".subtract($numArray[0] * $signIndex0,$numArray[1] * $signIndex1).PHP_EOL;
	echo $numArray[0] * $signIndex0." * ".$numArray[1] * $signIndex1." = ".multiply($numArray[0] * $signIndex0,$numArray[1] * $signIndex1).PHP_EOL;
	echo $numArray[0] * $signIndex0." / ".$numArray[1] * $signIndex1." = ".divide($numArray[0] * $signIndex0,$numArray[1] * $signIndex1).PHP_EOL;	
	echo $numArray[0] * $signIndex0." % ".$numArray[1] * $signIndex1." = ".modulus($numArray[0] * $signIndex0,$numArray[1] * $signIndex1).PHP_EOL;	

}

$inputArray = validateInput();
// print_r($inputArray);
testNumbers($inputArray,1,1);

