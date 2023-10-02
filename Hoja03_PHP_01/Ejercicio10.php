<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>

<body>
    <?php

    for ($numero=3; $numero < 1000; $numero++) {  
        $contador = 0;
        for ($f = 2; $f <= $numero / 2; $f++) {
            if ($numero % $f == 0) {
                $contador++;
            }
        }
        if($contador == 0) {
            echo $numero." ";
        }
    }

    ?>
</body>

</html>