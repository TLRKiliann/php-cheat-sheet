<?php

class Animal
{
	public $name;

	public function callName($n_2)
	{
		$this->name = $n_2;

		return $n_2;
	}
}

class Cat extends Animal
{
	public $name;

	public function __construct($n)
	{
		$this->name = $n;
	}
}

$caller = new Cat("Catzi");
print_r($caller);

echo $caller->callName("Woolfy");

echo "\n";

//---

class callerGetSet
{
	private $_name;

	public function setter($_name)
	{
		$this->_name = $_name;
	}

	public function getter()
	{
		return $this->_name;
	}
}

$newCaller = new callerGetSet;

$newCaller->setter("Nabil");
echo $newCaller->getter();

echo "\n";

?>