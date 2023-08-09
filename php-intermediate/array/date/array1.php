<?php

$elements = [
	[
		"class1" => 10,
		"class2" => 23
	],
	[
		"scores_1" => 101,
		"scores_2" => 200
	]
];

foreach($elements as $element)
{
	foreach($element as $key => $val)
	{
		echo "Result " . $key . " " . $val . "\n";
	} 
}

//---

print_r($elements);

?>