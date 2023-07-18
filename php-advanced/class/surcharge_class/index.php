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
            $mathilde = new User('Math', 123456);
            
            $pierre->getNom();
            $mathilde->getNom();
            
            echo '<br>';
            
            $pierre->setBan('Paul');
            $pierre->setBan('Jean');
            echo $pierre->getBan();
        ?>
        <p>Un paragraphe</p>
    </body>
</html>