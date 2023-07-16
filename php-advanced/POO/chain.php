<?php
/*
Chainer des méthodes nous permet d’exécuter plusieurs méthodes d’affilée 
de façon simple et plus rapide, en les écrivant à la suite les unes des 
autres, « en chaine ».

En pratique, il va suffire d’utiliser l’opérateur d’objet pour chainer 
différentes méthodes. On écrira quelque chose de la forme 
*/

$objet->methode1()->methode2();

//Example

<?php
    abstract class Utilisateur{
        protected $user_name;
        protected $user_region;
        protected $prix_abo;
        protected $user_pass;
        protected $x = 0; //initial value
        public const ABONNEMENT = 15;
        
        public function __destruct(){
            //Du code à exécuter
        }
        
        abstract public function setPrixAbo();
        
        public function getNom(){
            echo $this->user_name;
        }
        public function getPrixAbo(){
            echo $this->prix_abo;
        }
        
        public function plusUn(){
            $this->x++; //+1
            echo '$x vaut ' .$this->x. '<br>';
            return $this;
        }
        public function moinsUn(){
            $this->x--; //-1
            echo '$x vaut ' .$this->x. '<br>';
            return $this;
        }
    }
?>

<!DOCTYPE html>
<html>
    <head>
        <title>Cours PHP & MySQL</title>
        <meta charset="utf-8">
        <link rel="stylesheet" href="cours.css">
    </head>
    
    <body>
        <h1>Titre principal</h1>
        <?php
            require 'classes/utilisateur.class.php';
            require 'classes/admin.class.php';
            require 'classes/abonne.class.php';
            
            $pierre = new Admin('Pierre', 'abcdef', 'Sud');
            $mathilde = new Admin('Math', 123456, 'Nord');
            $florian = new Abonne('Flo', 'flotri', 'Est');
            
            $pierre->plusUn()->plusUn()->plusUn()->moinsUn();
        ?>
        <p>Un paragraphe</p>
    </body>
</html>