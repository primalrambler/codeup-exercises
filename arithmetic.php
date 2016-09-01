<?php

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

function testNumbers($numberArray,$signIndex0, $signIndex1)
{
	foreach ($numberArray as $numType => $numArray) {
		echo "Testing values of type: {$numType}".PHP_EOL;
		echo $numArray[0] * $signIndex0." + ".$numArray[1] * $signIndex1." = ".add($numArray[0] * $signIndex0,$numArray[1] * $signIndex1).PHP_EOL;
		echo $numArray[0] * $signIndex0." - ".$numArray[1] * $signIndex1." = ".subtract($numArray[0] * $signIndex0,$numArray[1] * $signIndex1).PHP_EOL;
		echo $numArray[0] * $signIndex0." * ".$numArray[1] * $signIndex1." = ".multiply($numArray[0] * $signIndex0,$numArray[1] * $signIndex1).PHP_EOL;
		echo $numArray[0] * $signIndex0." / ".$numArray[1] * $signIndex1." = ".divide($numArray[0] * $signIndex0,$numArray[1] * $signIndex1).PHP_EOL;	
		echo $numArray[0] * $signIndex0." % ".$numArray[1] * $signIndex1." = ".modulus($numArray[0] * $signIndex0,$numArray[1] * $signIndex1).PHP_EOL;	

	}
}

testNumbers($testNumberArray,1,1);
testNumbers($testNumberArray,-1,-1);
testNumbers($testNumberArray,-1,1);
testNumbers($testNumberArray,1,-1);
