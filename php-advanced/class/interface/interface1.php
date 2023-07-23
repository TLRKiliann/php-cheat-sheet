<?php

declare(strict_types=1);

interface Animal
{
  public function makeSound(string $sound): string;
}

class Dog implements Animal
{
  public function makeSound(string $sound): string
  {
    return "Dog make : " . $sound . "\n";
  }
}

$newDog = new Dog;
echo $newDog->makeSound("Woof !!!");

?>