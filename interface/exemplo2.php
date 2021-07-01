<?php

interface Veiculo
{
    public function acelerar($velocidade);
    public function frenar($velocidade);
    public function trocarMarcha($marcha);
}
// as classes que herdarem da interface tem que ter seus métodos 
class Automovel implements Veiculo
{
    public function acelerar($velocidade)
    {
        echo "O veículo acelerou até " . $velocidade . " km/h";
    }
    public function frenar($velocidade)
    {
        echo "O veículo frenou até " . $velocidade . " km/h";
    }
    public function trocarMarcha($marcha)
    {
        echo "O veículo trocou marcha " . $marcha;
    }
}

class DelRay extends Automovel
{
    public function empurrar()
    {
    }
}

$carro = new Automovel();
$carro->acelerar(200);