<?php

// Titular é uma Pessoa
class Titular extends Pessoa
{
    private Endereco $endereco;

    // construtor da classe
    public function __construct(CPF $cpf, string $nome, Endereco $endereco)
    {
        $this->cpf = $cpf;
        $this->validaNomeTitular($nome);
        $this->nome = $nome;
        $this->endereco = $endereco;
    }

    public function getEndereco()
    {
        return $this->endereco;
    }
}