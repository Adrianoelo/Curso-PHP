//Pagina para login de usuario, após logar, redirecionar para aplicaçaõ
//usuario = admin
//senha = admin

<form action="login.php" method="Post">
<p>Usuário: <input type="text" name="usuario" required></p>
<p>Senha:   <input type="password" name="senha"></p>
<input type="submit" value="Logar">
</form>

<?php

if (!empty($_POST)) {
 	if ($_POST['usuario'] = 'admin' and $_POST['senha'] =='admin') {
 		session_start();
		$_SESSION['nome'] = 'admin';
		$_SESSION['email'] = 'admin';
		$_SESSION['logado'] = true;
		header('Location: aplicacao.php');

	}
}


