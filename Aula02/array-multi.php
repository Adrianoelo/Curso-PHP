<?php

echo '<pre>';

$temperaturas = [
	//'chave'=> 'valor'
	'2018' => [
			'Janeiro' => 30,
			'Fevereiro' => 29,
			'Março' => 28,
			],

	'2017' => [
			'Janeiro' => 28,
			'Fevereiro' => 29,
			'Março' => 26,
			]

];

print_r($temperaturas);

echo '<hr>';
echo $temperaturas['2018']['Janeiro'];