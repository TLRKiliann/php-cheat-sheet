<?php

require_once 'SecondClass.php';

class InitClass extends SecondClass
{
	protected static $_prop = "new value";

	public function __construct()
	{
		echo self::$_prop . "\n";
		parent::__construct();
		parent::getSecond();
		//You can use this.
		parent::getLast("Yeah\n");
	}
}

//Call SecondClass
$newCall = new InitClass;
//or you can use this method !
//$newCall->last("Yeah");

/*
Dans votre cas, puisque aSubClass::testFunction() est hérité de baseTestMain::testFunction(), utilisez $this->testFunction(). Vous ne devriez utiliser parent::testFunction() que si vous allez surcharger cette méthode dans votre sous-classe, au sein de son implémentation.
La différence est que parent: : appelle l'implémentation du parent alors que $this-> appelle l'implémentation de l'enfant si l'enfant a sa propre implémentation au lieu de l'hériter du parent.
*/
?>