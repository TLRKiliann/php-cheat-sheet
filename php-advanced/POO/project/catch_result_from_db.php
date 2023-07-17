<?php
    //controller.php
    public function getDemandes() {
        // Exemple de requête SELECT
        $sql = "SELECT * FROM demande";
        $result = $this->db->query($sql);

        $demandes = [];
        if ($result->num_rows > 0) {
            while ($row = $result->fetch_assoc()) {
                $demande[] = $row;
            }
        }

        return $demande;
    }
?>

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
            default:
                $this->handleNotFound();
                break;
        }
    }

    public function handleIndex() {
        $demandes = $this->controller->getDemandes();
        include 'views/home/index.php';
    }

    public function handleNotFound() {
        // Page non trouvée
        include 'views/errors/404.php';
    }
}

?>