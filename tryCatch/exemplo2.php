<?php

function trataNome($nome)
{
    if (!$nome) throw new Exception("Nenhum nome foi informado", 1);
    echo ucfirst($nome) . "<br>";
}

try { //tenta executar o código
    trataNome("Ronaldo");
    trataNome(""); //Irá dar erro
} catch (\Throwable $th) { //Se der erro trata
    echo $th->getMessage();
} finally { //Sempre executa o finally
    echo "<br>Executou o try!!";
}