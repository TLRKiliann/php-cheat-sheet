<?php

class FirstClass
{
	public $number = 1;

	public function firstFunc()
	{
		$this->number ++;
		echo "+ My number is : " . $this->number;
		return $this;
	}

	public function secondFunc()
	{
		$this->number--;
		echo "- My number is : " . $this->number;
		return $this;
	}

	public function thirdFunc()
	{
		$this->number += 2;
		echo "+ My number is : " . $this->number;
		return $this;
	}
}

$caller = new FirstClass;
$caller->firstFunc()->secondFunc()->thirdFunc();

?>