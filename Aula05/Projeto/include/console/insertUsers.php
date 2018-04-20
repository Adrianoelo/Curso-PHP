<?php

$nome = readline('digite o nome do usuário: ');
$email = readline('digite seu email: ');
$senha = readline('digite a senha: ');

require '../../admin/conexao.php';

$query = "INSERT INTO usuarios(nome,email,senha) VALUES ('{$nome}','{$email}','{$senha}')";

//echo $query;

//echo '<br>';

$result = pg_query($con,$query);

If ($result) {
	echo 'Usuário incluido com sucesso' . PHP_EOL;
} else {
	echo 'Erro ao incluir' . PHP_EOL;
}

