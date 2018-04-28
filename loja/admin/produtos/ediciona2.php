<?php
	require_once ('C:\Bitnami\wappstack-7.1.14-0\apache2\htdocs\loja\admin\inc\conexao.php');
	$nome=$_POST['nome'];
	$preco=$_POST['preco'];
	$descricao=$_POST['descricao'];
	
	$sql="INSERT INTO produtos(nome,preco,descricao) VALUES ('$nome','$preco','$descricao')";
	$adiciona=pg_query($conexao,$sql);
	header('Location:http://localhost/loja/admin/produtos/index.php');
?>