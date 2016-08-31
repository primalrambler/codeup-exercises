<?php

$things = array('Sgt. Pepper', "11", null, array(1,2,3), 3.14, "12 + 7", false, (string) 11);

foreach($things as $thing){
	if (is_integer($thing)){
		echo "$integer type\n";
	} elseif (is_float($thing)) {
		echo "float type\n";
	} elseif (is_bool($thing)){
	 echo "boolean type\n";
	} elseif (is_array($thing)) {
		echo "array type\n";
	} elseif (is_null($thing)) {
		echo "null type\n";
	} elseif (is_string($thing)) {
	  echo "string type\n";
	}
}