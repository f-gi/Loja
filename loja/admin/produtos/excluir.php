<?php
	require_once('C:\Bitnami\wappstack-7.1.14-0\apache2\htdocs\loja\admin\inc\conexao.php');
	if(isset($_SESSION['nome'])){
		$id=$_GET['id'];

		$sql="DELETE FROM produtos WHERE id='$id'";
		$res=pg_query($conexao,$sql);
		header('Location:Location:http://localhost/loja/admin/produtos/index.php');
	}else{
		echo "ERRO";
	}
?>