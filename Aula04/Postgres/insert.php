<?php

require 'conexao.php';

//var_dump($con);


$email = 'teste@teste.com';
$nome  = 'teste';
$senha = '123';

$query = "INSERT INTO usuarios(nome,email,senha) VALUES ('{$nome}','{$email}','{$senha}')";

echo $query;

echo '<br>';

$result = pg_query($con,$query);

var_dump($result);