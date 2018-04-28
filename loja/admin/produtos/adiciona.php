<?php
	require_once('C:\Bitnami\wappstack-7.1.14-0\apache2\htdocs\loja\admin\inc\cabecalho.php'); 
?>
 	<div class="jumbotron">
 		<form class="form-signin" action="http://localhost/loja/admin/produtos/ediciona2.php" method="post">   <!-- manda pra pg de adc as coisas do form por POST -->
 			<div class="form-group">
				<label for="nome">Nome do produto</label>
				<input type="text" class="form-control" name="nome" id="nome">
			</div>
			<div class="form-group">
				<label for="email">Preço</label>
				<input type="numeric" class="form-control" name="preco" id="preco">
			</div>
			<div class="form-group">
				<label for="descricao">Descrição</label>
				<input type="text" class="form-control" name="descricao" id="descricao">
			</div>
			<button type="submit" class="btn btn-primary">Adicionar</button>
			<a href="http://localhost/loja/admin/produtos/index.php" class="btn btn-secondary">Voltar</a>
		</form>
 	</div> 