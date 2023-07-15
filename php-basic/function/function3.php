<?php

function somme($param1, $params2 = 10)
{
	return $param1 + $params2 . "\n";
}

echo somme(2); //12
echo somme(2, 3); //5

//---

//anonymous function
$example = function ($param1, $params2 = 10) {
    printf($param1 + $params2 . "\n");
};
$example(4); //14
?>