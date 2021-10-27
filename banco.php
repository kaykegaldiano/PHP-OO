<?php

require_once 'autoload.php';

use Alura\Banco\Model\Endereco;
use Alura\Banco\Model\Conta\Titular;
use Alura\Banco\Model\CPF;
use Alura\Banco\Model\Conta\Conta;

$endereco = new Endereco('Ribeirão Preto', 'Vila Virgínia', 'Julio de Mesquita', '1392');
$kayke = new Titular(new CPF('454.104.348-38'), 'Kayke Galdiano', $endereco);
$primeiraConta = new Conta($kayke);
$primeiraConta->deposita(500);
$primeiraConta->saca(300); // isso é ok
// $primeiraConta->saldo -= 300; // isso não é ok

echo $primeiraConta->recuperaNomeTitular() . PHP_EOL;
echo $primeiraConta->recuperaCpfTitular() . PHP_EOL;
echo $primeiraConta->recuperaSaldo() . PHP_EOL;

$isadora = new Titular(new CPF('698.549.548-10'), 'Isadora', $endereco);
$segundaConta = new Conta($isadora);

$outroEndereco = new Endereco('A', 'b', 'c', '1D');
$outra = new Conta(new Titular(new CPF('123.654.789-01'), 'Aakaka', $outroEndereco));

echo Conta::recuperaNumeroDeContas();
