<?php

function soma(int ...$valores){ //int ...$variável serve para definir que tosos os valores informados por parâmetros serão do tipo inteiro 
    return array_sum($valores); //soma todos os valores do array
}

var_dump(soma(2,2));
echo "<br>";
echo soma(50,22);
echo "<br>";
echo soma(1.5,5.3);
echo "<br>";

function soma2(float ...$valores):float{ 
    return array_sum($valores); //soma todos os valores do array
}

var_dump(soma2(2,2));
echo "<br>";
echo soma2(50,22);
echo "<br>";
echo soma2(1.5,5.3);
echo "<br>";