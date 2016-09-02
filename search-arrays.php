<?php

$names = ['Tina', 'Dana', 'Mike', 'Amy', 'Adam'];

$compare = ['Tina', 'Dean', 'Mel', 'Amy', 'Michael'];

function trawler($array, $query)
{
	$result = array_search($query, $array);
	return (is_numeric($result)) ? 'TRUE' : 'FALSE';
}

$testName = 'Bob';
echo trawler($names, $testName).PHP_EOL;
