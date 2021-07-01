<?php

$suaIdade = 26;
$idadeCrianca = 12;
$idadeMaior = 18;
$idadeIdoso = 65;

if ($suaIdade < $idadeCrianca) {
    echo "Criança";
} else if ($suaIdade < $idadeMaior) {
    echo "Adolescente";
} else if ($suaIdade < $idadeIdoso) {
    echo "Adulto";
} else {
    echo "Idoso";
}
echo "<br>";
//Operador Ternário
($suaIdade < $idadeMaior) ? menor() : maior();

function menor(){
    echo "Menor de idade";
}
function maior(){
    echo "Maior de idade";
}