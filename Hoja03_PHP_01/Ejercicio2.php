<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>

<body>
    <?php
    $numero = 1221;



    $inverso = 0;
    $aux = $numero;
    while ($aux != 0) {
        $resto = $aux % 10;
        $inverso = $inverso * 10 + $resto;
        $aux = (int) ($aux / 10);
    }
    if($numero == $inverso) {
        echo "El número ".$numero." es capicúa";
    } else {
        echo "El número ".$numero." no es capicúa";
    }


    ?>
</body>

</html>