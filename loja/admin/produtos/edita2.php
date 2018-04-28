<?php
	require_once('C:\Bitnami\wappstack-7.1.14-0\apache2\htdocs\loja\admin\inc\conexao.php');
	$id=$_POST['id'];
	$nome=$_POST['nome'];
	$preco=$_POST['preco'];
	$descricao=$_POST['descricao'];

	$sql = "UPDATE produtos SET nome='$nome', preco='$preco', descricao='$descricao' WHERE id='$id'";
	$altera=pg_query($conexao,$sql);

	header('Location:http://localhost/loja/admin/produtos/index.php')
?>