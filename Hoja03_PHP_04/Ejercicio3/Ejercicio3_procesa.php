<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>

<body>
    <?php
    
    if (isset($_REQUEST["nombre"]) && isset($_REQUEST["ciclo"])) {
        $nombre = $_REQUEST["nombre"];
        $ciclo = $_REQUEST["ciclo"];

        echo "Nombre del alumno que cursa: $nombre<br>";
        echo "Ciclo que está cursando el alumno: $ciclo<br>";
    }

    ?>
</body>

</html>