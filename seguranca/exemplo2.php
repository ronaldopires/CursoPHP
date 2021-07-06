<?php

$id = (isset($_GET["id"])) ? $_GET["id"] : 3;

if (!is_numeric($id) || strlen($id) > 5) exit(block());

$conn = mysqli_connect("localhost", "root", "", "dbphp7");

$query = "SELECT * FROM tb_usuarios WHERE idusuario = $id";

$exec = mysqli_query($conn, $query);

while ($result = mysqli_fetch_object($exec)) {
    echo "<pre>";
    var_dump($result);
    echo "</pre>";
}

function block()
{
    echo "VOCÊ FOI BLOQUEADO!!";
}
