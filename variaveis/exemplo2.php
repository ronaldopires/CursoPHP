<?php

echo "<b>Concatenação</b><br>";
$nome = "Ronaldo";
$sobrenome = "Pires de Carvalho";
echo $nome . " " . $sobrenome;


echo "<br><b>Operadores de atribuição</b><br>";
$valorTotal = 0;
echo "<br>" . $valorTotal += 100;
echo "<br>" . $valorTotal += 10;
echo "<br>" . $valorTotal *= .9;
echo "<br>" . $valorTotal;

echo "<br><b>Operadores aritméticos</b><br>";
$a = 10;
$b = 2;

echo "Soma ". $a + $b . "<br>";
echo "Subtração ". $a - $b . "<br>";
echo "Multiplicação ". $a * $b . "<br>";
echo "Divisão ". $a / $b . "<br>";
echo "Resto da Divisão ". $a % $b . "<br>";
echo "Expoente ". $a ** $b . "<br>";

echo "<br><b>Operadores de Comparação</b><br>";
$c = 55.0;
$d = 55;

var_dump($c > $d);
echo "<br>";
var_dump($c < $d);
echo "<br>";
var_dump($c == $d);
echo "<br>";
var_dump($c === $d);
echo "<br>";
var_dump($c != $d);
echo "<br>";
var_dump($c !== $d);

echo "<br><br><b>Operador nave espacial spaceship</b><br>";
// space ship php 7
$e = 10;
$f = 0;
echo "Valor 1 = ". $e ."<br>";
echo "Valor 2 = ". $f ."<br>";

echo "<br>Se valor 1 for menor que o valor 2 resultado será -1 <br>Se valor 1 for igual ao valor 2 resultado será 0 <br>Se valor 1 for maior que valor 2 o resultado será 1<br>";

switch ($e <=> $f) {
    case -1:
        echo "Valor 1 é menor que o valor 2";
        break;
    case 1:
        echo "Valor 1 é maior que o valor 2";
        break;
    case 0:
        echo "Valores são iguais";
        break;
    default:
        echo "Comparação indefinida";
        break;
}

echo "<br><br><b>Operador Ternário</b><br>";
$g = NULL;
$h = NULL;
$i = 10;

echo $g ?? $h ?? $i;