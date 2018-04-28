<?php
	require_once('C:\Bitnami\wappstack-7.1.14-0\apache2\htdocs\loja\admin\inc\cabecalho.php');
	if (isset($_SESSION['nome'])) {
		$id=$_GET['id'];
		$sql="SELECT * FROM produtos WHERE id='$id'";
		$res=pg_query($conexao,$sql);
		$array=pg_fetch_array($res);
	}
?>

<div class="jumbotron">
 	<form class="form-signin" action="http://localhost/loja/admin/produtos/edita2.php" method="post">
 
    <input type="hidden" name="id" value="<?php echo $array['id']; ?>">
 
    <div class="form-label-group">
      <input type="text" step="0.010" name="nome" class="form-control" value="<?php echo $array['nome']; ?>">
      <br><br>
    </div>
 
    <div class="form-label-group">
      <input type="number" step="0.01" name="preco" class="form-control" value="<?php echo $array['preco']; ?>">
      <br><br>
    </div>
 
    <div class="form-label-group">
      <textarea name="descricao" rows="10" cols="100"><?php echo $array['descricao']; ?></textarea>
      <br><br>
    </div>
    
    <button class="btn btn-lg btn-primary btn-block" type="submit" name="botao"><font style="vertical-align: inherit;"><font style="vertical-align: inherit;">Alterar Produto</font></font></button>
    <a href="<?php echo $base_url.'produtos/index.php'; ?>" class="btn btn-secondary btn-lg btn-block">Voltar</a>
  </form>
 </div> 