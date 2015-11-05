<?php
for ($i = 1; $i <= 100; $i++){
	if($i % 2 !== 0){
		continue;
	}
	echo $i . PHP_EOL; 
}

echo "=======================" . PHP_EOL;
$i = array(1,2,3,4,5,6,7,8,9,10);
//loop 1
foreach ($i as $key => $value) {
	echo "{$value}\n";
	//loop 2
	for ($i = 1; $i <= 100; $i++){
		if ($i == 10){
			echo "{$1}\n" . PHP_EOL;
			break 2;
	}
}

echo "=======================" . PHP_EOL;
