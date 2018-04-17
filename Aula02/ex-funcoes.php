<?php

//Criar uma função que receba um numero e retorne se ele é par ou impar
function par_impar($num1)
{
	if ($num1 % 2 ==0) echo 'par' ;
	else echo 'impar';
}

par_impar(19);
echo '<hr>';

//Criar uma função que receba uma idade e retorne se ele é maior de idade ou não
function deMaior ($idade)
{
	if ($idade > 18) return 'de maior';
	else return 'de menor';
}

echo deMaior(17);
echo '<hr>';

//Criar uma função que receba dois numeros e retorno o maior
function maior ($num1,$num2)
{
	if ($num1 > $num2) return $num1;
		else return $num2;
}

echo 'O numero maior é '. maior(15,10);
echo '<hr>';
//Criar uma função que receba uma idade e um temHabilitacao (bool) e retorno se ele pode dirigir.

function podeDirigir($num1,bool $msg)
{
	if ($num >=18 and $msg = true) return 'pode';
	else return 'não pode';
}

echo podeDirigir(18,true);