<?php

//session_start();

use Tutoriel\Autoloader;
use Core\Autoloader_2;
use Core\HTML\BootstrapForm;

require '../app/Autoloader.php';
Autoloader::register();

require '../core/Autoloader.php';
Autoloader_2::register();

/*
// instance will change at each call
$config = new Tutoriel\Configuration();

// with singleton = always same instance :
var_dump(Tutoriel\Configuration::getInstance());
var_dump(Tutoriel\Configuration::getInstance());
var_dump(Tutoriel\Configuration::getInstance());

var_dump($config);
var_dump($config);
var_dump($config);
*/

$form = new BootstrapForm($_POST);

// code below no more required, 
// it's in the Tutoriel class.
// use Tutoriel\Database; 
// $db = new Database("mytable");

if ( isset($_GET['p']) )
{
	$p = $_GET['p'];
}
else 
{
	$p = 'home';
}

ob_start();
if ($p === 'home')
{
	require '../pages/home.php';
}
elseif ($p === 'article')
{
	require '../pages/article.php';
}
elseif ($p === 'categorie')
{
	require '../pages/categorie.php';
}
elseif ($p === 'contact')
{
	require '../pages/contact.php';
}
elseif ($p === 'login')
{
	require '../pages/users/login.php';
}
elseif ($p === '404')
{
	require '../pages/404.php';
}
$content = ob_get_clean();
require '../pages/templates/default.php';

?>