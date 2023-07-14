<?php

function myFunction($value)
{
	echo "My function has been called with the value of " . $value . "\n";
}

$call = myFunction(23);

print_r($call);

?>