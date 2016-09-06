<?php


//variables

$filename = 'report.txt';
$totalSales = 0;
$avgUnitsSold = 0;
$numberOfEmployees = 0;
$keyword = '*******';



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
function trimRawSalesDataReport($keyword,$arrayToTrim)
{
	$keyStart = customSearch($keyword,$arrayToTrim) + 1;

	$arrayToTrim = array_slice($arrayToTrim, $keyStart);
	return $arrayToTrim;
}


//separate each line into an associative array format
function parseRawSalesData ($salesReportArray)
{
	foreach ($salesReportArray as $key => $dataString) {
		$tempArray = explode(", ", $dataString);
		$salesPerson['employee number'] = $tempArray[0];
		$salesPerson['first name'] = $tempArray[1];
		$salesPerson['last name'] = $tempArray[2];
		$salesPerson['sales units'] = $tempArray[3];
		$salesReportArray[$key] = $salesPerson;
	}
	return $salesReportArray;
}

function totalEmployees ($salesReportArray)
{
	$result = count($salesReportArray);
	return $result;
}

function totalSales ($salesReportArray)
{	
	$totalSales = 0;

	foreach ($salesReportArray as $key => $value) {
		$totalSales += intval($value['sales units']);
	}
	return $totalSales;
}

function sortSalesUnits ($salesReportArray)
{
	foreach($salesReportArray as $key => $value) {
      //still going to sort by firstname
    	$sortUnits[] = $value['sales units'];
    	$sortLastName[] = $value['last name'];
  }
  	array_multisort($sortUnits, SORT_DESC, $sortLastName, SORT_ASC, $salesReportArray);
  	print_r($salesReportArray);	
  	return $salesReportArray;
}


function reportSalesData ($salesReportArray)
{
	//generate sales numbers
	$totalSales = totalSales($salesReportArray);
	$numberOfEmployees = totalEmployees($salesReportArray);
	$averageSalesUnits = round($totalSales/$numberOfEmployees);

	$msgEmployee;



$msg = <<<SALES_REPORT
---------------------------------------------------
SUMMARY SALES INFORMATION
---------------------------------------------------
Total Number of Employees:		$numberOfEmployees
Total Number of Units Sold:		$totalSales
Avg. Number of Units Sold:		$averageSalesUnits

---------------------------------------------------
Units 	|	Employee 			| ID
---------------------------------------------------

SALES_REPORT;
	
	echo $msg;

	foreach ($salesReportArray as $key => $value) {
		printf("%d 	%s %s 			%d\n", $value['sales units'],$value['first name'],$value['last name'],$value['employee number']);
	}
}



// --------------------  operational code

//get file contents into an array
$salesReportArray = file($filename, FILE_IGNORE_NEW_LINES | FILE_SKIP_EMPTY_LINES);

//trim out unneccesary info
$salesReportArray = trimRawSalesDataReport($keyword,$salesReportArray);

//format raw data into usable array
$salesReportArray = parseRawSalesData($salesReportArray);


//sort sales data from highest to lowest sales units
$salesReportArray = sortSalesUnits($salesReportArray);

reportSalesData($salesReportArray);













