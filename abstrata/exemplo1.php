<?php

interface Veiculo
{
    public function acelerar($velocidade);
    public function frenar($velocidade);
    public function trocarMarcha($marcha);
}
// as classes que herdarem da interface tem que ter seus métodos 
abstract class Automovel implements Veiculo //classes abstratas não podem ser instanciadas diretamente 
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

class DelRay extends Automovel //é preciso criar uma nova classe que va instanciar a classe abstrata
{
    public function empurrar()
    {
    }
}

$carro = new DelRay(); //aqui não pode instanciar automóvel é necessário instanciar a classe que instanciou automóvel
$carro->acelerar(200);