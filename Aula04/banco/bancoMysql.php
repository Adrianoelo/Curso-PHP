<?php 

function conectar()
{
	return mysqli_connect('localhost','adriano','@da4linux','Aula03');	
}

/*
 * $tabela = usuarios
 * $dados = ['email' => 'lucas@gmail.com', 'senha' => '123']
 */
function inserir(string $tabela, array $dados)
{
	foreach ($dados as $campo => $valor) {
		$campos[]  = $campo;
		$valores[] = "'{$valor}'";
	}

	$campos = implode(',', $campos);
	$valores = implode(',', $valores);

	$query = "INSERT INTO {$tabela} ({$campos}) VALUES ({$valores})";

	$con = conectar();
	mysqli_query($con,$query);
}
/*
 * $tabela = usuarios
 * $dados = ['email' => 'lucas@gmail.com', 'senha' => '123']
 * $onde = id=1
 */
function editar(string $tabela, array $dados, string $onde)
{
	foreach ($dados as $campo => $valor) {
		$sets[] = "{$campo}='{$valor}'"; 
	}

	$sets = implode(',', $sets);

	$query = "UPDATE {$tabela} SET {$sets} WHERE {$onde}";

	$con = conectar();
	mysqli_query($con,$query);
}

/*
 * $tabela = usuarios
 * $onde = id=1
 */
function deletar(string $tabela, string $onde)
{
	$query = "DELETE FROM {$tabela} WHERE {$onde}";

	$con = conectar();
	mysqli_query($con,$query);
}

/*
 * $tabela = usuarios
 * $campos = 'email,senha' || *
 * $onde = id=1
 */
function buscar(string $tabela, string $campos = '*', string $onde)
{
	$query = "SELECT {$campos} FROM {$tabela} WHERE {$onde}";
	$con = conecta();
	$result = $pg_query($con,$query);
	return mysqli_fetch_assoc($result);
}

/*
 * $tabela = usuarios
 * $campos = 'email,senha' || *
 * $onde = id=1
 * $filtro = email like '%lucas%'
 * $ordem = id
 * $limite = 3
 */
function buscarTodos(
	string $tabela, 
	string $campos = '*', 
	string $onde = null, 
	string $filtro = null, 
	string $ordem = null,
	int $limite = null)
{
	$query = "SELECT {$campos} FROM {$tabela}";

	if ($onde) {
		$query .= " WHERE {$onde}";
	}

	if ($filtro && $onde) {
		$query .= " AND {$filtro}";
	}

	if ($ordem) {
		$query .= " ORDER BY {$ordem}";
	}

	if ($limite) {
		$query .= " LIMIT {$limite}";
	}

	$result = mysqli_query($con,$query);
    return mysqli_fetch_all($result,MYSQLI_ASSOC);
}