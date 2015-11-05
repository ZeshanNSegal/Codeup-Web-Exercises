<?php
for ($i = 1; $i <= 100; $i++){
	if($i % 2 !== 0){
		continue;
	}
	echo $i . PHP_EOL; 
}

echo "=======================" . PHP_EOL;
$numbers = array(1,2,3,4,5,6,7,8,9,10);
//loop 1
foreach ($numbers as $key => $value) {
	echo $value . PHP_EOL;
	//loop 2
	for ($i = 1; $i <= 100; $i++){
		if ($i <= 10){
			echo "{$i}\n";
		}	
		if ($i == 10) {
			break 2;
		}
	}
}

echo "=======================" . PHP_EOL;

for ($i = 1; $i <= 100; $i++){
	if ($i > 10){
		break;
	}
	echo $i . PHP_EOL;
}