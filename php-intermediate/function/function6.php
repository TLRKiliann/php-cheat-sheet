<?php

// Same result for 2 functions with print_r() and return array. 

function myFunc()
{
	$elements = [
		"class1"=>"navidia", 
		"class2"=>"msi"];

	foreach($elements as $key => $element)
	{
		echo $element . " at " . $key . "\n";
	}
	print_r($elements); // print_r() !
}

$caller = myFunc();
/*
navidia at class1
msi at class2
Array
(
    [class1] => navidia
    [class2] => msi
)
*/
?>

<?php

function mySecondFunc()
{
	$elementsArr = [
		"class1"=>"navidia", 
		"class2"=>"msi"];

	foreach($elementsArr as $key => $elementA)
	{
		echo $elementA . " at " . $key . "\n";
	}
	return $elementsArr; // return !
}

$caller = mySecondFunc();

print_r($caller); // print_r() to read array.
/*
navidia at class1
msi at class2
Array
(
    [class1] => navidia
    [class2] => msi
)
*/
?>