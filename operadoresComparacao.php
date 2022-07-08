<!DOCTYPE html>
<html lang="pt-br">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Operadores de Comparação</title>
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

        echo "<h2>Operadores de Comparação</h2>";
        
        echo "<p><strong>Os operadores de comparação podem ser: </strong></p>";
        echo "Maior que : >   <br><br>";
        echo "Menor que : <   <br><br>";
        echo "Maior ou igual : =>   <br><br>";
        echo "Menor ou igual : <=   <br><br>";
        echo " igual a : ==   <br><br>";
        echo " Diferente de : !=   <br><br>";


        //Condicional
        
        echo "<p><strong>Utilizando o > : </strong></p>";
        if ($a > $b) {

            echo "$a é maior que $b";

        } else {

            echo "$a é menor que $b";

        }

        echo "<p><strong>Utilizando o => : </strong></p>";
        if ($a >= $b) {

            echo "$a é maior ou igual a $b";

        } else {

            echo "$a não é menor e nem igual $b";

        }



        echo "<p><strong>Utilizando o < : </strong></p>";
        if ($a < $c) {

            echo "$a é menor que $c";

        } else {

            echo "$a não é menor que $c";

        }

        echo "<p><strong>Utilizando o <= : </strong></p>";
        if ($a <= $c) {

            echo "$a é menor ou igual a $c";

        } else {

            echo "$a não é menor e nem igual $c";

        }

        echo "<strong><p>Utilizando o == :</p></strong>";
        if ($a == $c) {

            echo "$b é igual a $c";

        } else {

            echo "$b não é igual a  $c";

        }

        echo "<strong><p>Utilizando o != :</p></strong>";
        if ($a != $c) {

            echo "$a é diferente de $c";

        } else {

            echo "$a não é diferente de  $c";

        }

    ?>



</body>

</html>