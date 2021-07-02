<?php

$filename = "foto-1.jpg";

$base64 = base64_encode(file_get_contents($filename));

$fileinfo = new finfo(FILEINFO_MIME_TYPE); //constante que pede o tipo mime do arquivo

$mimetype = $fileinfo->file($filename);

$base64encode = "data:" . $mimetype . ";base64," . $base64;
?>
<a href="<?= $base64encode ?>" target="_blank">Link da imagem</a>
<img src="<?= $base64encode ?>">