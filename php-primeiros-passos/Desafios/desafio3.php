<?php

$Peso = 74;
$Altura = 1.75;

$IMC = ($Peso / $Altura ** 2);
echo "IMC: $IMC" . PHP_EOL;

if ($IMC < 18.5) {
    echo "Você está abaixo do nível recomendado" . PHP_EOL;
} else if ($IMC > 18.5 && $IMC < 24.9) {
    echo "Você está no nível recomendado" . PHP_EOL;
} else {
    echo "Você está acima do nível recomendado" . PHP_EOL;
}
