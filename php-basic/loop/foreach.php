<?php

$elements = ["Doug", 22, "strawberry", false];

foreach($elements as $element)
{
	echo $element . "\n";
}

//---

$items = [
	[
		"class1" => "Mathew",
		"class2" => "Elodie"
	],
	[
		"class1" => "Pit",
		"class2" => "Nora"
	]
];

foreach($items as $key)
{
	foreach($key as $item => $val)
	{
		echo $item . " " . $val ."\n";
	}
}

echo $items[1]["class1"];
echo $items[0]["class2"];

echo "\n";

?>