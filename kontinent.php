<?php
/**
 * Created by PhpStorm.
 * User: Alain
 * Date: 10.11.2015
 * Time: 15:34
 */
/** @var TYPE_NAME $_GET */
$kontinent = $_GET["kontinent"];

$url = "ressources/img/".$kontinent.".gif";

echo "<p>".$kontinent."</p>";
echo "<img src='".$url."' alt='".$kontinent."'>";
