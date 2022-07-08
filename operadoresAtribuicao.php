<!DOCTYPE html>
<html lang="pt-br">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Operadores de atribuição</title>
</head>

<body>

    <?php

        echo "<h2>Valores: </h2>";

        //Atribuição de valores para variaveis
        $a = 1;
        $b = 2;
        $c = 3;
        $resultado = 7;

        //Impressão de valores das variavies
        echo "A = 1<br><br>";
        echo "B = 2<br><br>";
        echo "C = 3<br><br>";
        echo "Resultado = 7<br>";

        //Calculos
        echo "<h2> Operadores de Atribuição </h2>";

        //Calcular Soma
        $a += $resultado;
        $b += $resultado;
        $c += $resultado;

        echo "<p><strong>Valores apos o calculo da soma: </strong> </p>";
        echo "<p> <strong>Calculo </strong> = X + Resultado </p>";
        
        echo "<p>Valor de a = $a</p>";
        echo "<p>Valor de b = $b</p>";
        echo "<p>Valor de c = $c</p>";

        //Calcular Subtração
        $a -= $resultado;
        $b -= $resultado;
        $c -= $resultado;

        echo "<p><strong>Valores apos o calculo da subtração: </strong> </p>";
        echo "<p> <strong>Calculo </strong> = X - Resultado </p>";

        echo "<p>Valor de a = $a</p>";
        echo "<p>Valor de b = $b</p>";
        echo "<p>Valor de c = $c</p>";

        //Calcular multiplicação
        $a *= $resultado;
        $b *= $resultado;
        $c *= $resultado;

        echo "<p><strong>Valores apos o calculo da Multiplicação: </strong> </p>";
        echo "<p> <strong>Calculo </strong> = X * Resultado </p>";

        echo "<p>Valor de a = $a</p>";
        echo "<p>Valor de b = $b</p>";
        echo "<p>Valor de c = $c</p>";

        //Calcular divisão
        $a /= $resultado;
        $b /= $resultado;
        $c /= $resultado;

        echo "<p><strong>Valores apos o calculo da divisão: </strong> </p>";
        echo "<p> <strong>Calculo </strong> = X / Resultado </p>";

        echo "<p>Valor de a = $a</p>";
        echo "<p>Valor de b = $b</p>";
        echo "<p>Valor de c = $c</p>";

         //Calcular Resto da divisão
         
         $resultado %= $a;
         $resultado %= $b;
         $resultado %= $c;
 
         echo "<p><strong>Valores apos o calculo da Resto da divisão: </strong> </p>";
         echo "<p> <strong>Calculo </strong> = Resultado % X  </p>";
 
         echo "<p>Valor de a = $resultado</p>";
         echo "<p>Valor de b = $resultado</p>";
         echo "<p>Valor de c = $resultado</p>";


    ?>



</body>

</html>