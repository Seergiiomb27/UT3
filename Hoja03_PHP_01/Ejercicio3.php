<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>

<body>
    <?php


    for ($i = 100; $i <= 1000; $i++) {
        $aux = $i;
        $inverso = 0;

        while ($aux != 0) {
            $resto = $aux % 10;
            $inverso = $inverso * 10 + $resto;
            $aux = (int) ($aux / 10);
        }
        if ($i == $inverso) {
            echo "<br>$i";
        }
    }

    ?>
</body>

</html>