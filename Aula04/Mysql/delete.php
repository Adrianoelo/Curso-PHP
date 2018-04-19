<?php

require 'conexao.php';

//var_dump($con);


$id = 4;

$query = "DELETE FROM usuarios WHERE id={$id}";
echo $query;

echo '<br>';

$result = mysqli_query($con,$query);

var_dump($result);

If ($result) {
	echo 'OK';
} else {
	echo 'Erro ao atualizar';
}

