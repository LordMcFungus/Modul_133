<?php

session_start();
/**
 * Created by PhpStorm.
 * User: Alain
 * Date: 10.11.2015
 * Time: 13:30
 */
$Username = $_POST["username"];
$FavColour = $_POST["favcolour"];
$FavAnimal = $_POST["favanimal"];
$_SESSION["user"] = $Username;
$_SESSION["colour"] = $FavColour;
$_SESSION["animal"] = $FavAnimal;


echo "<p>".$Username." der/die/das ".$FavColour."e ".$FavAnimal."</p>";

echo "<a href=\"check.php\"> AHAHAHAHAHAH</a>";