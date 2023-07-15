<?php

//class with 2 functions
class MyClass
{
	public $theName;

	function set_name($theName)
	{
		$this->theName = $theName;
	}
	function get_name()
	{
		echo $this->theName;
	}
}

//Instanciation into an object
$callClass = new MyClass();
$callClass->set_name("Henry");
$callClass->get_name(); //Henry
echo "\n";

?>