<?php

echo '<pre>';

$nomes = ['Adriano','Eloana','Gabi','Nicole'];
print_r($nomes);
echo '<hr>';

foreach ($nomes as $key => $value) {
	echo $key . ' - ' . $value . PHP_EOL;
}
echo '<hr>';

//Foreach com array associativo

$pessoa = ['nome' => 'Adriano', 'idade' => 34, 'profissao' => 'Analista'];
print_r($pessoa);
echo '<hr>';
foreach ($pessoa as $key => $value) {
	echo $key . ' - ' . $value . PHP_EOL;
}

//Foreach com array multidimensional
echo '<hr>';
$pessoas[] = $pessoa;
print_r($pessoas);
echo '<hr>';
echo $pessoas[0]['nome'] . PHP_EOL;
echo $pessoas[0]['idade'] . PHP_EOL;

echo '<hr>';

foreach ($pessoas as $key => $value) {
	echo $key . ' - ' . $value . PHP_EOL;
}
