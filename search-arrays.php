<?php

$names = ['Tina', 'Dana', 'Mike', 'Amy', 'Adam'];

$compare = ['Tina', 'Dean', 'Mel', 'Amy', 'Michael','Dana'];

function trawler($array, $query)
{
	$result = array_search($query, $array);
	return (is_numeric($result));
}




function compareThem($firstArray, $secondArray) {
	$similarElements = 0;

	foreach ($firstArray as $key => $value) 
	{
		if (trawler($secondArray,$value)){
			$similarElements +=1;
		}
	}
	return $similarElements;
}


echo "There are ".compareThem($names, $compare)." similar elements".PHP_EOL;;


