<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>

<body>
    <h1>Arrays</h1>
    <?php
    $llista_esports = ["futbol", "basquet", "volei"];
    echo $llista_esports[0];
    echo $llista_esports[3]; //aquest dona error

    for ($i = 0; $i < sizeof($llista_esports); $i++) {
        echo $llista_esports[$i] . "<br>";
    }
    ?>

    <h1>Arrays associatiu</h1>
    <?php
    $persona = [
        "nom" => "pere",
        "cognom" => "sanchez",
        "edat" => 24
    ];
    
    var_dump($persona);
    
    foreach ($persona as $key => $value) {
        echo "<br> LA clau es ".$key. " i el valor es ".$value;
        echo $persona["nom"];
    }

    echo $persona["nom"]
    ?>
</body>

</html>