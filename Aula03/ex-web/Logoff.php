//Pagina para destruir a sessao e redirecionar para login

<?php

echo '<pre>';

session_start();
session_destroy();

header('Location: http://localhost/500/Aula03/ex-web/login.php');
