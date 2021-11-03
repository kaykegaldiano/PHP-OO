<?php

namespace Alura\Banco\Model;

use InvalidArgumentException;

final class CPF
{
    private $numero;

    public function __construct($numero)
    {
        $this->validaCPF($numero);
    }

    public function getNumeroCpf(): string
    {
        return $this->numero;
    }

    private function validaCPF($numero)
    {
        $numero = filter_var($numero, FILTER_VALIDATE_REGEXP, [
            'options' => [
                'regexp' => '/^[0-9]{3}\.[0-9]{3}\.[0-9]{3}\-[0-9]{2}$/'
            ]
        ]);

        if ($numero === false) {
            throw new InvalidArgumentException('CPF inválido.');
        }
        $this->numero = $numero;
    }
}