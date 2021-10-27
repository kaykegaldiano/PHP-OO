<?php

require_once 'src/Conta.php';
require_once 'src/Titular.php';
require_once 'src/CPF.php';

$kayke = new Titular(new CPF('454.104.348-38'), 'Kayke Galdiano');
$primeiraConta = new Conta($kayke);
$primeiraConta->deposita(500);
$primeiraConta->saca(300); // isso é ok
// $primeiraConta->saldo -= 300; // isso não é ok

echo $primeiraConta->recuperaNomeTitular() . PHP_EOL;
echo $primeiraConta->recuperaCpfTitular() . PHP_EOL;
echo $primeiraConta->recuperaSaldo() . PHP_EOL;

$isadora = new Titular(new CPF('698.549.548-10'), 'Isadora');
$segundaConta = new Conta($isadora);

// $outra = new Titular(new CPF('123'), 'Aakaka');

echo Conta::recuperaNumeroDeContas();
