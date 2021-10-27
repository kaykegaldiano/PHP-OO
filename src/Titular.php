<?php

class Titular
{
    private CPF $cpf;
    private string $nome;

    // construtor da classe
    public function __construct(CPF $cpf, string $nome)
    {
        $this->cpf = $cpf;
        $this->validaNomeTitular($nome);
        $this->nome = $nome;
    }

    // getter do cpf
    public function getCpf(): string
    {
        return $this->cpf->getNumeroCpf();
    }

    // getter do nome
    public function getNome(): string
    {
        return $this->nome;
    }

    private function validaNomeTitular(string $nomeTitular)
    {
        if (strlen($nomeTitular) < 5) {
            echo "Nome precisa ter pelo menos 5 caracteres";
            exit;
        }
    }
}