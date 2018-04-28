<!-- ta vindo pro index.php mas não entra em nada lá em baixo -->
<!-- só entra se apagar tudo a partir do else -->
<?php
require_once('inc/conexao.php');
require_once('inc/cabecalho.php');
if(isset($_SESSION['nome'])){ //se ta logado
?>
	<ul>
		<li><a href="<?php echo 'http://localhost/loja/admin/produtos/index.php';?>">Produtos</a> </li> <!-- manda pra pg de produtos -->
	</ul>
<?php
}else{ //se não está logado mostra form pra logar
?>
 	<div class="jumbotron">
 		<form  action="login.php" method="post">   <!-- manda pra pg de login as coisas do form por POST -->
 			<div class="form-group">
				<label for="email">E-mail</label>
				<input type="email" class="form-control" name="email" id="email">
			</div>
			<div class="form-group">
				<label for="email">Senha</label>
				<input type="password" class="form-control" name="senha" id="senha">
			</div>
			<button type="submit" class="btn btn-primary">Login</button>
			<a href="<?php echo 'http://localhost/loja/index.php'; ?>" class="btn btn-secondary">Voltar</a>
		</form>
 	</div> 
<?php
}
	require_once ('inc/rodape.php');
	?>
