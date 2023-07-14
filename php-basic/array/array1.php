<?php

$array = [1,2,3,4,5];

print_r($array);

var_dump($array);

//---

$array_2 = [
	[
		"name" => "Rebecca",
		"lastname" => "Tinitax",
		"scores" => [10, 8, 5]
	],
	[
		"name" => "Al",
		"lastname" => "Park",
		"scores" => [9, 7, 10]
	]
];

$displayer = $array_2[1]["scores"][2];

$displayer_2 = $array_2[1]["scores"];

print_r($displayer);
print_r("\n");

print_r($displayer_2);
print_r("\n");


var_dump($array_2);
print_r("\n");

?>