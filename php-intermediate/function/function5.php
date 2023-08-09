<?php

function arr($name)
{
	if (isset($name))
	{
		echo $name;
	}
	else 
	{
		echo "no name";
	}
}

arr(null);
// no name

?>