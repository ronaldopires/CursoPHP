<?php

if (isset($_COOKIE["NOME_COOKIE"])) {
    $cookie = json_decode($_COOKIE["NOME_COOKIE"]); //Retorna um obj mas pode converter em array com parametro 1
    echo $cookie->Login;
}