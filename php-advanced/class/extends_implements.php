<?php

declare(strict_types=1);

interface AnimalShelter
{
	//doesn't  work with protected
	public function adopt(string $name);
}

class Dog implements AnimalShelter
{
	public function adopt(string $name): void
	{
		echo "<p>2. Name of the dog : " . $name . "</p>";
	}
}

class Cat implements AnimalShelter
{
	public function adopt(string $name): void
	{
		echo "<p>2. Name of the cat : " . $name . "</p>";
	}
}

class HeritageDog extends Dog
{
	public function __construct() 
	{
		echo "<span>1. step to Dog</span>";
	}
}

class HeritageCat extends Cat
{
	public function __construct() 
	{
		echo "<span>1. step to Cat</p>";
	}
}

// HeritageDog -> Dog -> AnimalShelter -> adopt()

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
			$dogClass = new HeritageDog;
			$dogClass->adopt("Rufus");

			$catClass = new HeritageCat;
			$catClass->adopt("Hash");
        ?>

    </body>
</html>