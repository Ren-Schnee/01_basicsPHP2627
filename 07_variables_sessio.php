<?php
    session_start();
    $_SESSION['user'] = "Danie";
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <?php
        echo "La variable de sessio es: " . $_SESSION['user'];
    ?>
    <br>
    <a href="./07_sessio.php">Veure la variable de sessio</a>
</body>
</html>