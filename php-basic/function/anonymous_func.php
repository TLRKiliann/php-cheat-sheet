<?php

//anonymous function
$example = function ($param1, $params2 = 10) {
    printf($param1 + $params2 . "\n");
};
$example(4, 20); //24

//normal function
function add($value1, $value2 = 10)
{
    $value3 = $value1 + $value2;
    return $value3;
}
$sum = add(4, 20);

echo $sum . "\n"; //24

?>