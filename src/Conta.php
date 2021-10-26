<?php

class Conta
{
    private string $cpfTitular;
    private string $nomeTitular;
    private float $saldo = 0;

    public function sacar(float $valorASacar): void
    {
        if ($valorASacar > $this->saldo) {
            echo "Saldo insuficiente!\n";
            return;
        }
        $this->saldo -= $valorASacar;
        echo "R$ $valorASacar sacados com sucesso!\n";
    }

    public function depositar(float $valorADepositar): void
    {
        if ($valorADepositar < 0) {
            echo "Valor do depósito precisa ser positivo";
            return;
        }
        $this->saldo += $valorADepositar;
        echo "R$ $valorADepositar depositados com sucesso!\n";
    }

    public function transferir(float $valorATransferir, Conta $contaDestino): void
    {
        if ($valorATransferir > $this->saldo) {
            echo "Saldo indisponível";
            return;
        }
        $this->sacar($valorATransferir);
        $contaDestino->depositar($valorATransferir);
    }
}