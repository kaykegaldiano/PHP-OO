<?php

namespace Alura\Banco\Model;

use LengthException;

abstract class Pessoa
{
    use AcessoPropriedades;

    protected string $nome;
    private CPF $cpf;

    public function __construct(string $nome, CPF $cpf)
    {
        $this->validaNome($nome);
        $this->nome = $nome;
        $this->cpf = $cpf;
    }

    # Get the value of nome
    public function getNome(): string
    {
        return $this->nome;
    }

    # Get the value of cpf 
    public function getCpf(): string
    {
        return $this->cpf->getNumeroCpf();
    }

    final protected function validaNome(string $nomeTitular)
    {
        if (strlen($nomeTitular) < 5) {
            throw new LengthException('Nome precisa ter pelo menos 5 caracteres.');
        }
    }
}