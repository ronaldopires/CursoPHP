<?php

$server = "localhost";
$banco = "dbphp7";
$user = "root";
$pass = "";

$conn = new PDO("mysql:dbname=$banco;host=$server", "$user", "$pass");

$stmt = $conn->prepare("DELETE FROM tb_usuarios WHERE idusuario = :ID");

$id = 3;

$stmt->bindParam(":ID", $id);

$stmt->execute();

echo "Deletado!!";