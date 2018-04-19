<?php

require 'conexao.php';

var_dump($con);

$id = 5;
$email = 'teste@teste.com.br';
$senha = '123';

$query = "UPDATE usuarios SET email='{$email}', senha='{$senha}' WHERE id={$id}";

echo $query;

echo '<br>';

$result = pg_query($con,$query);

If ($result) {
	echo 'OK';
} else {
	echo 'Erro ao atualizar';
}

