<?php

use Alura\Banco\Model\Conta\ContaCorrente;
use Alura\Banco\Model\Conta\Titular;
use Alura\Banco\Model\CPF;
use Alura\Banco\Model\Endereco;

require_once 'autoload.php';

$contaCorrente = new ContaCorrente(
    new Titular(
        new CPF('454.104.348-38'),
        'Kayke Galdiano',
        new Endereco(
            'Ribeirão Preto',
            'Vila Virginia',
            'Rua Julio de Mesquita',
            '1392'
        )
    )
);

try {
    $contaCorrente->deposita(-100);
} catch (InvalidArgumentException $e) {
    echo $e->getMessage();
}

    // try {
    //     $kayke = new Titular(
    //         new CPF('454.104.348-38'),
    //         'Ana Banana',
    //         new Endereco(
    //             'Ribeirão',
    //             'Vila',
    //             'Rua',
    //             '1234'
    //         )
    //     );
    // } catch (InvalidArgumentException | LengthException $e) {
    //     echo $e->getMessage();
    // }