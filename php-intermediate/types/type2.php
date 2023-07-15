<?php
declare(strict_types=1);

function first (string $phrase): string {
	//return boolean
	return $phrase . "\n";
}

function second ($phrase): array {
	//return array
	return $phrase;
}

$value = "Harvey";
echo first($value);
$array = [1,2,3];
var_dump(second($array));
?>