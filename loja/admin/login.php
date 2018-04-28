<?php
require_once('inc/cabecalho.php');

$email = $_POST['email'];
$senha = $_POST['senha'];

$sql = 'SELECT * FROM usuarios WHERE email = \''.$email.'\' AND senha = \''.$senha.'\' AND admin = 1';
$res = pg_query($conexao, $sql);

if($res != false){ //se conectou
	if(pg_num_rows($res) != 0){ //se tiver algo no banco
		$res = pg_fetch_assoc($res); // ????

		$_SESSION['nome'] = $res['nome'];
		$_SESSION['admin'] = true;
		header('Location: http://localhost/loja/admin/index.php');
	}
}

?>