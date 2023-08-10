<?php

//:: used with with private static attributes or
//with public static method.
class Routing
{
	// protected or public or private (for this example it's equal).
	// protected & private we write with "_" => $_variable;
	private static $_variable = "One Str Val\n";

	// only public for function
	public static function routeOne()
	{
		// call public static attribute.
		echo "+ Route (1) function : " . self::$_variable;
	}
	// called method
	public static function routeTwo()
	{
		//call public static function.
		echo "+ Route (2) function : " . self::routeOne() . self::$_variable;
	}
}

//instanciation not required.
//call a public static method.
$route2 = Routing::routeTwo();
echo "\n";

?>
