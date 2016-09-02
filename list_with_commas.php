<?php

$physicistsString = 'Gordon Freeman, Samantha Carter, Sheldon Cooper, Quinn Mallory, Bruce Banner, Tony Stark';

//standard message text
$msg = "Some of the most famous fictional theoretical physicists are ";


//convert string to array to manipulate
$physicistsArray = explode(', ', $physicistsString);

//add the 'and' to the last element
$physicistsArray[count($physicistsArray)-1] = "and ".$physicistsArray[count($physicistsArray)-1];

//debug
// print_r($physicistsArray);

//convert back to a string
$physicistsString = implode(', ', $physicistsArray);

echo $msg.$physicistsString.PHP_EOL;


