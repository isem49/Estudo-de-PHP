<!DOCTYPE html>
<html lang=pt-br">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Operadores</title>
</head>

<body>


    <?php

        echo "<h1>Valores: </h1>";

        //Atribuição de valores para variaveis
        $a = 2;
        $b = 3;
        $c = 7;

        //Impressão de valores das variavies
        echo "A = 2<br><br>";
        echo "B = 3<br><br>";
        echo "C = 7<br>";

        //Calculos com os operadores
        $resultadoSoma = $a + $b + $c;
        $resultadoSub = $a - $b - $c;
        $resultadoMulti = $a * $b * $c;
        $resultadoDiv = ($b + $c) / $a;
        $resultadoResDiv = ($b + $c) % $a;

        //Operadores Aritm[eticos]
        echo "<h1>Operadores Aritméticos</h1>";
        echo "A soma é igual a : $resultadoSoma <br><br>";
        echo "A subtração é igual a: $resultadoSub <br><br>";
        echo "A multiplicação é igual a: $resultadoMulti <br><br>";
        echo "A divisão é igual a: $resultadoDiv <br><br>";
        echo "O Resto da divisão é igual a: $resultadoResDiv <br><br>";



    ?>




</body>

</html>