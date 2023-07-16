<?php

class Model {
    protected $db;

    public function __construct() {
        // Initialiser la connexion à la base de données
        $this->db = new PDO('mysql:host=localhost;dbname=nom_de_la_base_de_donnees', 'nom_utilisateur', 'mot_de_passe');
        // Activer les rapports d'erreurs PDO
        $this->db->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
    }

    // Méthode générique pour exécuter une requête SQL
    protected function executeQuery($query, $params = []) {
        try {
            $statement = $this->db->prepare($query);
            $statement->execute($params);
            return $statement;
        } catch (PDOException $e) {
            // Gérer l'erreur de requête
            // ...
        }
    }
}

/*
Ce modèle de fichier Model.php est une classe de base pour tous les modèles dans votre application. Il fournit une connexion à la base de données et une méthode générique executeQuery() pour exécuter des requêtes SQL.

Lorsque vous créez un nouveau modèle spécifique, vous pouvez étendre cette classe de base Model et utiliser la méthode executeQuery() pour exécuter des requêtes spécifiques à votre modèle.

Voici un exemple de modèle spécifique (UserModel.php) qui étend la classe Model :
*/

<?php

class UserModel extends Model {
    public function getUserById($userId) {
        $query = 'SELECT * FROM users WHERE id = :id';
        $params = [':id' => $userId];
        
        $result = $this->executeQuery($query, $params)->fetch(PDO::FETCH_ASSOC);
        return $result;
    }

    public function createUser($userData) {
        $query = 'INSERT INTO users (name, email) VALUES (:name, :email)';
        $params = [
            ':name' => $userData['name'],
            ':email' => $userData['email']
        ];

        $this->executeQuery($query, $params);
        // ...
    }

    // Autres méthodes spécifiques au modèle utilisateur
    // ...
}

/*
Dans cet exemple, la classe UserModel étend la classe Model et utilise la méthode executeQuery() pour exécuter des requêtes SQL spécifiques au modèle utilisateur, telles que la récupération d'un utilisateur par son ID (getUserById()) et la création d'un nouvel utilisateur (createUser()). Vous pouvez ajouter d'autres méthodes spécifiques à votre modèle utilisateur en fonction des besoins de votre application.

N'oubliez pas d'adapter les informations de connexion à la base de données (host, dbname, nom_utilisateur, mot_de_passe) dans le constructeur de la classe Model en fonction de votre configuration.
*/
?>