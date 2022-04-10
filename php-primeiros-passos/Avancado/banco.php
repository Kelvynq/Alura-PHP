<?php

$contasCorrentes = [
    '123.456.789-10' => [
        'titular' => 'Vinicius',
        'saldo' => 10000
    ],
    '123.456.789-11' => [
        'titular' => 'Maria',
        'saldo' => 300
    ],
    '123.256.789-12' => [
        'titular' => 'Alberto',
        'saldo' => 100
    ]
];

if (500 > $contasCorrentes['123.456.789-11']['saldo']) {
    echo "Você não pode sacar este valor" . PHP_EOL;
} else
    $contasCorrentes['123.456.789-11']['saldo'] -= 500;

if (500 > $contasCorrentes['123.456.789-10']['saldo']) {
    echo "Você não pode sacar este valor" . PHP_EOL;
} else
    $contasCorrentes['123.456.789-10']['saldo'] -= 500;


foreach ($contasCorrentes as $cpf => $conta) {
    echo $cpf . " " . $conta['titular'] . ' ' . $conta['saldo'] . PHP_EOL;
}
;
