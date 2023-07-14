<?php

//class with __construct() & __destruct()
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

$newClass = new MainClass("Doug");
print_r($newClass);

?>
