<?php

use Alura\Banco\Modelo\Conta\{ContaPoupaca, ContaCorrente, Titular};
use Alura\Banco\Modelo\{CPF, Endereco};

require_once 'autoload.php';

$conta = new ContaCorrente(
    new Titular(
        new CPF('123.456.789-10'),
        'Vinicius Dias',
        new Endereco('Petropolis', 'bairro Teste', 'Rua lá', '37')
    )
);

//$conta->transferir(100);
$conta->depositar(500);
$conta->sacar(100);
echo $conta->recuperarSaldo() . PHP_EOL;