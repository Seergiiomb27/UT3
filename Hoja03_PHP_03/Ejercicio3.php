<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <?php

    function calcularLetraNIF ($dni) {
        $letras = "TRWAGMYFPDXBNJZSQVHLCKE";
        $resto = $dni % 23;
        $letraNIF = $letras[$resto];
        return $letraNIF;
    }

    $dni = "72000266";

    $letraNIF = calcularLetraNIF($dni);

    echo "DNI completo: " . $dni . "-" . $letraNIF;
    
?>
</body>
</html>