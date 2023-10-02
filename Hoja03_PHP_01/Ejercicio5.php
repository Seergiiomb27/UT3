<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <?php 

    $v1 = 0;
    $v2 = 1;

    for($i = 0; $i < 20; $i++) {
        $num = $v1 + $v2;
        $v1 = $v2;
        $v2 = $num;
        echo $num;
        if($i < 19) {
            echo ", ";
        }
    }

    ?>
</body>
</html>