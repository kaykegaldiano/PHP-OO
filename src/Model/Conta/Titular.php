<?php

namespace Alura\Banco\Model\Conta;

use Alura\Banco\Model\Pessoa;
use Alura\Banco\Model\CPF;
use Alura\Banco\Model\Endereco;

// Titular é uma Pessoa
class Titular extends Pessoa
{
    private Endereco $endereco;

    // construtor da classe
    public function __construct(CPF $cpf, string $nome, Endereco $endereco)
    {
        // chamando a construtor da classe base (Pessoa)
        parent::__construct($nome, $cpf);
        $this->endereco = $endereco;
    }

    public function getEndereco()
    {
        return $this->endereco;
    }
}