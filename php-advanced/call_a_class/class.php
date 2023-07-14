<?php

class MyClass
{
	public $name;

	function __construct($name)
	{
		$this->name = $name;
	}
	function __destruct()
	{
		echo $this->name . "\n";
	}
}

?>
