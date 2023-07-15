<?php
/*
__construct()
The constructor is a method (function) whose role 
is to initiate operations as soon as the class is 
instantiated (when declaring an object ($new = new class();)).

_destruct()
A destructor is called when the object is destructed 
or the script is stopped or exited.
If you create a __destruct() function, PHP will 
automatically call this function at the end of the 
script.
*/
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