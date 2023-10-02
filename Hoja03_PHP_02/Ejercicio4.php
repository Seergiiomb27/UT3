<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>

<body>
    <?php

    function validar_fecha($fecha)
    {
        //preguntar strtotime
        $verificación = strtotime($fecha);
        return $verificación;
    }

    $fecha = "2023-11-14";

    if (validar_fecha($fecha)) {
        echo "La fecha es válida.";
    } else {
        echo "La fecha no es válida.";
    }

    ?>
</body>

</html>