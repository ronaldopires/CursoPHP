<?php

define("SERVIDOR", "127.0.0.1");

echo SERVIDOR;

define("BANCO_DE_DADOS",[
    '127.0.0.1',
    'root',
    'password',
    'teste',

]);
echo "<br>";
print_r(BANCO_DE_DADOS);
echo "<br>";
echo PHP_VERSION;
echo "<br>";
echo DIRECTORY_SEPARATOR;