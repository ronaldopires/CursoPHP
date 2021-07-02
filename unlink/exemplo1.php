<?php

$file = fopen("teste.txt", "w+");

fclose($file);

unlink("teste.txt"); //Remove o arquivo Tomar cuidado com esse comando 

echo "Arquivo removido com sucesso";
