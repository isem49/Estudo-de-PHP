<!DOCTYPE html>
<html lang="pt-br">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Operadores Logicos</title>
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

    echo "<h2>Operadores de Logicos</h2>";

    //Operadores Logicos

    echo "<h3> Operador && (e)</h3>";

    if (($a == 3)  && ($b == 3)) {

        echo "Condição verdadeira";

    } else {

        echo "Condição falsa";
        
    }

    echo "<h3> Operador || (ou)</h3>";

    if (($a == 3)  || ($b == 3)) {

        echo "Condição verdadeira";

    } else {

        echo "Condição falsa";
        
    }

    echo "<h3> Operador XOR </h3>";

    if (($a == 2)  XOR ($b == 3)) {

        echo "Condição verdadeira";

    } else {

        echo "Condição falsa";
        
    }

    echo "<h3> Operador ! (Diferente)</h3>";

    if ( $a != $b) {

        echo "Condição verdadeira";

    } else {

        echo "Condição falsa";
        
    }




    ?>



</body>

</html>