<?php

require 'conexao.php';

//var_dump($con);

$email = $_POST['email'];

$query = "DELETE FROM usuarios WHERE email='{$email}'";

//echo $query;

echo '<h1>';

$result = pg_query($con,$query);

If ($result) {
	echo 'Usuario excluido com sucesso !';
} else {
	echo 'Erro ao excluir';
}

?>

<form action="inicial.php" method="Post">
<input type="submit" value="Sair">
</form>
