<?php
session_start();
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title>LA_Websitée</title>
</head>
<body>
    <form action="login.php" method="post">
            <p>Benutzername: </p><input type="text" name="username"/>
            <p>Lieblingsfarbe: </p><input type="text" name="favcolour"/>
            <p>Lieblingstier: </p><input type="text" name="favanimal"/>
            <input type="submit" value="Einloggen" name="submit">
    </form>

</body>
</html>