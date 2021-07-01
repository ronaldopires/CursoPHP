<?php

class Pessoa
{
    public $nome; //Atributo

    public function falar()
    { //Método
        return "Meu nome é " . $this->nome;
    }
}

$ronaldo = new Pessoa();
$ronaldo->nome = "Ronaldo Pires";
echo $ronaldo->falar();