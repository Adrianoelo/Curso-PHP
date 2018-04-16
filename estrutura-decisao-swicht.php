<?php

echo '-----------' . PHP_EOL;
echo '-0 - Soma 0' . PHP_EOL;
echo '-1 - Subt-1' . PHP_EOL;
echo '-2 - Divi-2' . PHP_EOL;
echo '-3 - Mult-3' . PHP_EOL;

$opcao = readline('Escolha uma opção: ');

switch ($opcao) {
	case '0':
		echo 'Soma : ' . (2+2) . PHP_EOL;
		break;
	case '1':
		echo 'Subt : ' . (2-2) . PHP_EOL;
		break;
	case '2':
		echo 'Divi : ' . (2/2) . PHP_EOL;
		break;
	case '3':
		echo 'Mult : ' . (2*2) . PHP_EOL;
		break;
	default:
		echo 'Opção Invalida' . PHP_EOL;
		break;
}

echo "<hr>";
//------------------------------

$num = 10;

switch (true) {
	case ($num > 10 && $num < 20) . PHP_EOL:
		echo 'Número ' . $num;
		break;
	case ($num < 10 || $num > 20) . PHP_EOL:
		echo 'Número ' . $num;
		break;
	default:
		echo 'Erro' . PHP_EOL;
		break;
}