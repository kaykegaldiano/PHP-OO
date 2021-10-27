<?php

class Conta
{
    private string $cpfTitular;
    private string $nomeTitular;
    private float $saldo = 0;

    public function saca(float $valorASacar): void
    {
        if ($valorASacar > $this->saldo) {
            echo "Saldo insuficiente!\n";
            return;
        }
        $this->saldo -= $valorASacar;
        echo "R$ $valorASacar sacados com sucesso!\n";
    }

    public function deposita(float $valorADepositar): void
    {
        if ($valorADepositar < 0) {
            echo "Valor do depósito precisa ser positivo";
            return;
        }
        $this->saldo += $valorADepositar;
        echo "R$ $valorADepositar depositados com sucesso!\n";
    }

    public function transfere(float $valorATransferir, Conta $contaDestino): void
    {
        if ($valorATransferir > $this->saldo) {
            echo "Saldo indisponível";
            return;
        }
        $this->saca($valorATransferir);
        $contaDestino->deposita($valorATransferir);
    }

    // getter do saldo
    public function recuperaSaldo(): float
    {
        return $this->saldo;
    }

    // setter do cpf
    public function defineCpfTitular(string $cpf): void
    {
        $this->cpfTitular = $cpf;
    }

    // getter do cpf
    public function recuperaCpfTitular(): string
    {
        return $this->cpfTitular;
    }

    // setter do nome
    public function defineNomeTitular(string $nome): void
    {
        $this->nomeTitular = $nome;
    }

    // getter do nome
    public function recuperaNomeTitular(): string
    {
        return $this->nomeTitular;
    }
}
