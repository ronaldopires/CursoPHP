<?php

$images = scandir("image");

$data = array();

foreach ($images as $img) {
    if (!in_array($img, array(".", ".."))) {
        $filename = "image" . DIRECTORY_SEPARATOR . $img;

        $info = pathinfo($filename);
        $info['size'] = filesize($filename);
        $info['modified'] = date("d/m/Y H:i:s", filemtime($filename));
        $info['url'] = "http://localhost/cursophp/dir/" . str_replace("\\", "/", $filename);

        array_push($data, $info);
    } //Se não existir . ou .. nesse array ele é true
}

print_r($data);