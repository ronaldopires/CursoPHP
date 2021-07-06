<?php

$cep = "08040740";
$link = "https://viacep.com.br/ws/$cep/json/";
$ch = curl_init($link);

curl_setopt($ch, CURLOPT_RETURNTRANSFER, 1); //1 Define se quer ter o retorno de dados
curl_setopt($ch, CURLOPT_SSL_VERIFYPEER, 0); //0 Define verificação de SSL como falso

$response = curl_exec($ch);
curl_close($ch); //Encerra a conexão

$data = json_decode($response, true);

print_r($data);