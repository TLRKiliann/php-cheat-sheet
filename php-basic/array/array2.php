<?php

$array_1 = ["myitem", "myitem2", 33, false];

$array_2 = array_push($array_1, 102);

echo "\n***foreach(array_2)***\n";

foreach($array_1 as $arr)
{
	echo $arr . "\n";
}

//---

$array_3 = [
	[
		"name" => "Romain",
		"age" => 44,
		"admin" => true
	],
	[
		"name" => "Jody",
		"age" => 45,
		"admin" => true
	],
	[
		"name" => "Milani",
		"age" => 38,
		"admin" => true
	]
];

echo "\n***foreach() - array_3***\n";

foreach($array_3 as $value)
{
	foreach($value as $key => $val)
	{
		echo "Values of array_3 : " . $key . " " . $val . "\n";
	}
}

//---

$content = ["fruits", "choc", "cheese"];

$array_4 = ["myBag" => [ $content ]];

$array_5 = ["mySecondBag" => [ $content ]];

echo "\n***var_dump(array_4)***\n";

var_dump($array_4);

echo "\n***array_4['myBag'][0]***\n";

print_r($array_4["myBag"][0]);

echo "\n***var_dump(array_4)***\n";

var_dump($array_5);


?>