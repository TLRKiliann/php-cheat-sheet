<?php

declare(strict_types=1);

// Interface definition
interface Animal {
  public function makeSound();
}

// Class definitions
class Cat implements Animal {
  public function makeSound() {
    $speak = "meow\n";
    echo $speak;
  }
}

class Dog implements Animal {
  public function makeSound() {
    $speak = "woof\n";
    echo $speak;
  }
}

class Mouse implements Animal {
  public function makeSound() {
    $speak = "hiii\n";
    echo $speak;
  }
}

?>

<!DOCTYPE html>
<html>
    <head>
        <title>Tutorial PHP & MySQL</title>
        <meta charset="utf-8">
        <!--link rel="stylesheet" href="cours.css"-->
    </head>
    
    <body>
        <h1>Titre principal</h1>

        <?php
          // Create a list of animals
          $cat = new Cat();
          $dog = new Dog();
          $mouse = new Mouse();;
          // List created
          $animals = array($cat, $dog, $mouse);

          // Tell the animals to make a sound
          foreach($animals as $animal) {
            $animal->makeSound();
          }
        ?>

    </body>
</html>