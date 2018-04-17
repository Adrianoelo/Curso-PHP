<?php


//função anonima

echo '<pre>';

$nomes = ['Lucas','João','Marcos'];

$encontrado = array_filter($nomes, function($nome){
	if ($nome == 'Lucas') {
		return $nome;
	}
});

var_dump($encontrado);

$msg ='4linux';

$var = function($text) use ($msg) {
	echo 'Olá '
}