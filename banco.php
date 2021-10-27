<?php

require_once 'src/Conta.php';

$primeiraConta = new Conta('454.104.348-38', 'Kayke Galdiano');
$primeiraConta->deposita(500);
$primeiraConta->saca(300); // isso é ok
// $primeiraConta->saldo -= 300; // isso não é ok

echo $primeiraConta->recuperaNomeTitular() . PHP_EOL;
echo $primeiraConta->recuperaCpfTitular() . PHP_EOL;
echo $primeiraConta->recuperaSaldo() . PHP_EOL;

$segundaConta = new Conta('698.549.548-10', 'Patricia');

echo Conta::recuperaNumeroDeContas();
