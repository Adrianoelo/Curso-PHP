<?php

$num = readline('Digite o numero: ');

$soma = readline('Digite o soma: ');
$num += $soma;

echo "Resultado: " . $num . PHP_EOL;

$subtracao = readline("Digite a subtração: ");
$num -= $subtracao;

echo "Resultado: " . $num . PHP_EOL;

$divisao = readline("Digite a divisao: ");
$num /= $divisao;

echo "Resultado: " . $num . PHP_EOL;