<?php

$idade=17;

echo "Você só pode entrar se tiver a partir de 18 anos" . PHP_EOL;
if ($idade >= 18) {
    echo "Você tem $idade anos." . PHP_EOL;
    echo "Pode entrar" . PHP_EOL;
}
echo "Você só tem $idade anos. Você não pode entrar." . PHP_EOL;

$idade = 19;
$nome = 'Vinicius';
if ($idade >= 18 and $nome == 'Vinicius') {
    echo "Você tem $idade anos." . PHP_EOL;
    echo "Pode entrar" . PHP_EOL;
}


$idade = 21;
$numeroDePessoas = 1;

echo "Você só pode entrar se tiver a partir de 18 anos ou ";
echo "a partir de 16 anos acompanhado" . PHP_EOL;

if ($idade >= 18) {
    echo "Você tem $idade anos." . PHP_EOL;
    echo "Pode entrar";
} else {
    echo "Você só tem $idade anos. Você não pode entrar";
}

echo PHP_EOL;
echo "Adeus!" . PHP_EOL;