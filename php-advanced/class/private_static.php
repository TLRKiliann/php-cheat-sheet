<?php

//:: used with with private static attributes or
//with private static method.
class Db
{
	private static $_variable = "My var"; //private

	public static function db()
	{
		//call private static attribute.
		echo "From db function & : " . self::$_variable;
	}
}

//Instanciation not required with (::).
//call the private static method db.
$db = Db::db();
echo "\n";

?>