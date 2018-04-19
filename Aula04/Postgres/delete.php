<?php

require 'conexao.php';

var_dump($con);

$id = 5;

$query = "DELETE FROM usuarios WHERE id={$id}";

echo $query;

echo '<br>';

$result = pg_query($con,$query);

If ($result) {
	echo 'OK';
} else {
	echo 'Erro ao excluir';
}

