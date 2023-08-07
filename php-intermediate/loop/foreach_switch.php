<?php

$elements = ["Myriam", "Ludwig", "Ben"];

foreach ($elements as $element) {
	switch($element) 
	{
		case "Ludwig":
		echo "Ludwig is in array\n";
		break;
		case "Myriam":
		echo "Myriam is in array\n";
		break;
		case "Ben":
		echo "Ben is in array\n";
		break;
		default:
		echo "end of switch\n";
	};
}

?>