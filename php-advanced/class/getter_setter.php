<?php

class MyClass
{
	//we add (_) for a private property.
	private $_variable;

	public function setterFunc($valueToSet)
	{
		$this->_variable = $valueToSet;
	}
	public function getterFunc()
	{
		return $this->_variable;
	}
}

$callerClass = new MyClass;
$callerClass->setterFunc("John Doe");
echo $callerClass->getterFunc();
echo "\n";

?>