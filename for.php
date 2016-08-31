<?php

//ask for user input
// first number then second number
//validate user input

//get first number
do {
	fwrite(STDOUT,"Enter the first number: ");
	$firstNum = trim(fgets(STDIN));
} while (!is_numeric($firstNum));

//get second number
do {
	fwrite(STDOUT,"Enter the second number: ");
	$secondNum = trim(fgets(STDIN));
} while (!is_numeric($secondNum));


//get number to count by
do {
	fwrite(STDOUT,"Count by ? ");
	$xcrement = trim(fgets(STDIN));

	//if user just hits enter assign +/- 1
	if (is_null($xcrement)){
		($firstNum >= $secondNum) ? $xcrement = -1 : $xcrement = 1;
		break;
	}
	//check if increment will actually count to the number
	$isDivisible = ($firstNum - $secondNum) % $xcrement == 0;
} while ((!is_numeric($xcrement)) || !$isDivisible);

//assign output variable, needed since for loop
//counts up or down
$outNum = $firstNum;

//countDOWN to second number
if ($firstNum >= $secondNum) {
	for ( $i = $firstNum; $i >= $secondNum; $i += ($xcrement * -1)){
	fwrite(STDOUT,$i.PHP_EOL);
	}

//countUP to second number	
} else {
	for ( $i = $firstNum; $i <= $secondNum; $i += $xcrement){
	fwrite(STDOUT,$i.PHP_EOL);
	}
}
