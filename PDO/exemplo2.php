<?php

$server = "localhost";
$banco = "dbphp7";
$user = "root";
$pass = "";

$conn = new PDO("mysql:dbname=$banco;host=$server", "$user", "$pass");

$stmt = $conn->prepare("UPDATE tb_usuarios SET userlogin = :LOGIN, senha = :SENHA WHERE idusuario = :ID");

$login = "joão";
$senha = "123";
$id = 2;

$stmt->bindParam(":LOGIN", $login);
$stmt->bindParam(":SENHA", $senha);
$stmt->bindParam(":ID", $id);

$stmt->execute();

echo "Dados alterados!!";