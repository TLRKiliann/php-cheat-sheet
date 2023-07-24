<?php

class LastClass
{
	public static $second;

	public static function lastFunc($second)
	{
		// if not static $this->second = $second;
		echo 'That\'s my last function ' . self::$second . "\n";
	}

	public static function lastFuncPrime()
	{
		echo "Hello lastFuncPrime\n";
	}
}

class SecondClass extends LastClass
{
	public static $name;

	public static function secondFunc()
	{
		echo "My second function\n";
		// call parent class
		LastClass::lastFuncPrime();
	}
	// to display value !
	public static function secondPrime($name)
	{
		// if not static $this->name = $name;
		echo 'Merci : ' . self::$name . "\n";
	}
}

class FirstClass extends SecondClass
{
	public function __construct()
	{
		echo "My firstFunc \n";
		$this->secondFunc();
	}
}

$myCaller = new FirstClass;
// only for functions into class
// $myCaller->secondFunc()->lastFuncPrime();
$myCaller->lastFunc("Esteban");
echo "\n";
$myCaller->secondFunc();
echo "\n";
$myCaller->secondPrime("Jimy");
echo "\nWith __construct()\n";
$myCaller->__construct();

?>