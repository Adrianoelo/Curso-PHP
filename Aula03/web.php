<?php

echo '<pre>';

//print_r($_SERVER);

//$_ENV['dbname'] = 'aula03';
//$_ENV['dbuser'] = 'lucas';
//$_ENV['dbpass'] = '123';
//print_r($_ENV);


//print_r($_GET);
//http://localhost/500/Aula03/web.php?chave=teste&chave2=teste2&pagina=site


//$_POST['nome'] = ['adriano'];
//print_r($_POST);

//session_start();
//$_SESSION ['NOME'] = 'ADRIANO';
//$_SESSION ['EMAIL'] = 'adriano@adriano';
//print_r($_SESSION);

setcookie('busca','PHP');
print_r($_COOKIE);