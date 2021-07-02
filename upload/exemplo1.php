<!DOCTYPE html>
<html lang="pt-br">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Upload</title>
</head>

<body>
    <form method="POST" enctype="multipart/form-data">
        <input type="file" name="fileUpload">
        <button type="submit">Enviar</button>
    </form>
</body>

</html>

<?php

if ($_SERVER["REQUEST_METHOD"] == "POST") {

    $file = $_FILES["fileUpload"]; //Armazena o arquino na variável
    var_dump($file);
    if ($file["error"]) throw new Exception("Error: " . $file["error"] . "<br>"); //Se existir erro ele mostra 

    $dirUploads = "uploads"; //Variável com o nome da pasta

    if (!is_dir($dirUploads)) mkdir($dirUploads); //Se não existir a pasta ele cria 

    if (move_uploaded_file($file["tmp_name"], $dirUploads . DIRECTORY_SEPARATOR . $file["name"])) { //Comando para mover fotos move_uploaded_file(arquivo, destino)
        echo "Upload realizado com sucesso";
    } else {
        throw new Exception("Não foi possível fazer o upload");
    }
}
