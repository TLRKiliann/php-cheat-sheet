<?php

// switch with an array.
$value = ["Al", "Nipy", "Johnas"];

switch($value)
{
	case $value[2] === "Johnas": 
	echo $value[2] . " is into array\n";
	//break;
	case $value[1] === "Nipy":
	echo $value[1] . " is into array\n";
	break;
	
	case $value[1] === "Jill":
	echo $value[1] . " is into array\n";
	break;
	
	default:
	echo "Loop finished !";
}

?>