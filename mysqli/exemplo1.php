<?php
//Possíveis Erros
//HY000/2002 - php_network_getaddresses: getaddrinfo failed: Este host não é conhecido.
//HY000/1045 - Access denied for user 'roots'@'localhost' (using password: NO)
//HY000/1045 - Access denied for user 'root'@'localhost' (using password: YES)
//HY000/1049 - Unknown database 'ddbphp7'

//Conecta no banco
$conn = new mysqli("localhost", "root", "", "dbphp7");

//Caso tenha erro exibe na tela
if ($conn->connect_error) {
    echo "Error " . $conn->connect_error;
    exit;
}
$stmt = $conn->prepare("INSERT INTO tb_usuarios (userlogin, senha) VALUES (?,?)"); //é necessário passar os valores por parametros

$stmt->bind_param("ss", $login, $pass); //Armazeno em variáveis

$login = "user";
$pass = "123456";

$stmt->execute();