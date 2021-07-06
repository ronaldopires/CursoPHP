<form method="post">
    <input type="text" name="busca">
    <button type="submit">Buscar</button>
</form>

<?php

$_POST['busca'] = '<strong><a href="#">oi</a></strong><script>alert("ok")</script>';

if (isset($_POST['busca'])) echo strip_tags($_POST['busca'], "<strong><a>"); //Passa por parametros as tags permitidas

echo htmlentities($_POST['busca']); //transforma em texto
