<?php

echo '<pre>';

//array vai chamar pessoa com nome, idade e email
//exibir na tela o conteudo de cada informação seguindo o exemplo
//Meu nome  é:
//Tenho x anos
//Meu email é

$pessoa['Nome'] = 'Adriano Rodrigues';
$pessoa['Idade'] = '33';
$pessoa['Email'] = 'adriano.rodrigues@amazul.gov.br';

echo 'Meu nome é ' . $pessoa['Nome'] . PHP_EOL;
echo 'Tenho ' . $pessoa['Idade'] . ' anos' . PHP_EOL;
echo 'Meu email é ' . $pessoa['Email'] . PHP_EOL;

'<br>';

//array de pessoas onde teremos  3 pessoas
//cada pessoa possui Nome, Idade e email
//exibir na tela o conteudo de cada informação seguindo o exemplo
//Meu nome  é:
//Tenho x anos
//Meu email é


$pessoas = [
	[
	 	'nome' => 'Adriano',
	 	'idade' => 33,
	 	'email' => 'adriano@adriano.com'
	],
	[
	 	'nome' => 'Eloana',
	 	'idade' => 31,
	 	'email' => 'eloana@eloana.com'
	 ],
	 [
	 	'nome' => 'Gabi',
	 	'idade' => 4,
	 	'email' => 'gabi@gabi.com'
	 ]
  ];

print_r($pessoas);

"<hr>";

foreach ($pessoas as $pessoaArray) {
	echo 'Meu nome é ' . $pessoaArray['nome'] . PHP_EOL;
	echo 'Tenho ' . $pessoaArray['idade'] . ' anos' . PHP_EOL;
	echo 'Meu email é ' . $pessoaArray['email'] . PHP_EOL;
	echo '<hr>';
}
