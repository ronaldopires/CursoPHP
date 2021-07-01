<?php

require_once("config.php");

use Cliente\Cadastro;

$cad = new Cadastro();
$cad->setNome("Ronaldo Carvalho");
$cad->setEmail("ronaldo@hotmail.com");
$cad->setSenha(123456);

echo $cad->registrarVenda();