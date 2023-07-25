<!DOCTYPE html>
<html>
    <head>
        <title>Cours PHP & MySQL</title>
        <meta charset="utf-8">
        <link rel="stylesheet" href="cours.css">
    </head>
    
    <body>
        <h1>Surcharge de propriété ou de méthode</h1>
        <?php
            require 'classes/user.class.php';
            require 'classes/admin.class.php';
            
            $pierre = new Admin('Pierre', 'abcdef');
            $mathilde = new Admin('Mathilde', 123456);

            //Not possible = overloaded !
            //$mathilde = new User('Mathilde', 123456);

            $pierre->getNom();
            $mathilde->getNom();
            
            $pierre->setBan('Paul');
            $pierre->setBan('Jean');
            echo $pierre->getBan();

            $mathilde->setBan("Catwoman");
            $mathilde->setBan("Aphrodite");

            echo $mathilde->getBan();

        ?>
    </body>
</html>