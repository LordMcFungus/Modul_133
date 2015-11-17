<?php
//session_start();
/**
 * Created by PhpStorm.
 * User: Alain
 * Date: 17.11.2015
 * Time: 13:14
 */
$username = "Mclurch";
$password = "bulgursalat";
$row;

require_once("connection.php");

$obj = $GLOBALS['DBConnection'];

if (mysqli_connect_errno())
{
    echo "Failed to connect to MySQL: " . mysqli_connect_error();
}
$query = $obj->query("select * from jeggersush");
$arrayquery = $query->fetch_assoc();

while ($row = $query->fetch_assoc())
{
    echo  $row['Name']."<p></p>";
}

$query = $obj->query("SELECT * FROM createdbyideswag where '$username' = Username and '$password' = Password");
$wow = $query->fetch_assoc();

echo $wow['Username'];

mysqli_close($obj);
