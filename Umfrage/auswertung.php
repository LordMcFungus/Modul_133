<?php
/**
 * Created by PhpStorm.
 * User: Alain
 * Date: 17.11.2015
 * Time: 15:24
 */
include_once("variablen.inc");

if(!isset($_POST['umfrage']))
{
    throw new RuntimeException;
}

$auswahl = $_POST['umfrage'];

$file = fopen($ergebnis, 'r') or die("Datei nicht da :-(");

$filetext = fread($file, filesize($ergebnis));

//var_dump($filetext);

$filearray = explode('
',$filetext);
$i = 1;
while($i < sizeof($filearray)-1)
{
    $filearray[$i] //TODO STRING TO INT
    $i+=2;
}

echo "<p>Ihre Antwort: ".$werte[$auswahl]."</p>";

echo "<p>der aktuelle Stand</p>";
echo "<table border='1'>";
$i = 0;
while($i < sizeof($filearray))
{
    echo "<tr><td>".$filearray[$i+1]."</td>";
    echo "<td>".$filearray[$i]."</td></tr>";
    $i+=2;
}
echo "</table>";