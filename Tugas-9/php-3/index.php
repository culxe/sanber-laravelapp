<?php 
require_once("Animal.php");
require_once("Ape.php");
require_once("Frog.php");

$sheep = new Animal("Shaun");

echo "Name: " . $sheep->name . "<br>"; // "shaun"
echo "Legs: ".  $sheep->legs . "<br>"; // 4
echo "Cold blooded: ".  $sheep->cold_blooded . "<br> <br>"; // "no"


$sungokong = new Ape("kera sakti");
echo "Name: " . $sungokong->name . "<br>"; 
echo "Legs: " . $sungokong->legs . "<br>"; // 2
echo "Cold blooded: " . $sheep->cold_blooded . "<br>";
echo "Yell: " . $sungokong->yell() . "<br> <br>"; // "Auooo"

$kodok = new Frog("buduk");
echo "Name: " . $sheep->name . "<br>";
echo "Legs: " . $sheep->legs . "<br>";
echo "Cold blooded: " . $sheep->cold_blooded . "<br>";
echo "Jump: " . $kodok->jump() . "<br> <br>"; // "hop hop"
?>