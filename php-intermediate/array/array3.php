<?php

$elements = [
	'1' => ['0'],
	'2' => '0',
	'3' => '0'
];

print_r($elements);

// array_push an element into array
array_push($elements['1'], "304");
print_r($elements);

$replace = ["2" => "yes"];

// array_replace()

$newArr = array_replace($elements, $replace);
print_r($newArr);

?>