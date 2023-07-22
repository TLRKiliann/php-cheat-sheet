<?php

//access to public - protected - private property into a class.
//Le constructeur (__construct) est une méthode (fonction) qui à 
//pour rôle d'initier des opérations dès que la classe est instanciée 
//(lors de la déclaration d'un objet ($new = new class();)). 

class MyClass
{
	public $propPublic = "public prop\n";
	protected $_propProtected = "protected prop\n";
	private $_propPrivate = "private prop\n";

	public function __construct() //cannot be private or static !
	{
		echo $this->propPublic;
		echo $this->_propProtected;
		echo $this->_propPrivate;
	}
}

class MyOtherClass extends MyClass
{
	public function __construct() //cannot be private or static !
	{
		echo $this->propPublic;
		echo $this->_propProtected;
		//echo $this->_propPrivate; error
	}
}

$myObject = new MyOtherClass();
echo $myObject->propPublic;
//echo $myObject->_propPrivate; error
//echo $myObject->_propProtected; error
echo "\n";

?>