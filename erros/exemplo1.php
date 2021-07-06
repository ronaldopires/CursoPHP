<?php

function error_handler($code, $message, $file, $line)
{
    echo json_encode(array(
        "code" => $code,
        "message" => $message,
        "line" => $file,
        "file" => $line
    ));
}

set_error_handler("error_handler");

echo $total = 100 / 0;