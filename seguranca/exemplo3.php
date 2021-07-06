<?php

$pasta = "arquivos";

if (!is_dir($pasta)) criarPasta();

function criarPasta()
{
    $permissao = "0775";

    /**
     * Permissões
     * 0 - sem permissão
     * 1 - execução
     * 2 - gravação 
     * 3 - executar/gravar
     * 4 - leitura
     * 5 - leitura/execução
     * 6 - leitura/gravação
     * 7 - leitura/execução e gravação || PERMISSÃO TOTAL
     * 
     **/

    global $pasta;
    mkdir($pasta, $permissao);

    echo "Diretório criado com sucesso!!";
}
