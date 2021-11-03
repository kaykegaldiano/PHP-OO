<?php

require_once 'autoload.php';

// agrupando os namespaces
use Alura\Banco\Model\Conta\{ContaPoupanca, ContaCorrente, SaldoInsuficienteException, Titular};
use Alura\Banco\Model\{CPF, Endereco};

$conta = new ContaPoupanca(
    new Titular(
        new CPF('454.104.348-38'),
        'Kayke Galdiano',
        new Endereco('Ribeirão Preto', 'Vila Virgínia', 'Rua Julio de Mesquita', '1392')
    )
);

$conta->deposita(500);

try {
    $conta->saca(600);
} catch (SaldoInsuficienteException $exception) {
    echo "Você não tem saldo para realizar este saque." . PHP_EOL;
    echo $exception->getMessage() . PHP_EOL;
}

echo $conta->recuperaSaldo();