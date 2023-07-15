<?php

//:: used with with public static attributes or
//with public static method.
class Db_2
{
	public static $variable2 = "My second var"; //public

	public static function db_2()
	{
		//call public static attribute.
		echo "From db_2 function & : " . self::$variable2;
	}
}

//instanciation not required.
//call a public static method.
$db2 = Db_2::db_2();
echo "\n";

?>
