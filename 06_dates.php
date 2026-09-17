<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    
    <h1>La funcio date()</h1>
    <?php
    echo "<h2> formats de data </h2>";
    $data = date("d-m-Y");
    echo "<br>" . $data;
    $data = date("d-m-Y H:i:s");
    echo "<br>" . $data;
    ?>
    <h1>La funcio date amb timestamp</h1>
    <?php
    $now = time();
    echo date("d-m-Y H:i:s", $now);
    ?>

</body>
</html>