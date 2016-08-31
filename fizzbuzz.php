
//Write a program that prints the numbers from 1 to 100. But for multiples of three print “Fizz” 

<?php $max = 100; $min = 1; $fizzMultiple = 3; for ($i = $min; $i <= $max; $i+=1){	($i % $fizzMultiple == 0) ? fwrite(STDOUT,'FIZZ'.PHP_EOL) : fwrite(STDOUT,$i.PHP_EOL);}