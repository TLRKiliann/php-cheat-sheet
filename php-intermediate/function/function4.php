<?php

function secondFunction($value)
{
	function thirdFunction($value) 
	{
		echo "The name is : " . $value . "\n";
	}
}

function firstFunction($name)
{
	secondFunction($name).thirdFunction($name);
}

$call = firstFunction("Doug");

print_r($call);

?>