<?php

for ($i=0; $i <= 100; $i++) {
	if ($i % 2 == 1){
		continue;
	}
	echo $i.PHP_EOL;
}

for ($i=0; $i <= 100; $i++) {
	if ($i > 10){
		echo "all done".PHP_EOL;
		break;
	}
	echo $i.PHP_EOL;
}


