<?php

//ask for user input
// first number then second number
//validate user input


do {
	fwrite(STDOUT,"Enter the first number: ");
	$firstNum = trim(fgets(STDIN));
} while (!is_numeric($firstNum));

do {
	fwrite(STDOUT,"Enter the second number: ");
	$secondNum = trim(fgets(STDIN));
} while (!is_numeric($secondNum));

$outNum = $firstNum;


//set value to decrement/increment by
($firstNum >= $secondNum) ? $xcrement = -1 : $xcrement = 1;

//loop through and increment or decrement by 1

for ( $i = 0; $i <= abs($firstNum - $secondNum); $i += 1 ){
	fwrite(STDOUT,$outNum.PHP_EOL);
	$outNum += $xcrement;
}

//print to screen