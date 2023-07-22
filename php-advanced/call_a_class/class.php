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
		return $this->name;
	}
}
?>

<?php

class MySecClass
{
	public $secName;

	//construit la propriété avec laquelle la class a été appelée !
	public function __construct($secName)
	{
		//propriété "undefined" instancier par la __construct() à 
		//l'appel object MySecClass.
		return $this->secName = $secName;
	}

	public function __destruct()
	{
		//détruit la valeur de "public $secName;" instancier 
		//par le __construct() suite à l'appel d'object par 
		//l'instanciation de la class "new".
		$this->secName;
	}
}

?>