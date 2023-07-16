<?php

class Router {

    private $routes = array();

    public function addRoute($pattern, $tokens = array()) {
        $this->routes[] = array(
            "pattern" => $pattern,
            "tokens" => $tokens
        );
    }

    public function parse($url) {

        $tokens = array();

        foreach ($this->routes as $route) {
            preg_match("@^" . $route['pattern'] . "$@", $url, $matches);
            if ($matches) {


                foreach ($matches as $key=>$match) {

                    // Not interested in the complete match, just the tokens
                    if ($key == 0) {
                        continue;
                    }

                    // Save the token
                    $tokens[$route['tokens'][$key-1]] = $match;

                }

                return $tokens;

            }
        }

        return $tokens;

    }
}

?>


<?php

class Router {
    private $routes;

    public function __construct() {
        $this->routes = [];
    }

    // Ajouter une route à la liste des routes
    public function addRoute($route, $controller, $method) {
        $this->routes[$route] = [
            'controller' => $controller,
            'method' => $method
        ];
    }

    // Gérer la requête entrante et appeler le contrôleur approprié
    public function handleRequest() {
        // Récupérer l'URL de la requête
        $url = $_SERVER['REQUEST_URI'];

        // Supprimer la partie de l'URL avant le nom de fichier du script
        $url = str_replace(dirname($_SERVER['SCRIPT_NAME']), '', $url);

        // Supprimer les éventuels paramètres de requête
        $url = strtok($url, '?');

        // Parcourir les routes enregistrées
        foreach ($this->routes as $route => $data) {
            // Vérifier si l'URL correspond à la route actuelle
            if ($route === $url) {
                // Instancier le contrôleur approprié
                $controller = new $data['controller']();

                // Appeler la méthode du contrôleur
                $method = $data['method'];
                $controller->$method();

                return; // Fin de la gestion de la requête
            }
        }

        // Aucune route trouvée pour l'URL
        // Gérer l'erreur ou rediriger vers une page 404
        // ...
    }
}

/*
Ce modèle de fichier Router.php est une classe qui gère le routage des requêtes entrantes vers les contrôleurs appropriés. Les routes sont ajoutées à l'aide de la méthode addRoute(), où vous spécifiez la route, le nom du contrôleur et la méthode à appeler pour cette route. La méthode handleRequest() est responsable de l'analyse de l'URL de la requête et de l'appel du contrôleur correspondant à la route trouvée.

Veuillez noter que ceci est un exemple simplifié et qu'il peut être étendu pour prendre en charge des fonctionnalités supplémentaires telles que la gestion des paramètres de requête, la gestion des erreurs, etc.
*/

?>