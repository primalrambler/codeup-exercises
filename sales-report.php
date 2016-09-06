<?php


//variables

$filename = 'report.txt';
$totalSales = 0;
$avgUnitsSold = 0;
$numberOfEmployees = 0;


//get file contents into an array
$salesReportArray = file($filename, FILE_IGNORE_NEW_LINES | FILE_SKIP_EMPTY_LINES);

//generic search function for keyword
function customSearch($keyword, $arrayToSearch){
    foreach($arrayToSearch as $key => $arrayItem){
        if( stristr( $arrayItem, $keyword ) ){
            return $key;
        }
    }
}


//search for the beginning of the useful information
// remove unnecessary information. prep for parsing data
function trimContents($keyword,$arrayToTrim)
{
	$keyStart = customSearch($keyword,$arrayToTrim) + 1;
	echo "key start is : ".$keyStart;

	$arrayToTrim = array_slice($arrayToTrim, $keyStart);
	return $arrayToTrim;
}

function parseRawSalesData ($salesReportArray)
{
	
}




var_dump(trimContents('*****',$salesReportArray));
