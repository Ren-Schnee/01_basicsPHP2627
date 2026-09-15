<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>

<body>
    <?php
    $varible1 = "toni";
    $varible2 = 25;
    $varible3 = ["maduixa", "pera", "poma"];
    ?>

    <ul>
        <li>la variable 1 es: <?php echo $varible1; ?></li>
        <li>la variable 2 es: <?= $varible2 ?></li>
        <li>la variable 3 es: <?php print_r($varible3); ?></li>
        <li>la variable 3 es: <?php var_dump($varible3); ?></li>
        <li>
            <pre>
                <?php print_r($varible3);?>
            </pre>
        </li>



    </ul>

</body>

</html>