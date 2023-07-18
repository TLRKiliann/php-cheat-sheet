<!DOCTYPE html>
<html>
    <head>
        <title>Cours PHP & MySQL</title>
        <meta charset="utf-8">
        <link rel="stylesheet" href="cours.css">
    </head>
    
    <body>
        <h1>Etendue de class</h1>
        <?php
            require 'classes/user.class.php';
            require 'classes/admin.class.php';
            
            $pierre = new Admin('Pierre', 'abcdef');
            $mathilde = new User('Math', 123456);
            
            echo $pierre->getNom(). '<br>';
            echo $pierre->getPass(). '<br>';
            echo $mathilde->getNom(). '<br>';
            echo $mathilde->getPass(). '<br>';

            $pierre->setBan('Paul');
            $pierre->setBan('Jean');
            echo $pierre->getBan();
            //Utilisateurs bannis par Pierre: Paul, Jean,
        ?>
        <p>Un paragraphe</p>
    </body>
</html>