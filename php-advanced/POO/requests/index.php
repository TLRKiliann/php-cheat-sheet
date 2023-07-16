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
      $database = 'votre_nom_base_de_donnees';

      $conn = new mysqli($hostname, $username, $password, $database);

      if ($conn->connect_error) {
          die("Échec de la connexion : " . $conn->connect_error);
      }

      // Exemple de requête SELECT
      $sql = "SELECT * FROM users";
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

      // Exemple de requête INSERT
      $newUser = "JohnDoe";
      $sql = "INSERT INTO users (username) VALUES ('$newUser')";
      if ($conn->query($sql) === TRUE) {
          echo "<p>Nouvel utilisateur ajouté avec succès.</p>";
      } else {
          echo "Erreur lors de l'ajout de l'utilisateur : " . $conn->error;
      }

      // Fermer la connexion à la base de données
      $conn->close();
      ?>

  </body>
</html>