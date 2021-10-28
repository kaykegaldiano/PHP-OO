<?php

use Alura\Banco\Model\Endereco;

require_once 'autoload.php';

$umEndereco = new Endereco(
    'Ribeirão Preto',
    'Vila Virgínia',
    'Rua Julio de Mesquita',
    '1392'
);

$outroEndereco = new Endereco(
    'Sampa',
    'Centro',
    'Uma rua aí',
    '50'
);

echo $umEndereco . PHP_EOL;
echo $outroEndereco;