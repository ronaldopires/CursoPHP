<?php

//include "exemplo1.php"; // include tenta funcionar mesmo que não exista ou tenha erros e tem mais funções 
//require "exemplo1.php"; //require é obrigatório que exista o arquivo e não tenha erros sendo mais interessante
require_once "exemplo1.php"; // ignora caso chega chamado novamente
require_once "exemplo1.php";

$resultado = somar(10,20);

echo $resultado;
