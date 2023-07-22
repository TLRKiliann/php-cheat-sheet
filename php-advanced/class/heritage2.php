<?php

class MyClass
{
	public $state = "Jess";

	public function firstMethod($state)
	{
		$newState = "Cool !!!\n";
		if ($newState !== $this->state)
		{
			echo $this->state;
		}
	}

	public function mySecFuncCall()
	{
		echo $this->state;
	}
}

//$newClass = new MyClass;
//var_dump($newClass);

?>

<?php

class MySecClass
{
	public $state = "StateMe\n";

	public function firstMethod()
	{
		$newState = "Cool !!!";
		if ($newState !== $this->state)
		{
			//We can write echo like this, but it's not 
			//performing as concatenation !
			//like : $newState . "is Not equal to" . $this->state;
			echo "{$newState} is Not equal to {$this->state}\n";
		} else {
			echo $this->state;
		}
	}

	public function secondMethod()
	{
		echo "Value of initial state : " . $this->state;
	}
}

$newClass = new MySecClass;
$newClass->firstMethod();
$newClass->secondMethod();

?>