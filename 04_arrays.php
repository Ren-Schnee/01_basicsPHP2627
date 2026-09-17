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

    <h1> funcions de arrays</h1>
    <?php
    var_dump(array_keys($persona));
    echo "<br>";
    var_dump(array_values($persona));
    echo "<br>";
    //Afegir un camp a l'array
    $persona["email"] = "elmail@mail.com";
    
    echo "<pre>";
    print_r($persona);
    echo "</pre>";

    //eliminar un camp de l'array
    unset($persona["email"]);
    echo "<pre>";
    print_r($persona);
    echo "</pre>";

    //afegim una segona persona a la llista de persones
    $llista_persones=[];
    array_push($llista_persones, $persona);
    $persona = [
        "nom" => "Daniel",
        "cognom" => "Espinosa",
        "edat" => 20
    ];
    array_push($llista_persones, $persona);
    echo "<pre>";
    print_r($llista_persones);
    echo "</pre>";

    //visualitza la llista de persona
    foreach ($llista_persones as $persona) {
        print_r($persona);
    }
    ?>
</body>

</html>