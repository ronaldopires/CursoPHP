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
$data = array();
$result = $conn->query("SELECT * FROM tb_usuarios ORDER BY userlogin"); //Para comandos sql

while ($row = $result->fetch_assoc()) {
    array_push($data, $row);
}

echo json_encode($data);