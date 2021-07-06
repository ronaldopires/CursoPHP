<?php

class Documento
{
    private $numero;

    public function getNumero()
    {
        return $this->numero;
    }
    public function setNumero($numero)
    {
        $this->numero = $numero;
    }
}
//A classe CPF herda de Documento 
class CPF extends Documento
{
    public function validar()
    {
        $numeroCPF = $this->getNumero(); //Para acessar o número da classe pai é necessário usar o get direto pela variável número não é possível
        return true;
    }
}

$doc = new CPF();
$doc->setNumero("111222333-44");
var_dump($doc->validar());
echo "<br>";
echo $doc->getNumero();
