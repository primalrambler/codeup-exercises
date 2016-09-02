<?php

$physicistsString = 'Gordon Freeman, Samantha Carter, Sheldon Cooper, Quinn Mallory, Bruce Banner, Tony Stark';

//standard message text
$msg = "Some of the most famous fictional theoretical physicists are ";

//parameters - 
//$string - string of comma separated names
//$sortAlpha - boolean, true to sort alphabetically, false to leave as is
//returns  - string, list of names

function humanizedList ($nameString,$sortAlpha = false)
{
	//convert nameString to array to manipulate
	$nameArray = explode(', ', $nameString);
	
	if ($sortAlpha){
		sort($nameArray);
	}

	//add the 'and' to the last element
	$nameArray[count($nameArray)-1] = "and ".$nameArray[count($nameArray)-1];

	//convert back to a nameString
	$nameString = implode(', ', $nameArray);

	return $nameString;
}

function humanizedFirstNameList ($nameString,$sortAlpha = false)
{
	//convert nameString to array to manipulate
	$nameArray = explode(', ', $nameString);

	foreach ($nameArray as $key => $wholeName) {
		$tempArray = explode(' ',$wholeName);
		$nameArray[$key] = $tempArray[0];
	}

	
	if ($sortAlpha){
		sort($nameArray);
	}

	//add the 'and' to the last element
	$nameArray[count($nameArray)-1] = "and ".$nameArray[count($nameArray)-1];

	//convert back to a nameString
	$nameString = implode(', ', $nameArray);

	return $nameString;
}




//debug
// print_r($nameArray);


echo $msg.humanizedList($physicistsString,true).PHP_EOL;
echo $msg.humanizedFirstNameList($physicistsString,true).PHP_EOL;


