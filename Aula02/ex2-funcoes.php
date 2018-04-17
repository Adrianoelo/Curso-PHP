<?php

//echo $numero = rand(0,10);

//Criar uma função que gere um array com numeros aleatórios de 0 a 10. Essa função vai receber como paramentros a quantidade de indices do array e retornar o array preenchido.

echo '<pre>';

function montarArray(int $indices)
{
		for ($i=0; $i < $indices; $i++) { 
		$array[] = rand(0,10);
	}
	return $array;
}

$tam = 10;
$numeros = montarArray($tam);

//Exibir todos os numeros do array separados por virgula.
foreach ($numeros as $value) {
	echo $value . ',';
}
echo '<hr>';

//O primeiro numero do array

echo $numeros[0];

echo '<hr>';
//O ultimo numero do array
echo $numeros[$tam-1];

echo '<hr>';
//os numeros pares separados por virgula

for ($i=0; $i < $tam; $i++) { 
	if ($numeros[$i] % 2 == 0) echo $numeros[$i] . ',';
}
echo '<hr>';
//OU

foreach ($numeros as $value) {
	if ($value % 2 == 0 ) 	echo $value . ',';
}

echo '<hr>';
//os numeros impares separados por virgula

for ($i=0; $i < $tam; $i++) { 
	if ($numeros[$i] % 2 != 0) echo $numeros[$i] . ',';
}

echo '<hr>';
//OU

foreach ($numeros as $value) {
	if ($value % 2 != 0 ) 	echo $value . ',';
}

echo '<hr>';
//o maior numero
$maior = $numero[0];
foreach ($numeros as $value) {
	if ($value > $maior)  {
		$maior = $value;
	}
}

echo $maior;

echo '<hr>';
//o menor numero
$menor = $numero[10];
foreach ($numeros as $value) {
	if ($value < $menor)  {
		$menor = $value;
	}
}

echo $menor;
echo '<hr>';

//array em ordem crescente


//array em ordem decrescente