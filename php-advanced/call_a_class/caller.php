<?php

require "class.php";

$newClass = new MyClass("Nathan");
//[] sinon, on ne les a pas tous.
$secClass = new MySecClass(["Jess", 44, "Admin"]);

var_dump($newClass);
var_dump($secClass);

?>