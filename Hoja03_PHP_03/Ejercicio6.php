<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>

<body>
    <?php

    $verbos = ["Amar", "Bailar", "Temer", "Comer", "Partir", "Asistir"];

    $verboAConjugar = $verbos[array_rand($verbos)];

    function conjugarVerbo ($verbo) {
        $conjugacion = [
            "yo" => $verbo . "o",
            "tu" => $verbo . "as",
            "el" => $verbo . "a",
            "nosotros" => $verbo . "emos",
            "vosotros" => $verbo . "eis",
            "ellos" => $verbo . "en",
        ];

        return $conjugacion;
    }

    $presenteIndicativo = conjugarVerbo($verboAConjugar);

    echo "Verbo elegido: $verboAConjugar<br>";
    echo "Presente del indicativo: <br>";
    
    foreach ($presenteIndicativo as $persona => $forma) {
        echo "$persona: $forma<br>";
    }

    ?>
</body>

</html>