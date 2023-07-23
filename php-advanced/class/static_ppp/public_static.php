<?php

class MyFileClass
{
	public static $file;

	public static function getFile($file)
	{
		self::$file;
	}
	public static function otherMethod()
	{
		return self::$file . "\n";
	}
}

$caller = new MyFileClass;
$caller->getFile("file.txt");
echo $caller->otherMethod();

//---

class MySecondClass
{
	public static $file_2 = "truc";

	public static function getItem()
	{
		return self::$file_2;
	}
	public static function secondMethod()
	{
		return self::getItem();
	}
}

$caller = new MySecondClass;

//print_r($caller);

echo $caller->getItem();
echo "\n";

print_r($caller->getItem());
echo "\n";

echo $caller->secondMethod();
echo "\n";

print_r($caller->secondMethod());
echo "\n";

// to access to a static method, instanciation is not required.
MySecondClass::getItem();

?>