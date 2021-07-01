<?php

namespace Cliente;

class Cadastro extends \Cadastro // Extende da Classe cadastro da raiz
{

    public function registrarVenda()
    {
        echo "Venda Concluída!!! Obrigado " . $this->getNome();
    }
}