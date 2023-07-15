<?php

$myVar = 5;
echo "+ Initial myVar = " . $myVar . "\n";

function myFunction()
{
	$myVar = 8;
	//return local var = 8
	echo "local myVar (into function) : " . $myVar . "\n";
}

echo myFunction();
echo "* My first myVar after function called = " . $myVar; //5
echo "\n\n";

//---

$mySecVar = 10;
echo "+ Initial mySecVar = " . $mySecVar . "\n";

function secFunction()
{
	//global
	global $mySecVar;
	$mySecVar = 12;
	echo "global mySecVar (into function) : " . $mySecVar . "\n";
}

echo secFunction();
echo "* My second mySecVar after function called = " . $mySecVar; //12
echo "\n";

?>