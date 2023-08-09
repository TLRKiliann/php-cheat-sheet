<?php

$array = [
    "Elo", "Trinity",
    "Namu", "Ralph"
];

$displayArr = ($array)[count($array) - 1];

print_r($displayArr);
echo "\n";
// Ralph

print_r(array_keys($array));

$removeLastElement = array_pop($array);
print_r($removeLastElement);
echo "\n";
// Ralph

print_r($array);
/*
Array
(
    [0] => Elo
    [1] => Trinity
    [2] => Namu
)
*/

$slice = array_splice($array, 0, 2);
print_r($slice);
/*
Array
(
    [0] => Elo
    [1] => Trinity
)
*/

print_r($array);
/*
Array
(
    [0] => Namu
)
*/
?>
