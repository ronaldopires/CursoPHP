<?php

function ola($texto="Mundo", $periodo){ // valores que forem oobrigatórios são chamados a esquerda 
    echo "Ola $texto! $periodo<br>";

}

echo ola("Ronaldo","Bom dia");

function argumentosEmArrays(){
    $argumentos = func_get_args(); //Retorna um arrays com os parâmetros informados na chamada
    return $argumentos;
}

print_r(argumentosEmArrays("Ronaldo", "Renata", "Pikachu"));