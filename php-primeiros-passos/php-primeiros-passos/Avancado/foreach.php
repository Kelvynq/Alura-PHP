<?php


$conta1 = [
    'titular' => 'Vinicius',
    'saldo' => 1000
];

$conta2 = [
    'titular' => 'Maria',
    'saldo' => 10000
];

$conta3 = [
    'titular' => 'Alberto',
    'saldo' => 300
];

$contasCorrentes = [$conta1, $conta2, $conta3];

$contasCorrentes = [
    $conta1,
    $conta2,
    $conta3
];

foreach ($contasCorrentes as $conta) {
    echo $conta['titular'] . PHP_EOL;
}

$contasCorrentes = [
    12345678910 => $conta1,
    12345678911 =>$conta2,
    12325678912 =>$conta3
];

foreach ($contasCorrentes as $conta) {
    echo $conta['titular'] . PHP_EOL;
}

$contasCorrentes = [
    12345678910 => $conta1,
    12345678911 =>$conta2,
    12325678912 =>$conta3
];

foreach ($contasCorrentes as $cpf => $conta) {
    echo $cpf . PHP_EOL;
}


$contasCorrentes = [
    12345678910 => [
        'titular' => 'Vinicius',
        'saldo' => 1000
    ],
    12345678911 => [
        'titular' => 'Maria',
        'saldo' => 10000
    ],
    12325678912 => [
        'titular' => 'Alberto',
        'saldo' => 300
    ]
];

foreach ($contasCorrentes as $cpf => $conta) {
    echo $conta['titular'] . PHP_EOL;
}