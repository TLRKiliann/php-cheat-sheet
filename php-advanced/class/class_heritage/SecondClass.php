<?php

//$last was declared in InitClass;

class SecondClass
{
	public $value = "My value";
	public static $phrase = "Last function of SecondClass\n";

	public function __construct()
	{
		echo $this->value . "\n";
	}
	public function getSecond()
	{
		echo self::$phrase;
	}
	public function getLast($last)
	{
		echo $last; 
	}
}

?>