<?php

//2 functions
function secondFunction($value, $value2)
{
	function thirdFunction($value, $value2) 
	{
		echo "The name is : " . $value . " & age is : " . $value2 . "\n";
	}
}

function firstFunction($name, $age)
{
	//call thirdFunction into secondFunction.
	secondFunction($name, $age).thirdFunction($name, $age);
}

//call only one function
$call = firstFunction("Doug", 23);

?>