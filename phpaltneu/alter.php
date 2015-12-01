<?php
// Systemeinstellungen
$id = "root";
$pw = "";
$host = "localhost";
$database = "letest";
$table = "artikel1";

$bgColor = "EEB01A";
$PHP_SELF = $_SERVER['PHP_SELF'];
$meldung = "Gaarnüüt";

if(isset($_GET['artnr']))
{
    $artnr = $_GET['artnr'];
}

if(isset($_GET['titel']))
{
    $titel = $_GET['titel'];
}

if(isset($_GET['preis']))
{
    $preis = $_GET['preis'];
}

if(isset($_GET['inhalt']))
{
    $inhalt = $_GET['inhalt'];
}

if(isset($_GET['nr']))
{
    $nr = $_GET['nr'];
}


if(isset($_GET['action']))
{
    $action = $_GET['action'];
}
else
{
    $action = "Beispieltext";
}

// Einstellungen Ende

$conn_id = mysqli_connect ($host, $id, $pw, $database);
if (mysqli_connect_errno())
{
    echo "Error: "  . mysqli_connect_error();
}

// Löscht einen Artikel aus der Datenbank
if ($action == "loeschen") {
Mysqli_query ($conn_id, "delete from artikel1 where nr = '$nr'");
$meldung = "Der Artikel wurde gelöscht.";

// Aktualisiert einen Datensatz
} elseif($action == "save") {

mysqli_query($conn_id, "update artikel1 set artnr = '$artnr', titel = '$titel', preis = '$preis', inhalt =
'$inhalt' where nr = '$nr'");
$meldung = "Der Artikel wurde upgedated.";

// Fügt einen neuen Artikel hinzu
} elseif ($action == "neu") {

mysqli_query ($conn_id, "insert into artikel1 (titel, artnr, preis, inhalt) VALUES
('$titel', '$artnr', '$preis', '$inhalt')");
$meldung = "Der Artikel wurde hinzugefügt.";


// Selektiert den ausgewählten Artikel zu Updaten
} elseif ($action == "update") {

$result = mysqli_query($conn_id, "select * from artikel1 where nr =  '".$nr. "'");
    $result_array = $result->fetch_assoc();
$titel = $result_array['titel'];
$artnr = $result_array['artnr'];
$preis = $result_array['preis'];
$inhalt = $result_array['inhalt'];
?>

<table>
    <form action=<?php echo $PHP_SELF; ?> method = get>
    <input type=hidden name=action value="save">
    <input type=hidden name=nr VALUE="<?php echo $nr ?>">
    <tr>
        <td>Art.-Nr.</td>
        <td>
            <input type=text name="artnr" value="<?php echo $artnr ?>">
        </td>
    </tr>
    <tr>
        <td>Titel</td>
        <td>
            <input type=text name="titel" value="<?php echo $titel ?>">
        </td>
    </tr>
    <tr>
        <td>Preis</td>
        <td>
            <input type=text name="preis" value="<?php echo $preis ?>">
        </td>
    </tr>
    <tr>
        <td>Text</td>
        <td>
            <textarea name="inhalt"><?php echo $inhalt ?></textarea>
        <td>
    </tr>
    <tr>
        </td>
        <td><input type=submit value="Artikel Updaten"></form></td>
    </tr>
</table>

<?php

// Formular für ein neues Produkt
} elseif($action == "formneu" ) {

?>
<table>
    <form action=<?php echo $PHP_SELF; ?> method=get>
    <input type=hidden name=action value="neu">
    <tr>
        <td>Art.-Nr.</td>
        <td>
            <input type=text name="artnr">
        </td>
    </tr>
    <tr>
        <td>Titel</td>
        <td>
            <input type=text name="titel">
        </td>
    </tr>
    <tr>
        <td>Preis</td>
        <td>
            <input type=text name="preis">
        </td>
    </tr>
    <tr>
        <td>Text</td>
        <td>
            <textarea name="inhalt"></textarea>
        </td>
    </tr>
    <tr>
        <td></td>
        <td>
            <input type=submit value="Neuen Artikel hinzufügen">
            </form>
        </td>
    </tr>
</table><p>

<?php
// Gibt alle Datensätze aus der Datenbank aus.
} else {



echo "<ol><b>Alle Artikel in der Übersicht:</b>";
echo "<br>";
echo "<table border= 'l' width='700'>";
echo "<tr bgcolor='#00cc00'><td width='100'><b>Art.-Nr.<b></td>
<td width='100'><b>Artikel</b></td>
<td width='100'><b>Preis</b></td>
<td width='300'><b>inhalt</b></td>
<td width='50' ><b>Update</b></td>
<td width='50'><b>Löschen</b></td></tr>";

$result = mysqli_query($conn_id, "select * from artikel1");

if ($num = mysqli_num_rows($result)) {
// Ausgabe der Datensätze, wenn vorhanden
for ($i=0;$i < $num; $i++) {

/* zusätzlicher Counter
$z++; //bincounter
if($z == 1)
{    $bgColor = "#CCCCCC"; }
else
{    $bgColor = "#FFFFFF"; } */
// Gibt alle Datensätze in wechselfarbigen Tabellenreihen aus(1).

/* Abfrage der Variable ($i/2) ergibt eine Floatzahl
if(strpos(($i/2),".")==false)
{    $bgColor = "#CCCCCC"; }
else
{    $bgColor = "#FFFFFF"; } */
// Gibt alle Datensätze in wechselfarbigen Tabellenreihen aus(2).

$bgColor =   $bgColor=="#ffffff" ?  "#888888" : "#ffffff";
// Streifen-Muster / verkuerzte if(bedingung){ } else{}-Verzweigung
// Bedingung ? Erfuellt-Fall : Nichterfuellt-Fall
// Falls der Inhalt der Variable $bgColor #ff00ff" ist, wird er auf
// #888888 gesetzt, ansonsten auf #ff00ff



$result_array = $result->fetch_assoc();
$nr = $result_array['nr'];
$artnr = $result_array['artnr'];
$preis = $result_array['preis'];
$titel = $result_array['titel'];
$inhalt = $result_array['inhalt'];

echo "<tr bgColor = \"$bgColor\">";
echo "<td>$artnr</td>";
echo "<td>$titel</td>";
echo "<td>$preis Fr. -</td>";
echo "<td>$inhalt</td>";
echo "<td><a href=\"$PHP_SELF?nr=$nr&action=update\">Update</a></td>";
echo "<td><a href=\"$PHP_SELF?nr=$nr&action=loeschen\">Löschen</a></td>"; }
echo "</tr>";
    
/*if($z==1) 
{     $z = -1;} //bincounter 1 | 0

} */
} else echo "<tr><td colspan='6' width='100%'>kein Artikel vorhanden!</td></tr>";
echo "</table>";
echo "</ol>";
}
echo "<ol>";
if (!$meldung) $meldung = "Optionen<P>";
echo "$meldung";

echo "<p><a href=$PHP_SELF>Zur Startseite</a>";
echo " - <a href=$PHP_SELF?action=formneu>Neuen Artikel einfügen</a>";
echo "</ol>";
?>