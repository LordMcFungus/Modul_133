<?php
/**
 * Created by PhpStorm.
 * User: Alain
 * Date: 10.11.2015
 * Time: 15:08
 */

?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title>Maps</title>
</head>
<body>
   <h1>Show Continent</h1>
    <img src="ressources/img/World.gif"
         usemap="continentmap">

    <map name="continentmap">
        <area shape="rect" coords="38,49,157,127" href="kontinent.php?kontinent=USA" alt="USA">
        <area shape="rect" coords="233,14,317,81" href="kontinent.php?kontinent=Europe" alt="Europe">
        <area shape="rect" coords="480,58,522,105" href="kontinent.php?kontinent=Japan" alt="Japan">
    </map>
</body>
</html>
