<?php

$filename = "usuarios.csv";

if (file_exists($filename)) {
    $file = fopen($filename, "r"); //Para ler o arquivo csv
    $headers = explode(",", fgets($file)); //Explode(transforma num array) toda vez que achar a virgula
    $data = array();

    while ($row = fgets($file)) { //Se existir linha e ele entra no while
        $linha = array();
        $rowData = explode(",", $row);
        for ($i = 0; $i < count($headers); $i++) {
            $linha[$headers[$i]] = $rowData[$i];
        }
        array_push($data, $linha); //Adiciona no array a informação 
    }
    fclose($file); //Fecha para não deixar aberto na memória 
    echo json_encode($data);
}
