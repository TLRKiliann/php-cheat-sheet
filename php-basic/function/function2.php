<?php
// 2 manners to call value into function


function myFunction($value)
{
	echo "My function has been called with the value of " . $value . "\n";
}
// don't need echo or print_r() in this case.
myFunction(23);

?>

<?php

function mySecFunction($value)
{
	return "My function has been called with the value of " . $value . "\n";
}

// echo need a return
echo mySecFunction(77);

?>