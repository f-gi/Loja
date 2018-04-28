<?php
ini_set('display_errors',1);
ini_set('display_startup_erros',1);
error_reporting(E_ALL);
require_once('C:\Bitnami\wappstack-7.1.14-0\apache2\htdocs\loja\admin\inc\cabecalho.php'); 

//require_once $base_path . '../inc/cabecalho.php';

$sql = 'SELECT id, nome, preco FROM produtos';
$resultado = pg_query($conexao, $sql);
$resultado_array = pg_fetch_all($resultado);

?>
<nav aria-label="breadcrumb">
  <ol class="breadcrumb">
    <li class="breadcrumb-item"><a href="<?php echo $base_url; ?>">Admin</a></li>
    <li class="breadcrumb-item active" aria-current="page">Produtos</li>
  </ol>
</nav>
<h2>Produtos</h2>
<a class="btn btn-primary" href="http://localhost/loja/admin/produtos/adiciona.php">Adicionar</a>
<table class="table">
	<thead>
		<tr>
		<th scope="col">id</th>
		<th scope="col">Nome</th>
		<th scope="col">Valor</th>
		<th scope="col">Operações</th>
		</tr>
	</thead>
	<tbody>
	<?php
	foreach($resultado_array as $produto){
		$html = '<tr>
		<td>'.$produto['id'].'</td>
		<td>'.$produto['nome'].'</td>
		<td>'.$produto['preco'].'</td>
		<td>
			<a class="btn btn-info" href="'.$base_url.'produto.php?codigo='.$produto['id'].'" target="_blank">
				Visualizar</a>
			<a class="btn btn-success" href="edita.php?id='.$produto['id'].'">
				Editar</a>
			<a class="btn btn-danger"href="excluir.php?id='.$produto['id'].'">
				Excluir</a>
		</td>
		</tr>';
		echo $html;
	}
	?>
	</tbody>
</table>
<?php
require_once('C:/Bitnami/wappstack-7.1.14-0/apache2/htdocs/loja/admin/inc/rodape.php');