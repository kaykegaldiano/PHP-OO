<?php

function funcao1()
{
    echo 'Entrei na função 1' . PHP_EOL;
    try {
        funcao2();
    } catch(RuntimeException | DivisionByZeroError $e) {
        echo 'Erro: ' . $e->getMessage() . PHP_EOL;
        echo 'Linha ' . $e->getLine() . PHP_EOL;
        echo $e->getTraceAsString() . PHP_EOL;
    }
    echo 'Saindo da função 1' . PHP_EOL;
}

function funcao2()
{
    echo 'Entrei na função 2' . PHP_EOL;

    throw new RuntimeException('Essa é a mensagem da exceção');
    
    echo 'Saindo da função 2' . PHP_EOL;
}

echo 'Iniciando o programa principal' . PHP_EOL;
funcao1();
echo 'Finalizando o programa principal' . PHP_EOL;