<?php

require 'conexao.php';

$id =1;

$query = "SELECT * FROM usuarios WHERE id={$id}";

echo $query;

echo '<br>';

$result = pg_query($con,$query);

$dados = pg_fetch_all($result);

//print_r($dados);

foreach ($dados as $user) {
	echo $user['email'] . '<br>';
}


