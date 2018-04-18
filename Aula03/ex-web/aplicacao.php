//aplicação, acesso permitido apenas para usuario logado.

<?php

echo '<pre>';

session_start();

if($_SESSION["logado"] == true){

	echo "Acesso permitido.";
}

Else {
    echo "Usuário não está logado. Direcionando para a página de login.";
    header('Location: http://localhost/500/Aula03/ex-web/login.php');

}
?>


<form action="Logoff.php" method="Post">
<input type="submit" value="Sair">
</form>