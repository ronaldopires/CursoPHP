<?php

$link = "https://www.google.com/images/branding/googlelogo/1x/googlelogo_color_272x92dp.png";

$content = file_get_contents($link);
$parse = parse_url($link);
$basename = (basename($parse["path"]));
$file = fopen($basename, "w+"); //Gera o nome do arquivo

fwrite($file, $content); //Faz uma cópia do arquivo
fclose($file);
?>

<img src="<?= $basename ?>" />