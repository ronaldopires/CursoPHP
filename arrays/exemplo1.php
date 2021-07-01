<?php

//Array | Vetor
$frutas = array("Laranja", "Maça", "Banana", "Mamão", "Uva");

print_r($frutas);

$carros[0][0] = "GM";
$carros[0][1] = "Cobalt";
$carros[0][2] = "Onix";
$carros[0][3] = "Camaro";

$carros[1][0] = "Ford";
$carros[1][1] = "Fiesta";
$carros[1][2] = "Fusion";
$carros[1][3] = "Eco Sport";

echo "<br>";
echo $carros[0][2];
echo "<br>";
echo end($carros[0]); //end serve para mostrar o ultimo indice do array bidimencional

$pessoas = array();

array_push($pessoas, array(
    'nome' => 'Ronaldo',
    'idade' => 28
));

array_push($pessoas, array(
    'nome' => 'Renata',
    'idade' => 32
));

echo "<br>";
print_r($pessoas);
echo "<br>";
print_r($pessoas[0]['nome']);
echo "<br>";


echo json_encode($pessoas);