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


//collects the data
function getDataInput (){
	do {
		fwrite(STDOUT,"Enter a number: ");
		$dataInput = trim(fgets(STDIN));
		throwErrorMessage($dataInput);
	} while (!is_numeric($dataInput));
	return $dataInput;
}

//validates data is numeric
function throwErrorMessage ($dataInput){
	if (!is_numeric($dataInput)){
		echo "That wasn't a number dumb ass.".PHP_EOL;
	}
}


//combinatorial function for data collection
//returns a 2 numeric element array for use in math functions
function getAllInput (){
		$inputArray = [];
	for ($i=0; $i < 2; $i++) { 
		$number = getDataInput();
		array_push($inputArray, $number);
	}
	return $inputArray;
}

//runs the numbers through all the math functions. 
//signIndex is to change between positive and negative
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


$inputArray = getAllInput();
testNumbers($inputArray,1,1);

