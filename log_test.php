<?php 

include_once 'Log.php';


$logTest = new Log('cli');


$errorMsg = 'This is a test error message';
$infoMsg = 'This is a test info message';

$logTest->logError($errorMsg);
$logTest->logInfo($infoMsg);
