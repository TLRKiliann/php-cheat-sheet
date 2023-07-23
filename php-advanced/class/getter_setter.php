<?php

class MyClass
{
	//we add (_) for a private property.
	private $_variable;

	// pass value requiered !!!
	public function setterFunc($_variable)
	{
		// instantiate to private
		$this->_variable = $_variable;
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