<?php

define('ROOT', dirname(__DIR__));
require ROOT . '/app/Tutoriel.php';
Tutoriel::load();
$app = Tutoriel::getInstance();

/*
use Tutoriel\Autoloader;
use Core\Autoloader_2;
use Core\HTML\BootstrapForm;

require '../app/Autoloader.php';
Autoloader::register();

require '../core/Autoloader.php';
Autoloader_2::register();
*/

if ( isset($_GET['p']) )
{
	$p = $_GET['p'];
}
else 
{
	$p = 'home';
}

//Auth
$auth = new DbAuth($app->getDatabase());
if (!$auth->logged())
{
    $app->forbidden();
}

ob_start();
if ($p === 'home')
{
	require '../pages/admin/posts/index.php';
}
elseif ($p === 'article')
{
	require '../pages/admin/posts/article.php';
}
elseif ($p === 'categorie')
{
	require '../pages/admin/posts/categorie.php';
}
elseif ($p === '404')
{
	require '../pages/admin/posts/404.php';
}
$content = ob_get_clean();
require '../pages/templates/default.php';

?>