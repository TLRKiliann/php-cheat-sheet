<!DOCTYPE html>
<html>
  <head>
      <title>Exemple de requêtes MySQL</title>
  </head>
  <body>
      <?php
      // Établir une connexion à la base de données MySQL
      $hostname = 'localhost';
      $username = 'votre_nom_utilisateur';
      $password = 'votre_mot_de_passe';
      $database = 'all_demandes';

      $conn = new mysqli($hostname, $username, $password, $database);

      if ($conn->connect_error) {
          die("Échec de la connexion : " . $conn->connect_error);
      }

      // Exemple de requête SELECT
      $sql = "SELECT * FROM demandes";
      $result = $conn->query($sql);

      if ($result->num_rows > 0) {
          echo "<h2>Liste des utilisateurs :</h2>";
          echo "<ul>";
          while ($row = $result->fetch_assoc()) {
              echo "<li>" . $row['username'] . "</li>";
          }
          echo "</ul>";
      } else {
          echo "Aucun utilisateur trouvé.";
      }
      // Fermer la connexion à la base de données
      $conn->close();
      ?>

  </body>
</html>


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