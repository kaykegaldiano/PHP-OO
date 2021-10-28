<?php

require_once 'autoload.php';

use Alura\Banco\Model\CPF;
use Alura\Banco\Model\Funcionario\{Desenvolvedor, Gerente, Diretor, EditorVideo};
use Alura\Banco\Model\Funcionario\Funcionario;
use Alura\Banco\Service\ControladorDeBonificacoes;

$umFuncionario = new Desenvolvedor(
    'Kayke Galdiano',
    new CPF('454.104.348-38'),
    3000.00
);

$umFuncionario->sobeDeNivel();

$umaFuncionaria = new Gerente(
    'Isadora Silva',
    new CPF('453.321.123-83'),
    6000.00
);

$umDiretor = new Diretor(
    'Ana Paula',
    new CPF('123.951.789-11'),
    9000.00
);

$umEditor = new EditorVideo(
    'Paulo',
    new CPF('456.987.231-11'),
    3500
);

$controlador = new ControladorDeBonificacoes();
$controlador->adicionaBonificacaoDe($umFuncionario);
$controlador->adicionaBonificacaoDe($umaFuncionaria);
$controlador->adicionaBonificacaoDe($umDiretor);
$controlador->adicionaBonificacaoDe($umEditor);

echo $controlador->getTotalBonificacoes();