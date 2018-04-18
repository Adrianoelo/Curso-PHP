<a href="index.php"></a>

<?php

switch (true) {
	case $_GET['nome'] == 'Adriano':
		echo 'Olá Adriano';
		break;
	case $_GET['nome'] == 'Hamilton':
		echo 'Olá juruna';
		break;
	case $_GET['nome'] == 'Ivanildo':
		echo 'Vamos são paulo, vamos são paulo, vamos passar batom';
		break;
	default:
		echo 'Invalido';
		break;
}

//if $_GET['nome'] = 'Adriano' {
	//echo 'Olá Adriano';
//}
