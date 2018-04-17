<?php

echo '<pre>';

$array[] = 'valor1';
$array[] = 'valor2';
$array[] = 10;

//outras formas de se fazer o array
//$array = array('valor1','valor2',10)
//$array = ['valor1','valor2',10]
//em todas elas, caso queira adicionar um array ao final é só utilizar o primeiro método ('$array[]')

//echo $array; não funciona

print_r($array);
var_dump($array);

echo '<hr>';
echo $array[0] . '<br>';
echo $array[1] . '<br>';
echo $array[2] . '<br>';

echo '<hr>';
for ($i=0; $i <=2; $i++) {
	echo $array[$i] . '<br>';
}

echo '<hr>';
$i = 2;
echo $i . '<br>';
echo $array[$i];

echo '<hr>';

//array associativo

$arrayAssoc['nome'] = 'Adriano Rodrigues';
$arrayAssoc['idade'] = 34;

print_r($arrayAssoc);
echo '<hr>';
echo 'Nome: ' . $arrayAssoc['nome'];
echo '<hr>';
echo 'Idade: ' . $arrayAssoc['idade'];

echo '<hr>';