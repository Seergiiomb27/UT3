<!DOCTYPE html>
<html lang="en">

<head>
    <title>Valores del array $_SERVER</title>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>

<body>
    <h1>Valores del array $_SERVER</h1>
    <table border="1">
        <tr>
            <th>Variable</th>
            <th>Valor</th>
        </tr>
        <?php

        foreach ($_SERVER as $variable => $valor) {
            echo "<tr>";
            echo "<td>$variable</td>";
            echo "<td>$valor</td>";
            echo "</tr>";
        }

        ?>
    </table>
</body>

</html>