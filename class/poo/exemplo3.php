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
        $resultado = Documento::validaCPF($numero); // :: para acessar métodos estáticos
        if ($resultado == false) {
            throw new Exception("CPF informado não é válido!", 1);
        }
        $this->numero = $numero;
    }

    public static function validaCPF($cpf): bool
    {
        if (empty($cpf)) return false;

        // Extrai somente os números
        $cpf = preg_replace('/[^0-9]/is', '', $cpf);

        // Verifica se foi informado todos os digitos corretamente
        if (strlen($cpf) != 11) {
            return false;
        }

        // Verifica se foi informada uma sequência de digitos repetidos. Ex: 111.111.111-11
        if (preg_match('/(\d)\1{10}/', $cpf)) {
            return false;
        }

        // Faz o calculo para validar o CPF
        for ($t = 9; $t < 11; $t++) {
            for ($d = 0, $c = 0; $c < $t; $c++) {
                $d += $cpf[$c] * (($t + 1) - $c);
            }
            $d = ((10 * $d) % 11) % 10;
            if ($cpf[$c] != $d) {
                return false;
            }
        }
        return true;
    }
}

$cpf = new Documento();
$cpf->setNumero("32165498712");
var_dump($cpf->getNumero());

//var_dump(Documento::validaCPF("32165498712")); // acessando metodo sem a estância 