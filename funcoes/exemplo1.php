<?php

primeirafuncao();
function primeirafuncao(){
    global $login; //Define que a variável login será de escopo global.
    return $login = false;
}

if($login){
    bemVindo();
}else{
    adeus();
}

function bemVindo(){
    echo "Bem Vindo!";
}

function adeus(){
    echo "Até logo!!";
}
