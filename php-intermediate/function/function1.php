<?php

function secondFunction()
{
	echo "My second function was called\n";
}

function firstFunction()
{
	secondFunction();
}

$call = firstFunction();

?>