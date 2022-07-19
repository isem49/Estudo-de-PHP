<?php

//Imprimndo texto
echo "<h2>Testando meu primeiro programa em php!!!</h2>";

//Declarando váriaveis em php

//String
$nome = "Junior";

//Inteiro
$idade = 19;

//Double ou floats
$testeDouble = 1.5;

//Boolean
$situacao = true;

//imprimindo váriaveis

echo "Nome: $nome <br><br>";

echo "Idade: $idade <br><br>";

echo "Double: $testeDouble <br><br>";

//OBS: Caso você utilize Aspas Simples (' ') ele reconhece a váriavel como texto, exemplo:

echo 'Nome: $nome <br><br>';

echo 'Idade: $idade <br><br>';

echo 'Double: $testeDouble <br><br>';

//Concatenação

echo "Meu nome é $nome, " . "tenho $idade anos" . " e gosto de estudar programação" . "<br><br>";

//Calculos

$quantidadeP = 50;

echo "Quantidade inicial " .  $quantidadeP . "<br><br>";

$quantidadeP = $quantidadeP - 10;

echo "Quantidade após subtrair um valor " . $quantidadeP . "<br><br>";

//Calculos com double

$saldo = 15000000.5;
$deposito = 30.55;

echo "Saldo atual: $saldo <br><br>";
echo "Valor a ser depositsado: $deposito <br><br>";

$saldo = $saldo + $deposito;

echo "Saldo depois do deposito: $saldo <br><br>";

//Escolhendo casas decimais e formatação para real

echo "Saldo: " . number_format($saldo, 3) . "<br><br>";

echo "Saldo: " . number_format($saldo, 3, ".",   ".",) . "<br><br>";

//testando Boolean

if ($situacao) {

    echo "<span style= 'color: green;'> A situação é verdadeira<br><br></span>";
} else {

    echo "<span style= 'color: red'; >A situação é falsa </span> <br><br>";
}

$situacao = false;

if ($situacao) {

    echo "<span style= 'color: green;'> A situação é verdadeira</span>";
} else {

    echo "<span style= 'color: red'; >A situação é falsa </span>";
}



?>