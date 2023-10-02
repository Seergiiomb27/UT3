<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>

<body>
    <?php

    if(isset($_POST["nombre"]) && isset($_POST["ciclo"])) {
        $nombre = $_POST["nombre"];
        $ciclo = $_POST["ciclo"];

        echo "Nombre del alumno que cursa: $nombre<br>";
        echo "Ciclo que está cursando el alumno: $ciclo<br>";
    }

    if(isset($_GET["nombre"]) && isset($_GET["ciclo"])) {
        $nombre = $_GET["nombre"];
        $ciclo = $_GET["ciclo"];

        echo "Nombre del alumno que cursa: $nombre<br>";
        echo "Ciclo que está cursando el alumno: $ciclo<br>";
    }

    ?>
</body>

</html>