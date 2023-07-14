<?php

$elements = [
	[
		"class1" => [1,2,3],
		"class2" => [5,6,7],
		"extra_class" => [100, 200, 300]
	],
	[
		"scores_1" => [10, 20, 30],
		"scores_2" => [44, 55, 77],
		"extra_score" => [777, 888, 444]
	]
];

foreach($elements as $element)
{
	foreach($element as $key)
	{
		foreach($key as $val => $item)
		{
			echo "Result " . $item . "\n";
		}
	} 
}

//---

print_r($elements);

//---

//push an element into array
array_push($elements[0]['class1'], 304);
print_r($elements);

?>