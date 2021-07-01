<?php

class Carro
{
    private $modelo;
    private $motor;
    private $ano;

    public function getModelo()
    { //Retorna o valor 
        return $this->modelo;
    }
    public function setModelo($modelo)
    { //Muda o valor
        $this->modelo = $modelo;
    }
    public function getMotor()
    {
        return $this->motor;
    }
    public function setMotor($motor)
    {
        $this->motor = $motor;
    }
    public function getAno(): int
    { // :int faz um casting para inteiro 
        return $this->ano;
    }
    public function setAno($ano)
    {
        $this->ano = $ano;
    }

    public function exibir()
    {
        return array(
            "modelo" => $this->getModelo(),
            "motor" => $this->getMotor(),
            "ano" => $this->getAno()
        );
    }
}

$gol = new Carro();
$gol->setModelo("Gol Quadradro");
$gol->setAno("1992");
$gol->setMotor("1.0");
var_dump($gol->exibir());