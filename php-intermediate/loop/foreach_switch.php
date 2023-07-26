<?php

$elements = ["Myriam", "Ludwig", "Ben"];

foreach ($elements as $element) {
	switch($element) 
	{
		case $element === "Ludwig":
		echo "Ludwig is in array\n";
		break;
		case $element === "Myriam":
		echo "Myriam is in array\n";
		break;
		case $element === "Ben":
		echo "Ben is in array\n";
		break;
		default:
		echo "end of switch\n";
	};
}

?>