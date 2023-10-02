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

    if (substr($verboAConjugar, -2) == "ar" || substr($verboAConjugar, -2) == "er" || substr($verboAConjugar, -2) == "ir") {
        $verboSinTerminacion = substr($verboAConjugar, 0, -2);

        function conjugarVerbo($verbo)
        {
            $conjugacion = [
                "yo" => $verbo . "o",
                "tu" => $verbo . "es",
                "el" => $verbo . "e",
                "nosotros" => $verbo . "emos",
                "vosotros" => $verbo . "éis",
                "ellos" => $verbo . "en",
            ];

            return $conjugacion;
        }

        $presenteIndicativo = conjugarVerbo($verboSinTerminacion);

        echo "Verbo elegido: $verboAConjugar<br>";
        echo "Presente del indicativo: <br>";

        foreach ($presenteIndicativo as $persona => $forma) {
            echo "$persona: $forma<br>";
        }
    } else {
        echo "Error: El verbo no tiene una terminación válida (ar, er o ir).";
    }

    ?>
</body>

</html>