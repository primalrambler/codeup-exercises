<?php

$names = ['Tina', 'Dana', 'Mike', 'Amy', 'Adam'];

$compare = ['Tina', 'Dean', 'Mel', 'Amy', 'Michael'];

function trawler($array, $query)
{
	$result = array_search($query, $array);
	return (is_numeric($result));
}




function compareThem($biggerArray, $smallerArray) {
	$similarElements = 0;

	foreach ($biggerArray as $key => $value) 
	{
		if (trawler($smallerArray,$value)){
			$similarElements +=1;
		}
	}
	return "There are ".$similarElements." similar elements".PHP_EOL;
}


echo (count($names) > count($compare)) ? compareThem($names, $compare) : compareThem($compare, $names); 


