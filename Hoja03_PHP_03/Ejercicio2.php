<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>

<body>
    <?php

    $monedasBilletes = [500, 200, 100, 50, 20, 10, 5, 2, 1, 0.5, 0.2, 0.1, 0.05, 0.02, 0.01];
    
    function desglosar ($cantidad, $monedasBilletes) {

        $desglose = [];

        foreach($monedasBilletes as $dinero) {
            while($cantidad >= $dinero) {
                $cantidadDesglosada = floor($cantidad / $dinero);
                $cantidad -= $cantidadDesglosada * $dinero;
                $desglose[$dinero] = $cantidadDesglosada;
            }
        }

        return $desglose;
    }

    $totalDinero = 311.63;

    $desgloseTotal = desglosar($totalDinero, $monedasBilletes);

    echo "Cantidad de dinero en euros depositada: " . $totalDinero . "<br>";
    echo "Desglose:<br>";
    foreach ($desgloseTotal as $dinero => $cantidad) {
        echo $cantidad . " x " . $dinero . " euros<br>";
    }

        ?>
</body>

</html>