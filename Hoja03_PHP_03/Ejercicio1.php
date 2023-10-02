<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>

<body>
    <?php

    function cargar($numeroElementos)
    {
        $array = array();
        for ($i = 0; $i < $numeroElementos; $i++) {
            $array[]=rand(1,100);
        }
        return $array;
    }

    function ordenar($array) {
        sort($array);
        return $array;
    }

    function mezclar($array1, $array2) {
        $arrayMezclado = array_merge($array1, $array2);
        sort($arrayMezclado);
        
        return $arrayMezclado;
    }

    $array1 = cargar(20);
    $array2 = cargar(20);

    $array1 = ordenar($array1);
    $array2 = ordenar($array2);

    echo ("Array 1: " . implode(", ", $array1) . "<br>");
    echo ("Array 2: " . implode(", ", $array2) . "<br>");

    $arrayMezclado = mezclar($array1, $array2);

    echo "Array mezclado: " . implode(", ", $arrayMezclado) . "<br>";


    ?>
</body>

</html>