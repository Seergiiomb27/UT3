<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>

<body>
    <?php

    $numero = 389;
    $contador = 0;

    for ($i=2; $i <= $numero/2; $i++) { 
        if($numero % $i == 0){
            $contador++;
        }
    }

    if($contador > 0) {
        echo "El número ".$numero." no es primo";
    } else {
        echo "El número ".$numero." es primo";
    }


    ?>
</body>

</html>