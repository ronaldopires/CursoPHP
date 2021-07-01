<?php

// .br .com.br .org. .net são URI = Uniform Resource Identifier 
//url = Uniform Resource Location

$nome = (int)$_GET["a"];  //Todo valor obtido via get é string se precisar do tipo inteiro é necessário converter para inteiro (int) chamado de casting

//var_dump($nome);

$ip = $_SERVER["REMOTE_ADDR"];
$ip1 = $_SERVER["SCRIPT_NAME"];
echo $ip;
echo $ip1;