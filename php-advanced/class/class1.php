<?php

class MyFileClass
{
	public $file;

	public function getFile($file)
	{
		$this->file = $file;
	}
	public function otherMethod()
	{
		return $this->file . "\n";
	}
}

$caller = new MyFileClass;
$caller->getFile("file.txt");
echo $caller->otherMethod();

//---

class MySecondClass
{
	public $file_2 = "truc";

	public function getItem()
	{
		return $this->file_2;
	}
	public function secondMethod()
	{
		return $this->getItem();
	}
}

$caller = new MySecondClass;

print_r($caller);

echo $caller->getItem();
echo "\n";

print_r($caller->getItem());
echo "\n";

echo $caller->secondMethod();
echo "\n";

print_r($caller->secondMethod());
echo "\n";

//var_dump($caller);
//echo $caller & print_f($caller) doesn't work !

?>