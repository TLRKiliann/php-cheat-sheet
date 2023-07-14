<?php

class MyClass
{
	public $theName;

	function set_name($theName)
	{
		$this->theName = $theName;
	}
	function get_name()
	{
		return $this->theName;
	}
}

$callClass = new MyClass();
$callClass->set_name("John");
echo $callClass->get_name();
echo "\n";

?>