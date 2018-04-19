<?php

require 'conexao.php';

//var_dump($con);


$email = 'teste@teste.com';
$nome  = 'teste';
$senha = '123';

$query = "INSERT INTO usuarios(email,senha) VALUES ('{$email}','{$senha}')";

echo $query;

echo '<br>';

$result = mysqli_query($con,$query);

var_dump($result);