<?php

declare(strict_types=1);


// to implements to others class.
interface AnimalShelter
{

    public function adopt(string $name);
}


class CatShelter implements AnimalShelter
{
    // instead of returning class type Animal, it can return class type Cat
    public function adopt(string $name): Cat
    {
        return new Cat($name);
    }
}


class DogShelter implements AnimalShelter
{
    // instead of returning class type Animal, it can return class type Dog
    public function adopt(string $name): Dog
    {
        return new Dog($name);
    }
}

$kitty = (new CatShelter)->adopt("Ricky");
$kitty->adopt("Ricky");
$kitty->speak();

echo "\n";

$doggy = (new DogShelter)->adopt("Mavrick");
$doggy->speak();

?>