<?php

class Conta
{
    private string $cpfTitular;
    private string $nomeTitular;
    private float $saldo;
    private static int $numeroDeContas = 0;

    public function __construct(string $cpfTitular, string $nomeTitular)
    {
        $this->cpfTitular = $cpfTitular;
        $this->validaNomeTitular($nomeTitular);
        $this->nomeTitular = $nomeTitular;
        $this->saldo = 0;

        // incrementa a cada vez que uma conta é criada
        self::$numeroDeContas++;
    }

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

    // getter do cpf
    public function recuperaCpfTitular(): string
    {
        return $this->cpfTitular;
    }

    // getter do nome
    public function recuperaNomeTitular(): string
    {
        return $this->nomeTitular;
    }

    private function validaNomeTitular(string $nomeTitular)
    {
        if (strlen($nomeTitular) < 5) {
            echo "Nome precisa ter pelo menos 5 caracteres";
            exit;
        }
    }

    // metodo estatico para recuperar o número de contas criadas
    public static function recuperaNumeroDeContas(): int
    {
        return self::$numeroDeContas;
    }
}
