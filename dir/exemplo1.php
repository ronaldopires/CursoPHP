<?php

$name = "image";

if (!is_dir($name)) { //verifica se já existe o diretório
    mkdir($name); // cria 
    echo "Diretório $name criado com sucesso!!";
} else {
    //rmdir($name);
    echo "O diretório $name foi removido!!";
}