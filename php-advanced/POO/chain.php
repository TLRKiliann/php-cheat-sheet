<?php
/*
Chainer des méthodes nous permet d’exécuter plusieurs méthodes d’affilée 
de façon simple et plus rapide, en les écrivant à la suite les unes des 
autres, « en chaine ».

En pratique, il va suffire d’utiliser l’opérateur d’objet pour chainer 
différentes méthodes. On écrira quelque chose de la forme 
*/

// $objet->methode1()->methode2();

//Example

class Abonnement
{

    // data protected & instantiate here
    protected $user_name = "Pierre";
    protected $pass = 1234;
    protected $max = "append 1 ! ";
    protected $minus = "minus 1 !";
    protected $x = 0; //initial value
    
    public function getNom()
    {
        echo "Name : " . $this->user_name . "<br>";
        return $this;
    }

    public function getPass()
    {
        echo "Pass : " . $this->pass . "<br>";
        return $this;
    }

    public function plusUn()
    {
        $this->x++; //+1
        echo '$x value ' .$this->max. " " .$this->x. '<br>';
        return $this;
    }
    public function moinsUn()
    {
        $this->x--; //-1
        echo '$x value ' .$this->minus. " " .$this->x. '<br>';
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
            
            $pierre = new Abonnement;

            //$pierre->getNom()

            $pierre->getNom()->getPass();

            $pierre->getNom()->getPass()->plusUn()->moinsUn();
        ?>
        <p>Un paragraphe</p>
    </body>
</html>