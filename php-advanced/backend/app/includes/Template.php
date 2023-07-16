1 <?php

class Template {

	public static function page( $urlInfos )
	{
		// Déclenche l'assemblage avec le rendu de la page principale.
		self::_render( 'page', $urlInfos );
	}
	.. [...]

	..
	}

	private static function _includeInTemplate($page, $action='', $router='')
	{
		// Opère les inclusions des modules et transmet pour le rendu

		if ( file_exists(SITE_PATH.'/application/'.$page.'/Controller.php') )
		{
			include_once SITE_PATH.'/application/'.$page.'/Controller.php';

			$controllerPath = '\application\\'.$page.'\Controller'; //nspace

			$controller = new $controllerPath( $page, $action, $router );

			self::_render( $controller->view(), $controller->datas() );

		}
		else
		{
		self::_render( 'home' );
		}
	..
	}
	private static function _render($filepath, $datas='')
	{
		// Effectue les rendus pour l'affichage
	..
	}

?>


<?php

class Template {
    protected $data = [];

    public function __construct() {
        // Initialiser le tableau de données
        $this->data = [];
    }

    // Définir une variable pour le template
    public function set($key, $value) {
        $this->data[$key] = $value;
    }

    // Afficher le template
    public function render($templateName) {
        $templatePath = 'chemin/vers/les/templates/' . $templateName . '.php';

        if (file_exists($templatePath)) {
            extract($this->data); // Extraire les variables pour le template
            include($templatePath);
        } else {
            // Gérer l'erreur de template introuvable
            // ...
        }
    }
}

/*
Ce modèle de fichier Template.php est une classe de base pour la gestion des 
templates dans votre application. Il permet de définir des variables pour le 
template à l'aide de la méthode set() et d'afficher le template à l'aide de 
la méthode render().

Lorsque vous utilisez ce fichier Template.php, vous pouvez créer des 
templates spécifiques en utilisant des fichiers .php dans le répertoire 
spécifié par chemin/vers/les/templates/.

Voici un exemple d'utilisation du fichier Template.php dans un contrôleur 
(ExampleController.php) :
*/

<?php

class ExampleController {
    public function index() {
        // Créer une instance du template
        $template = new Template();

        // Définir des variables pour le template
        $template->set('title', 'Page d\'accueil');
        $template->set('content', 'Contenu de la page d\'accueil');

        // Afficher le template
        $template->render('index');

        // ...
    }
}

/*
Dans cet exemple, la méthode index() du contrôleur ExampleController crée 
une instance de la classe Template, définit des variables (title et content) 
pour le template, puis affiche le template en utilisant la méthode render('index'). 
Vous pouvez passer le nom du fichier de template (index) sans l'extension .php.

Dans votre template (index.php), vous pouvez accéder aux variables définies 
précédemment à l'aide de leur nom :
*/

<!DOCTYPE html>
<html>
<head>
    <title><?php echo $title; ?></title>
</head>
<body>
    <h1><?php echo $title; ?></h1>
    <p><?php echo $content; ?></p>
</body>
</html>

/*
Dans cet exemple, les variables $title et $content sont utilisées pour afficher 
le titre et le contenu de la page dans le template.

Assurez-vous d'adapter le chemin vers le répertoire des templates 
(chemin/vers/les/templates/) en fonction de votre structure de répertoire.
*/
