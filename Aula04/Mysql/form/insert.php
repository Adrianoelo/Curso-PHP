<?php

require 'conexao.php';

//var_dump($con);


$email = $_POST['email'];
$nome  = $_POST['nome'];
$senha = $_POST['senha'];

$query = "INSERT INTO usuarios(email,senha) VALUES ('{$email}','{$senha}')";

echo '<h1>';
echo '<br>';

$result = mysqli_query($con,$query);

If ($result) {
	echo 'Dados inseridos com sucesso !';
} else {
	echo 'Erro ao inserir';
}

?>

<form action="form.php" method="Post">
<input type="submit" value="Sair">
</form>
