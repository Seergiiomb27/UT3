<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>

<body>
    <?php

    $n1 = 1;
    $n2 = 2;

    for ($i = 0; $i < 10; $i++) {
        echo "$n1"."/"."$n2";
        $n1++;
        $n2 *= 2;
        if($i < 9) {
            echo ", ";
        }
    }

    ?>
</body>

</html>