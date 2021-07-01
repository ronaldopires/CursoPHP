<?php

$log = date("Y-m-d H:i:s") . "\r\n"; //adiciona em uma nova linha

//$file = fopen("log.txt", "w+"); // zera e adiciona novo
//$file = fopen("log.txt", "a+"); // vai adicionando
$file = fopen("log.txt", "a+"); // vai adicionando com tab e quebra de linha

fwrite($file, $log);

fclose($file);

echo "Arquivo de log criado com sucesso!!";