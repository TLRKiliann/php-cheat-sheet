<?php

class Router {
    protected $controller;

    public function __construct() {
        $this->controller = new Controller();
    }

    public function routeRequest() {
    	$action = isset($_GET['action']) ? $_GET['action'] : 'index';

        switch ($action) {
            case 'index':
                $this->handleIndex();
                break;
            case 'addUser':
                $this->handleAddUser();
                break;
            default:
                $this->handleNotFound();
                break;
        }
    }

    public function handleIndex() {
        $users = $this->controller->getUsers();
        include 'views/home/index.php';
    }

    public function handleAddUser() {
        if ($_SERVER['REQUEST_METHOD'] === 'POST') {
            $username = $_POST['username'];

            if (!empty($username)) {
                $success = $this->controller->addUser($username);
                if ($success) {
                    // Rediriger vers la page d'accueil après l'ajout de l'utilisateur
                    header('Location: index.php?action=index');
                    exit;
                }
            }
        }

        include 'views/home/addUser.php';
    }

    public function handleNotFound() {
        // Page non trouvée
        include 'views/errors/404.php';
    }
}

?>