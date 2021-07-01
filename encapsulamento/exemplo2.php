<?php

class Pessoa
{

    public $nome = "Rasmus Lerdof"; // Todo mundo vê
    protected $idade = 48; // Classes e Classes extendidas 
    private $senha = "123456"; // Só a mesma classe

    public function verDados()
    {
        echo $this->nome . "<br>";
        echo $this->idade . "<br>";
        echo $this->senha . "<br>";
    }
}

class Programador extends Pessoa
{
    public function verDados()
    {
        echo get_class($this) . "<br>"; // mostra de qual classe está sendo executado
        echo $this->nome . "<br>";
        echo $this->idade . "<br>";
        echo $this->senha . "<br>"; // a senha continua privada não tendo acesso mesmo herdando os dados de Pessoa
    }
}

$objeto = new Programador();
//echo $objeto->nome;
//echo $objeto->senha;

echo $objeto->verDados();