<?php

class MyClass
{
	public $theName;

	function __construct($theName)
	{
		$this->theName = $theName;
	}
	function __destruct()
	{
		echo $this->theName . "\n";
	}
}

$callClass = new MyClass("apple");

?>