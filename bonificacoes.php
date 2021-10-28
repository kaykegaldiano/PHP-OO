<?php

require_once 'autoload.php';

use Alura\Banco\Model\CPF;
use Alura\Banco\Model\Funcionario;
use Alura\Banco\Service\ControladorDeBonificacoes;

$umFuncionario = new Funcionario(
    'Kayke Galdiano',
    new CPF('454.104.348-38'),
    'Desenvolder Web',
    3000.00
);

$umaFuncionaria = new Funcionario(
    'Isadora Silva',
    new CPF('453.321.123-83'),
    'Fotógrafa',
    6000.00
);

$controlador = new ControladorDeBonificacoes();
$controlador->adicionaBonificacaoDe($umFuncionario);
$controlador->adicionaBonificacaoDe($umaFuncionaria);

echo $controlador->getTotalBonificacoes();