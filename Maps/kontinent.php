<?php
/**
 * Created by PhpStorm.
 * User: Alain
 * Date: 10.11.2015
 * Time: 15:34
 */
/** @var bla  $_GET */
$kontinent = $_GET["kontinent"];

$url = "ressources/img/".$kontinent.".gif";

echo "<p>".$kontinent."</p>";
echo "<img src='".$url."' alt='".$kontinent."'>";
