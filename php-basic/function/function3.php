<?php
// 2 manners to call values into functions.

function adding($value, $value2, $value3)
{
	echo $value + $value2 + $value3. "\n";
}


function caller($param1, $params2 = 5, $params3 = 10)
{
	adding($param1, $params2, $params3);
}

caller(1); //16
caller(1, 2, 3); //5

?>

<?php

function adding2($value, $value2, $value3)
{
	return $value + $value2 + $value3. "\n";
}


function caller3($param1, $params2 = 5, $params3 = 10)
{
	return adding2($param1, $params2, $params3);
}

echo caller3(1); //16
echo caller3(1, 2, 3); //5

?>