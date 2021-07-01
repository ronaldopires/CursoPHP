<?php

function incluirClasses($nomeClasse)
{

    if (file_exists($nomeClasse . ".php") === true) require_once($nomeClasse . ".php");
}

spl_autoload_register("incluirClasses");
spl_autoload_register(function ($nomeClasse) {

    if (file_exists("autoload" . DIRECTORY_SEPARATOR . $nomeClasse . ".php") === true) require_once("autoload" . DIRECTORY_SEPARATOR . $nomeClasse . ".php");
});

$carro = new DelRay();
$carro->acelerar(200);