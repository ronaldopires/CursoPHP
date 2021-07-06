<?php

$dados = array(
    "Login" => "Naldo",
    "Senha" => rand(0, 10)
);

setcookie("NOME_COOKIE", json_encode($dados), time() + 3600);

echo "cookie criado";