<?php

require_once("vendor/autoload.php");

$app = new \Slim\Slim();

$app->get('/', function () {
    echo "Home Page";
});

$app->get('/pedidos', function () {
    echo "Página de Pedidos";
});

$app->get('/carrinho', function () {
    echo "Página de Compras";
});

$app->run();
