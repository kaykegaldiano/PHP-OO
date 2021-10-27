<?php

require_once 'src/Conta.php';

$primeiraConta = new Conta();
$primeiraConta->deposita(500);
$primeiraConta->saca(300); // isso é ok
// $primeiraConta->saldo -= 300; // isso não é ok
$primeiraConta->defineCpfTitular('454.104.348-38');
$primeiraConta->defineNomeTitular('Kayke');

echo $primeiraConta->recuperaSaldo();
echo $primeiraConta->recuperaCpfTitular();
echo $primeiraConta->recuperaNomeTitular();