<?php

require_once "Model.php";

// if(!empty($_POST)) {
// 	$data= new Model();
// 	foreach($_POST as $key => $$value) {
// 		$data->$key = $value;

// 		echo $data->$key . PHP_EOL;
// 	}
// }

$data = new Model();
$data->name = 'Harvey Dent';
$data->class = 'villain';
$data->age = 42;

var_dump($data);
echo $data->name . PHP_EOL;
echo $data->class . PHP_EOL;
echo $data->age . PHP_EOL;