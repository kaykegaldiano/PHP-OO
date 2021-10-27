<?php

class Pessoa
{
    protected string $nome;
    protected CPF $cpf;

    public function __construct(string $nome, CPF $cpf)
    {
        $this->validaNomeTitular($nome);
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

    public function validaNomeTitular(string $nomeTitular)
    {
        if (strlen($nomeTitular) < 5) {
            echo "Nome precisa ter pelo menos 5 caracteres";
            exit;
        }
    }
}