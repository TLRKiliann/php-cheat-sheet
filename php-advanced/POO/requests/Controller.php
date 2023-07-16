<?php

class Controller {
    protected $db;

    public function __construct() {
        // Établir la connexion à la base de données
        $hostname = 'localhost';
        $username = 'votre_nom_utilisateur';
        $password = 'votre_mot_de_passe';
        $database = 'votre_nom_base_de_donnees';

        $this->db = new mysqli($hostname, $username, $password, $database);

        if ($this->db->connect_error) {
            die("Échec de la connexion : " . $this->db->connect_error);
        }
    }

    public function getUsers() {
        // Exemple de requête SELECT
        $sql = "SELECT * FROM users";
        $result = $this->db->query($sql);

        $users = [];
        if ($result->num_rows > 0) {
            while ($row = $result->fetch_assoc()) {
                $users[] = $row;
            }
        }

        return $users;
    }

    public function addUser($username) {
        // Exemple de requête INSERT
        $sql = "INSERT INTO users (username) VALUES ('$username')";
        if ($this->db->query($sql) === TRUE) {
            return true;
        } else {
            return false;
        }
    }

    public function closeConnection() {
        // Fermer la connexion à la base de données
        $this->db->close();
    }
}