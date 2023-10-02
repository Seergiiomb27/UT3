<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <?php

    $numero = 1234;
    $aux = $numero;
    $suma = 0;
    $mult = 1;

    while($aux != 0) {
        $resto = $aux % 10;
        $suma = $suma + $resto;
        $mult = $mult * $resto;
        $aux = floor($aux / 10);
    }

    if($suma == $mult){
        echo "La suma y la multiplicación coinciden";
    } else {
        echo "La suma y la multiplicación no coinciden";
    }

    ?>
</body>
</html>