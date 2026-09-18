<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>

<body>
    <?php
    $nom = "Acer Laptop super mega 3000";
    $marca = "Acer";
    $preu = 400;
    $disponible = true;
    $stock = 5;
    $os_installats = ["Windows 10", "Debian", "Ubuntu"];
    ?>

    <ul>
        <li>nom del PC: <?php echo $nom; ?></li>
        <li>Marca: <?= $marca ?></li>
        <li>Llista de OS: <?php print_r($os_installats); ?></li>
        <li>Disponibilitat: <?php var_dump($disponible); ?></li>
        <li>
            <pre>
                <?php print_r($os_installats);?>
            </pre>
        </li>



    </ul>

</body>

</html>