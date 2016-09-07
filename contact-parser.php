<?php

$filename = 'contacts.txt';


function getFileContents ($filename)
{
    $handle = fopen($filename, 'r');

	$fileContents = fread($handle, filesize($filename));

	fclose($handle);

	return $fileContents;
}

function phoneNumberFormat ($phoneNumber)
{
	$phoneNumber = substr($phoneNumber, 0,3).'-'.substr($phoneNumber, 3, 3).'-'.substr($phoneNumber, 6);
	return $phoneNumber;

}


function parseContacts($fileContents)
{
    //initial array set up
    $contacts = array();
    $contacts = explode("\n", $fileContents);
    array_pop($contacts);

    //split out name and number into associative array

    foreach ($contacts as $key => $value) {
    	$temp = explode ("|",$value);
    	$contact['name'] = $temp[0];
    	$contact['number'] = phoneNumberFormat($temp[1]);
    	$contacts[$key] = $contact;
    }
    return $contacts;
}

$fileContents = getFileContents($filename);
print_r (parseContacts($fileContents));
