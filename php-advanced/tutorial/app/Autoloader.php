<?php

namespace Tutoriel;

class Autoloader
{

	static function register()
	{
		// 'Autoloader' replaced by __CLASS__
		spl_autoload_register(array(__CLASS__, 'autoload'));
	}

	static function autoload($class)
	{
		// modif suite à namespace + unix system path
		if (strpos($class, __NAMESPACE__ . '\\') === 0) {

			/*__NAMESPACE__ = 'Tutoriel\\',*/
			$class = str_replace(__NAMESPACE__ . '\\', '', $class);
			$class = str_replace('\\', '/', $class);
			/*__NAMESPACE__ = 'modules/'*/
			require __DIR__ . '/' . $class . '.php';
		}
	}
}

?>