<?php

$nome = "Ronaldo";

function teste(){
    global $nome; //Para enchergar a variável fora de escopo usamos a variável global
    echo $nome;
}

function teste2(){
    $nome = "Renata";
    echo "<br>".$nome;
}

teste();
teste2();