<?php

//função simples
function negrito()
{
	echo '<strong>Negrito</strong>' . PHP_EOL;
}

function soma()
{
	echo  2 + 2 . PHP_EOL;
}

negrito();
echo '<hr>';
soma();
echo '<hr>';

//função com parametros obrigatórios

function negrito2(string $msg)
{
	echo '<strong>'.$msg.'</strong>' . PHP_EOL;
}

function soma2($num1,$num2)
{
	echo  $num1 + $num2;
}

negrito2('Adriano');
echo '<hr>';
soma2(1,2);
echo '<hr>';
soma2(2010,1250);
echo '<hr>';

//função com parametros opcionais

function negrito3(string $msg = 'Sem informação')
{
	echo '<strong>'.$msg.'</strong>' . PHP_EOL;
}
negrito3('Adriano');
echo '<hr>';
negrito3();
echo '<hr>';

//função para exibir apenas resultados (return)

function soma3($num1,$num2)
{
	return  $num1 + $num2;
}

echo soma3(1,2);
echo '<hr>';
var_dump(soma3(2,3));
echo '<hr>';

//função com variavel de escopo global

$numero =2;

function soma4($num1,$num2)
{
	global $numero;
	$resultado = $numero * ($num1 + $num2);
	return $resultado;
}

echo soma4(2,2);
echo '<hr>';

//função

function adicionar(&$fruta)
{
	++$fruta;
}

adicionar($laranjas);
echo $laranjas;
echo '<hr>';
$laranjas =5;
echo $laranjas;
adicionar($laranjas);
echo '<hr>';
echo $laranjas;
