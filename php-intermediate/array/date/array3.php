<?php

$elements = [
	'1' => ['0'],
	'2' => '0',
	'3' => '0'
];

print_r($elements);

// array_push()

array_push($elements['1'], "304");
print_r($elements);

$replace = ["2" => "yes"];

// array_replace()

$newArr = array_replace($elements, $replace);
print_r($newArr);


// array_replace()

$start_dates = [
	'2022-01-30 00:00:00',
	'2022-04-15 00:00:00', 
	'2022-09-19 00:00:00'
];

for ($i=0; $i<=2; $i++)
{
	$demandes = $start_dates[$i];
	$newDate = strtotime($demandes);
	//var_dump($newDate, "newDate");
	$formatDate[] = date('F', $newDate);
	var_dump($formatDate);
}

// array_replace() with only 1 element per month (not several per month) !
$arrayMonth = [ 0 => $formatDate[0], 1 => $formatDate[1], 2 => $formatDate[2] ];
$test = array_replace($formatDate, $arrayMonth);
print_r($test);

?>