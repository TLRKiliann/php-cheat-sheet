<?php

//This code was made to understand power of constructor !!!

/*
Passing value not required.
*/

class MainClass
{
	public $state = "Ok ?";
	protected $test = "test";
	private $newPrivate = "private";

	public function newFunc()
	{
		//echo help us to display value
		echo $this->test . "\n";
	}

	public function __construct()
	{
		$this->state;
	}
}


class SecondClass extends MainClass
{
	public function __construct()
	{
		//$this->state;
		//$this->newPrivate;
		//$this->newFunc();
	}
}

class Son extends SecondClass
{
	function __construct()
	{
		//...
	}
}

//$newCall = new SecondClass;
//var_dump($newCall);

$last = new Son;
$last->newFunc();
//var_dump($last);

/*
(power of constructor)

object(Son)#1 (3) {
  ["state"]=>
  string(4) "Ok ?"
  ["test":protected]=>
  string(4) "test"
  ["newPrivate":"MainClass":private]=>
  string(7) "private"
}
*/

?>