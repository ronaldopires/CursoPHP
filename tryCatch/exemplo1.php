<?php


try {
    throw new Exception("Ocorreu um erro.", 400); //O código do erro pode ser documentado pelo programador como uma lsita de erros Ex: 400 ao 500 erro de usuários
} catch (Exception $e) {

    echo json_encode(array(
        "message" => $e->getMessage(),
        "link" => $e->getLine(),
        "file" => $e->getFile(),
        "code" => $e->getCode()
    ));
}