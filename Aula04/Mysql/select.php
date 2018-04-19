<?php

require 'conexao.php';

$id =1;

$query = "SELECT * FROM usuarios";

echo $query;

echo '<br>';

$result = mysqli_query($con,$query);

//print_r($result);

$dados = mysqli_fetch_all($result,MYSQLI_ASSOC);

//print_r($dados);

foreach ($dados as $user) {
	echo $user['email'] . '<br>';
}

//////////////////////////////////////////////////////////////////

$query2 = "SELECT * FROM usuarios WHERE id={$id}";

echo $query2;

echo '<br>';

$result2 = mysqli_query($con,$query2);
$dados2 = mysqli_fetch_all($result2,MYSQLI_ASSOC);

foreach ($dados2 as $user) {
	echo $user['email'] . '<br>';
}
