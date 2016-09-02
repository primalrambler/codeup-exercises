<?php


// Write a function called combine_arrays() that will take in two array values as parameters and return a new array with values from both.

// If the arrays have the same value at the same index, then it should only be added once.
// If the values differ, then the value from the first array should be added and then the second.

$names = ['Tina', 'Dana', 'Mike', 'Amy', 'Adam'];

$compare = ['Tina', 'Dean', 'Mel', 'Amy', 'Michael','Dana'];

function compare_elements($array, $query)
{
	$result = array_search($query, $array);
	return (is_numeric($result)) ? $result : -1;
}


function combine_arrays($smallerArray, $biggerArray) 
{
	$resultant = [];

	foreach ($smallerArray as $key => $value) {
		if (compare_elements($biggerArray,$value) == $key){
			array_push($resultant,$value);
		} else {
			array_push($resultant,$value);
			array_push($resultant,$biggerArray[$key]);
		}
	}
	return $resultant;
}


print_r(combine_arrays($names,$compare));


