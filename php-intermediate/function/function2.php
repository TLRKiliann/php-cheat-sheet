<?php

function firstFunction()
{
	function secondFunction()
	{
		echo "2 functions called !\n";
	}
}

$call = firstFunction().secondFunction();

print_r($call);

?>