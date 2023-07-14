<?php

class MainClass
{
	public $name;

	function __construct($name)
	{
		$this->name = $name;
	}
	function __destruct()
	{
		echo $this->name;
	}
}

//this function call the class and pass a value.
function newFunction($name)
{
	MainClass($name);
}

$newClass = new MainClass("Doug");
print_r($newClass);

?>
