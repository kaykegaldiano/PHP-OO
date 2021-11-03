<?php

namespace Alura\Banco\Model\Conta;

use InvalidArgumentException;

abstract class Conta
{
    private Titular $titular;
    private float $saldo;
    private static int $numeroDeContas = 0;

    // construtor da classe
    public function __construct(Titular $titular)
    {
        $this->titular = $titular;
        $this->saldo = 0;

        // incrementa a cada vez que uma conta é criada
        self::$numeroDeContas++;
    }

    // destrutor da classe
    public function __destruct()
    {
        self::$numeroDeContas--;
    }

    public function saca(float $valorASacar): void
    {
        $tarifaSaque = $valorASacar * $this->percentualTarifa();
        $valorSaque = $valorASacar + $tarifaSaque;
        if ($valorSaque > $this->saldo) {
            throw new SaldoInsuficienteException($valorSaque, $this->saldo);
        }
        $this->saldo -= $valorSaque;
        echo "R$ $valorASacar sacados com sucesso!\nTarifa de saque: R$ $tarifaSaque\n";
    }

    public function deposita(float $valorADepositar): void
    {
        if ($valorADepositar < 0) {
            throw new InvalidArgumentException("Valor a depositar precisa ser positivo, safadinho.");
        }
        $this->saldo += $valorADepositar;
        echo "R$ $valorADepositar depositados com sucesso!\n";
    }

    // getter do saldo
    public function recuperaSaldo(): float
    {
        return $this->saldo;
    }

    // getter do nome
    public function recuperaNomeTitular(): string
    {
        return $this->titular->getNome();
    }

    public function recuperaCpfTitular()
    {
        return $this->titular->getCpf();
    }

    // metodo estatico para recuperar o número de contas criadas
    public static function recuperaNumeroDeContas(): int
    {
        return self::$numeroDeContas;
    }

    abstract protected function percentualTarifa(): float;
}
