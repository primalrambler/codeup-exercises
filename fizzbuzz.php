<?php 

//Write a program that prints the numbers from 1 to 100. But for multiples of three print “Fizz” and mult of 5 "buzz" 

$max = 100; 
$min = 1; 
$fizzMultiple = 3; 
$buzzMultiple = 5;

for ($i = $min; $i <= $max; $i+=1){
	if ($i % fizzMultiple == 0 && $i % buzzMultiple == 0 ) {
		fwrite(STDOUT,'FIZZBUZZ'.PHP_EOL);
	} elseif ($i % $fizzMultiple == 0){
		fwrite(STDOUT,'FIZZ'.PHP_EOL);
	} elseif ($i % $buzzMultiple == 0) {
		fwrite(STDOUT,'BUZZ'.PHP_EOL);
	} else {
		fwrite(STDOUT,$i.PHP_EOL);
	}
}