<?php

require 'conexao.php';

//var_dump($con);


$id = 4;
$email = 'teste@teste.com.br';
$senha = '123456';

$query = "UPDATE usuarios SET email='{$email}', senha='{$senha}' WHERE id={$id}";
echo $query;

echo '<br>';

$result = mysqli_query($con,$query);

var_dump($result);

If ($result) {
	echo 'OK';
} else {
	echo 'Erro ao atualizar';
}

