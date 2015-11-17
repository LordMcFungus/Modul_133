<?php
//session_start();
/**
 * Created by PhpStorm.
 * User: Alain
 * Date: 17.11.2015
 * Time: 13:14
 */

$db_name = "gadildonsush";
$db_host = "localhost";
$db_user = "root";
$db_password = "";

$obj = mysqli_connect("$db_host", "$db_user","$db_password", "$db_name" );

if (mysqli_connect_errno())
{
    echo "Failed to connect to MySQL: " . mysqli_connect_error();
}

$GLOBALS['DBConnection'] = $obj;



