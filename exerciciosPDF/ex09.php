<!DOCTYPE html>
<html lang="pt-BR">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initialscale=1.0">
    <title>Laço Do...While</title>
</head>

<body>
    <h2>Exibindo valores até que sejam maiores que 10:</h2>
    <?php
    $x = 1;
    do {
        echo "Valor de x: " . $x . "<br>";
        $x +=1 ;
    } while ($x < 11);
    ?>
</body>

</html>