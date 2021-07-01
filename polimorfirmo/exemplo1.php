<?php

abstract class Animal
{
    public function falar()
    {
        return "Som";
    }
    public function mover()
    {
        return "Andar";
    }
}

class Cachorro extends Animal
{
    public function falar()
    {
        return "Late";
    }
}
class Gato extends Animal
{
    public function falar()
    {
        return "Mia";
    }
}
class Passaro extends Animal
{
    public function falar()
    {
        return "Pia";
    }
    public function mover()
    {
        return "Voa e " . parent::mover();
    }
}


$pluto = new Cachorro();

echo $pluto->falar() . "<br>";
echo $pluto->mover() . "<br>";
echo "----------------<br>";

$pikachu = new Gato();
echo $pikachu->falar() . "<br>";
echo "----------------<br>";

$loro = new Passaro();
echo $loro->falar() . "<br>";
echo $loro->mover() . "<br>";