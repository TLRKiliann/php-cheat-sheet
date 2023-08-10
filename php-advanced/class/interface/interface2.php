<?php

declare(strict_types=1);

interface Animal
{
  public function makeSound(string $sound);
}

class Dog implements Animal
{
  public function makeSound(string $sound)
  {
    return "Dog make : " . $sound . "\n";
  }
}

class Cat implements Animal
{
  public function makeSound(string $sound)
  {
    return "Cat make : " . $sound . "\n";
  }
}

$newCat = new Cat;
$newDog = new Dog;
echo $newCat->makeSound("Meow !");
echo $newDog->makeSound("Woof !!!");

?>