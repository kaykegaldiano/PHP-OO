<?php

namespace Alura\Banco\Model;

// Funcionário é uma Pessoa
class Funcionario extends Pessoa
{
    private string $cargo;

    public function __construct(string $nome, CPF $cpf, string $cargo)
    {
        // chamando a construtor da classe base (Pessoa)
        parent::__construct($nome, $cpf);
        $this->cargo = $cargo;
    }

    public function getCargo(): string
    {
        return $this->cargo;
    }

    public function setNome(string $nome): void
    {
        $this->validaNomeTitular($nome);
        $this->nome = $nome;
    }
}