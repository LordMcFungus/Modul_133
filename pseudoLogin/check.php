<?php
session_start();
/**
 * Created by PhpStorm.
 * User: Alain
 * Date: 10.11.2015
 * Time: 14:21
 */

echo "<p>".$_SESSION["user"]."</p>";

echo "<a href='logout.php' >Logout</a>";