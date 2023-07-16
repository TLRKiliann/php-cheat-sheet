<?php

namespace application\Elements;
include SITE_PATH . 'includes/Db.php';

use includes\Db\Db; // Appel à la classe à utiliser

class MyClass {

	public function MyMethod()

	{
		$db = Db::connect(); // OK
		.. [...]
	}
}

?>