<?php

use Alura\Banco\Modelo\Endereco;

require_once 'autoload.php';

$umEndereco = new Endereco(
    'Campina Grande',
    'Monte Castelo',
    'Almeida',
    '745'
);
$outroEndereco = new Endereco(
    'Natal',
    'Prata',
    'Campo Sales',
    '326'
);


echo $umEndereco . PHP_EOL;

$umEndereco->cidade = 'São Paulo';
$umEndereco->bairro = 'Vila Do Zoo';
$umEndereco->rua = 'Limão verde';
$umEndereco->numero = '12B';

echo $umEndereco . PHP_EOL;