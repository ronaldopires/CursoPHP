<?php

class Endereco
{
    private $logradouro;
    private $numero;
    private $cidade;

    public function __construct($logradouro, $numero, $cidade)
    {
        $this->logradouro = $logradouro;
        $this->numero = $numero;
        $this->cidade = $cidade;
    }

    public function __destruct()
    {
        //var_dump("DESTRUIR");
    }
    public function __toString() // exibe como string 
    {
        return $this->logradouro . ", " . $this->numero . " - " . $this->cidade;
    }
}

$novoEndereco = new Endereco("Rua das Nemésias", "422", "São Paulo");

//var_dump($novoEndereco);
echo "<br>";
//unset($novoEndereco);
echo "<br>";
echo $novoEndereco;