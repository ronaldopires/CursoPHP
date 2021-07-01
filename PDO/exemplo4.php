<?php

$server = "localhost";
$banco = "dbphp7";
$user = "root";
$pass = "";

$conn = new PDO("mysql:dbname=$banco;host=$server", "$user", "$pass");

$conn->beginTransaction(); //Abriu uma transação

$stmt = $conn->prepare("DELETE FROM tb_usuarios WHERE idusuario = ?");

$id = 4;

$stmt->execute(array($id));
//$conn->rollBack(); //cancela a transação
$conn->commit(); // executa a transação 
echo "Dados deletados!!";