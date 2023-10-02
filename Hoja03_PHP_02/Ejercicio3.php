<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>

<body>
    <?php

    $numero = 131.45;

    function es_capicua($num)
    {
        $inverso = 0;
        $aux = $num;

        while ($aux != 0) {
            $resto = $aux % 10;
            $inverso = $inverso * 10 + $resto;
            $aux = (int) ($aux / 10);
        }

        if ($inverso == $num) {
            echo "El número " . $num . " es capicúa.";
        } else {
            echo "El número " . $num . " no es capicúa.";
        }
    }

    function redondear_numero($num)
    {
        $aux = floor($num);

        echo "<br>El número ".$num." redondeado es: ".$aux;
    }

    function contar_digitos($num)
    {
        $contador = 1;
        $aux = $num;

        while ($aux > 9) {
            $aux = (int)($aux / 10);
            $contador++;
        }

        echo "<br>El número ".$num." tiene ".$contador." cifras";
    }
    
    es_capicua($numero);
    redondear_numero($numero);
    contar_digitos($numero);

    ?>
</body>

</html>