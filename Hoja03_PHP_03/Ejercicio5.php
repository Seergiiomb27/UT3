<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>

<body>
    <?php

    $articulos = array(
        array("codigo" => 001, "descripción" => "Articulo 1", "existencias" => 30),
        array("codigo" => 002, "descripción" => "Articulo 2", "existencias" => 50),
        array("codigo" => 003, "descripción" => "Articulo 3", "existencias" => 70),
    );

    function mayor($articulos)
    {
        $nombreArticulo = "";
        $maxExistencias = 0;

        foreach ($articulos as $articulo) {
            if ($articulo["existencias"] > $maxExistencias) {
                $nombreArticulo = $articulo["descripción"];
                $maxExistencias = $articulo["existencias"];
            }
        }

        return $nombreArticulo;
    }

    function sumar($articulos)
    {
        $totalExistencias = 0;

        foreach ($articulos as $articulo) {
            $totalExistencias += $articulo["existencias"];
        }

        return $totalExistencias;
    }

    function mostrar($articulos)
    {
        foreach ($articulos as $articulo) {
            echo "Código: " . $articulo["codigo"] . ", descripción: " . $articulo["descripción"] . ", existencias: " . $articulo["existencias"] . "<br>";
        }
    }

    echo "El artículo con mas existencias es el " . mayor($articulos) . "<br>";
    echo "La suma de todas las existencias es " . sumar($articulos) . "<br>";
    mostrar($articulos);


    ?>
</body>

</html>