<?php

$nome = 'Ronaldo';
$sobrenome = "pires de carvalho";
$nomeCompleto = $nome  ." ". $sobrenome;
//var_dump($nome, $sobrenome);

echo 'ABC $nome'; 
echo "<br>";
echo "ABC $nome"; //Interpolação de variáveis no PHP 
echo "<br>";
echo strtoupper($nomeCompleto); //Tudo maiusculo
echo "<br>";
echo strtolower($nomeCompleto); //Tudo minusculo
echo "<br>";
echo ucfirst($nomeCompleto); //Primeira letra maiuscula
echo "<br>";
echo ucwords($nomeCompleto); //Primeira letra de cada maiusculo
echo "<br>";

$novoNome = str_replace("o", "0", $nome);
$novoNome = str_replace("a", "@", $novoNome);
echo $novoNome;
echo "<br>";


$frase = "Lucas Lima fora do Palmeiras";
$palavra = "fora";
$q = strpos($frase, $palavra);
$texto = substr($frase, 0, $q);
var_dump($texto);

$texto2 = substr($frase, $q+strlen($palavra), strlen($frase));
echo "<br>";

var_dump($texto2);