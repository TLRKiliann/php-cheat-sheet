<!DOCTYPE html>
<html>
    <head>
        <title>Cours PHP & MySQL</title>
        <meta charset="utf-8">
        <link rel="stylesheet" href="cours.css">
    </head>
    
    <body>
      <h1>Surcharge de propriété ou de méthode</h1>
      <h1>et retour de valeur avec POST</h1>
        
      <div>
        <?php
          require 'classes/user.class.php';
          require 'classes/admin.class.php';

          // don't put this code under form position.
          echo $_POST['subject'];
          echo "<br><br>";
          echo $_POST['subject_2'];
          
          echo "<br><br>";

          echo $_POST['subject_3'];
          echo "<br><br>";
          echo $_POST['subject_4'];
          echo "<br><br>";
        ?>
      </div>

      <form name="form" action="" method="POST">
        
        <label id="subject">Name : </label>
        <input type="text" name="subject" id="subject" value=<?php $name = "name"; ?>>
        
        <label id="subject_2">Password : </label>
        <input type="text" name="subject_2" id="subject_2" value=<?php $passwd = "passwd"; ?>>

        <label id="subject_3">Bann a person : </label>
        <input type="text" name="subject_3" id="subject_3" value=<?php $first = "first"; ?>>
        
        <label id="subject_4">Bann second person : </label>
        <input type="text" name="subject_4" id="subject_4" value=<?php $second = "second"; ?>>

        <button type="submit" name="ok">OK</button>

      </form>

        <?php
          
          $pierre = new Admin($name, $passwd);
          //Not possible = protected property !
          //$mathilde = new User('Mathilde', 123456);
        ?>

        <h2>Display value into browser</h2> 

        <h3><?php $pierre->getNom(); ?></h3>
      
        <?php   
          $pierre->setBan($first);
          $pierre->setBan($second);
        ?>

        <h3>+<?php $pierre->getBan(); ?></h3>
    </body>
</html>