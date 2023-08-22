<?php

$bigArray =  [];

$small1 = ["Planifiée" => 9];
$small2 = ["A traiter" => 3];

// To feed bigArray with 2 associatives arrays

array_push($bigArray, $small1, $small2);

echo "\n bigArray after push 2 associatives arrays in it.\n";
var_dump($bigArray);

// return complete array with types.

echo "\n bigArray[0]['Planifiée'] \n";
print_r($bigArray[0]['Planifiée']);

// 9

echo "\n bigArray[1]['A traiter'] \n";
print_r($bigArray[1]['A traiter']);

// 3

echo "\n bigArray[0] \n";
print_r($bigArray[0]);

// returns associatives array[0]

echo "\n";

// Very helpful to display value of sub-array.

foreach($bigArray[0] as $key => $value)
{
    echo "after foreach(bigArray) returns value : " . $value . "\n";
};

// 9

echo "\n";

?>
