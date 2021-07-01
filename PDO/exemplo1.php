<?php

$server = "localhost";
$banco = "dbphp7";
$user = "root";
$pass = "";

$conn = new PDO("mysql:dbname=$banco;host=$server", "$user", "$pass");

$stmt = $conn->prepare("SELECT * FROM tb_usuarios ORDER BY userlogin");

$stmt->execute();
$result = $stmt->fetchAll(PDO::FETCH_ASSOC); //Fetch assoc retorna um array associativo 

foreach ($result as $row) {
    foreach ($row as $value => $key) {
        echo "" . $key . " " . $value . "<br>";
    }
}