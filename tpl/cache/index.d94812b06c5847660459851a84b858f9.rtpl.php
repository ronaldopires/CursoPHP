<?php if(!class_exists('Rain\Tpl')){exit;}?><!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <h1>Página de template tpl</h1>
    <p>teste com o Rain/TPL</p>

    <h2>Versão do PHP <?php echo htmlspecialchars( $version, ENT_COMPAT, 'UTF-8', FALSE ); ?></h2>
    <p><?php echo htmlspecialchars( $name, ENT_COMPAT, 'UTF-8', FALSE ); ?></p>
    <h3><?php echo htmlspecialchars( $week["1"], ENT_COMPAT, 'UTF-8', FALSE ); ?></h3>
</body>
</html>