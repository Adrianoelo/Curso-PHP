<?php

require 'conexao.php';

$query = "SELECT * FROM usuarios";

//echo $query;

echo '<pre>';

$result = pg_query($con,$query);

$dados = pg_fetch_all($result);

//print_r($dados);

foreach ($dados as $user) {
	echo $user['email'] . ' - ' . $user['email'] . '<br>';
}

?>

<form action="inicial.php" method="Post">
<input type="submit" value="Sair">
</form>
