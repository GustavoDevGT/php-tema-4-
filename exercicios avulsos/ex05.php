<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <style>
        body{
            font-family: Arial, sans-serif;
            margin: 0;
            padding: 0;
            background-color: gray;
            display: flex;
            justify-content: center;
            align-items: center;
        }
        .container{
            display: flex;
            justify-content: center;
            align-items: center;
            flex-direction: column;
            width:30%;
            height:30%;
            background-color: white;
            margin: 2%;
            padding: 1%;

        }
        form{
            display: flex;
            flex-direction: column;
        }
        h2{
            padding: 0;
            margin: 0;
        }
        form{
            text-align: center;
        }
    </style>
</head>
<body>
    <div class="container">
        <h2>Somando</h2>
        <form action="" method="post">
            <input name="valor1" type="text" placeholder="Digite um numero">
            <input name="valor2" type="text" placeholder="Digite um numero">
            
            <input type="submit" value="somar">
        </form>
        <div class="result">
            <?php
                if ($_SERVER["REQUEST_METHOD"] == "POST") {
                    $valor1 = $_POST["valor1"];
                    $valor2 = $_POST["valor2"];
                    function calcularRaiz($valor) {
                        $calcular = $valor * $valor;
                        echo "a raiz de $valor é" . " " . "$calcular" . "<br>";
                    }

                    calcularRaiz($valor1);
                    calcularRaiz($valor2);

                    $somaRaizes = calcularRaiz($valor1) + calcularRaiz($valor2);

                    echo "A soma das raizes é $somaRaizes";
                }
            ?>
        </div>
    </div>
    
</body>
</html>