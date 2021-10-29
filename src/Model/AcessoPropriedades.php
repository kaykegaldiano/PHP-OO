<?php

namespace Alura\Banco\Model;

trait AcessoPropriedades
{
    public function __get(string $nomeAtributo): string
    {
        $metodo = 'get' . ucfirst($nomeAtributo);
        return $this->$metodo();
    }
}