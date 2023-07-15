<?php

//count() or sizeof() (alias of count) results are the sames.
$elements = [1,2,3,4,5];

for ($i = 1; $i <= count($elements); $i++)
{
	echo $i . "\n";
}

echo "\n";

for ($i = 1; $i <= sizeof($elements); $i++)
{
	echo $i . "\n";
}

?>