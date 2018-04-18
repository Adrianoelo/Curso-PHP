<?php

session_start();

echo 'Calculadora IMC';

?>


<form action="" method="Post">
<p>Peso <input type="number" onchange="setTwoNumberDecimal" min="0" max="200" step="0.01" name="peso" placeholder="Informe seu peso"></p>
<p>Altura: <input type="number" onchange="setTwoNumberDecimal" min="0" max="3" step="0.01" name="altura" placeholder="Informe sua altura"></p>
</select> <input type="submit" value="Calcular">
</form>

<?php

echo '<pre>';

$IMC = $_POST['peso'] / ($_POST['altura'] * $_POST['altura']);

echo '<h1>';

echo 'O resultado é ' . round($IMC,2) . ' - ';

switch (true) {
	case $IMC<17:
		echo 'Muito abaixo do peso';
		break;
	case ($IMC>17 and $IMC<18.49):
		echo 'Abaixo do peso';
		break;
	case ($IMC>18.5 and $IMC<24.99):
		echo 'Peso Normal';
		break;
	case ($IMC>25 and $IMC<29.99):
		echo 'Acima do Peso';
		break;
	case ($IMC>30 and $IMC<34.99):
		echo 'Obesidade I';
		break;
	case ($IMC>35 and $IMC<39.99):
		echo 'Obesidade II';
		break;
	case ($IMC>40):
		echo 'Obesidade Severa';
		break;
	default:
		echo 'Invalido';
		break;
}

