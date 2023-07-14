<?php

function firstFunction()
{
	function secondFunction() 
	{
		function thirdFunction()
		{
			echo "3 functions called !\n";
		}
	}
}

$call = firstFunction().secondFunction().thirdFunction();

print_r($call);

?>