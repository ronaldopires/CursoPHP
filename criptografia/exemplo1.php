<?php

$pass = "M1nh@-Senh@2021";

$senha = sha1($pass); //É mais segura que o MD5.

echo $senha;


//openssl_encrypt

define('SECRET_IV', pack('a16', 'senha')); //Converte em 16bits
define('SECRET', pack('a16', 'senha'));

$data = [
    'senha' => 'M1nh@-Senh@2021'
];

$openssl = openssl_encrypt(
    json_encode($data), //precisa ser string
    'AES-128-CBC', //Constante passada em string pois não tem constante pré definida
    SECRET, //Chave
    0, //Lista de opções 0 só encripta sem retornar nada além
    SECRET_IV
);
echo "<br>";
echo $openssl;

//Decrypt

$string = openssl_decrypt($openssl, 'AES-128-CBC', SECRET, 0, SECRET_IV);

echo '<pre>';
var_dump(json_decode($string, true));
echo '</pre>';
