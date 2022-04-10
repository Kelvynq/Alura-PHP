<?php

require 'autoload.php';

use Alura\Banco\Modelo\Conta\Titular;
use Alura\Banco\Modelo\Endereco;
use Alura\Banco\Modelo\CPF;
use Alura\Banco\Modelo\Conta\Conta;


$endereco = new Endereco('Campina Grande','Monte Castelo', 'Chile','120');
$luan = new Titular(new CPF('125.476.189-10'), 'Luan Dias', $endereco);
$primeiraConta = new Conta($luan);
$primeiraConta->depositar(500);
$primeiraConta->sacar(300);

echo $primeiraConta->recuperarNomeTitular() . PHP_EOL;
echo $primeiraConta->recuperarCpfTitular() . PHP_EOL;
echo $primeiraConta->recuperarSaldo() . PHP_EOL;


$aline = new Titular(new CPF('334.857.186-12'), 'Aline Morais', $endereco);
$segundaConta = new Conta($aline);
$segundaConta->depositar(1000);


echo $segundaConta->recuperarNomeTitular() . PHP_EOL;
echo $segundaConta->recuperarCpfTitular() . PHP_EOL;
echo $segundaConta->recuperarSaldo() . PHP_EOL;

$endereco2 = new Endereco('Rio de Janeiro', 'Copacabana','Santos', '32B');
$fernando = new Titular(new CPF('274.531.295-13'), 'Joao Fernando', $endereco2);
$terceiraConta = new Conta($fernando);

echo $terceiraConta->recuperarNomeTitular() . PHP_EOL;
echo $terceiraConta->recuperarCpfTitular() . PHP_EOL;
echo $terceiraConta->recuperarSaldo() . PHP_EOL;

echo "Número de contas: " . Conta::recuperarNumeroDeContas() . PHP_EOL;

//unset($segundaConta);