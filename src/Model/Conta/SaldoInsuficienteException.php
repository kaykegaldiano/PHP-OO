<?php

namespace Alura\Banco\Model\Conta;

class SaldoInsuficienteException extends \DomainException
{
    public function __construct(float $valorSaque, float $saldoAtual)
    {
        $mensagem = "Você tentou sacar $valorSaque, mas tem apenas $saldoAtual em sua conta.";
        parent::__construct($mensagem);
    }
}