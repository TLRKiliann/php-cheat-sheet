<?php

// cf. étendue_heritage

// With static property & method (self:: & parent::).

// SonClass -> ParentClass -> GrandParentClass

class GrandParentClass
{

	private static $_gpVal = "*GP Value*";

	public static function catchItemGParent()
	{
		echo "+ From getItem => " . self::$_gpVal . " catched !!!\n";
	}
}


class ParentClass extends GrandParentClass
{

	public static function getItemParent()
	{
		parent::catchItemGParent();
	}

	public static function anotherMethod()
	{
		self::getItemParent();
	}
}


class SonClass extends ParentClass
{

	// Cannot be static !	
	public function callerFromSon()
	{
		parent::getItemParent();
		parent::anotherMethod();
	}
	// Cannot be static !		
	public function __destruct()
	{
		echo "+ Finish to destruct.\n";
		return;
	}
}

$newCall = new SonClass;
$newCall->callerFromSon();

?>
