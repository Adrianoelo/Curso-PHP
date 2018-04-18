<?php

session_start();

if($_SESSION["logado"] != true){

	    echo "Usuário não está logado. Direcionando para a página de login.";
    header('Location: http://localhost/500/Aula03/ex-web/login.php');

}
	Else {
		echo 'Calculadora';
	}

?>


<form action="" method="Post">
<p>1º Numero: <input type="number" name="num1" placeholder="Informe o numero 1"></p>
<p>2º Numero: <input type="number" name="num2" placeholder="Informe o numero 2"></p>
<select name="operacao">
  <option value="Soma">Soma</option>
  <option value="Subtracao">Subtração</option>
  <option value="Divisao">Divisão</option>
  <option value="Multiplicacao">Multiplicação</option>
</select> <input type="submit" value="Calcular">
</form>

<?php

echo '<pre>';

$num1 = $_POST['num1'] . PHP_EOL;
$num2 = $_POST['num2'] . PHP_EOL;
$operacao = $_POST['operacao'] . PHP_EOL;

echo '<br>';

if ($_POST['operacao'] == 'Soma'){
	echo '<h1>';
	echo 'O resultado é ' . ($num1 + $num2);
}
else if ($_POST['operacao'] == 'Subtracao'){
	echo '<h1>';
	echo 'O resultado é ' . ($num1 - $num2);
}
else if ($_POST['operacao'] == 'Divisao'){
	echo '<h1>';
	echo 'O resultado é ' .  ($num1 / $num2);
}
else if ($_POST['operacao'] == 'Multiplicacao'){
	echo '<h1>';
	echo 'O resultado é ' .  ($num1 * $num2);
}
else {
	echo 'Dados inválidos';
}

//print_r($_POST);