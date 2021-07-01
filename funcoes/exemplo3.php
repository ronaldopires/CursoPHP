<?php

$a = 10;

function trocaValor(&$a){ //passagem de parâmetro por referencia, alterando o valor da variável

    $a += 50; //variável alterada somente no escopo da função 
    return $a;
}

echo trocaValor($a);
echo "<br>";
echo $a;
echo "<br>--------------------------------------<br>";


$pessoas = array(
    'nome' => 'Ronaldo',
    'idade' => 28
);

foreach ($pessoas as &$value) {
    if(gettype($value) == 'integer') $value += 10;
    echo  $value . "<br>";

}

print_r($pessoas);