<?php

use Tutoriel\Autoloader;
use Tutoriel\BootstrapForm;
use Tutoriel\Database;
//use Tutoriel\Table\Article;
//use Tutoriel\Table\Categorie;
//use Tutoriel\Form;


require '../app/Autoloader.php';
Autoloader::register();

$form = new BootstrapForm($_GET);
//$db = new Database("mytable");

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
elseif ($p === 'form')
{
	require '../pages/form.php';
}
elseif ($p === 'contact')
{
	require '../pages/contact.php';
}
elseif ($p === '404')
{
	require '../pages/404.php';
}
$content = ob_get_clean();
require '../pages/templates/default.php';

?>