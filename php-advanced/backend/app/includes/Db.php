<?php

namespace includes \Db;

class Db
{
	// Attribut statique de la classe
	public static $port = 3360;

	// Méthode statique de la classe
	public static function db() 
	{
		return new mysqli( 'localhost', 'root', '', 'atelierphp', self::$port );
	}

}

$db = Db::db();
$results = $db->query( 'SELECT * FROM articles' );

?>
