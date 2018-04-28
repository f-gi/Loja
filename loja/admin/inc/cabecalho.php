<?php
	require_once('conexao.php');
	?>
<!DOCTYPE html>
<html>
<head>
<meta charset="UTF-8">
<title>Minha Lojinha</title>
<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/css/bootstrap.min.css">
<link rel="stylesheet" href="https://getbootstrap.com/docs/4.1/examples/navbar-fixed/navbar-top-fixed.css">
</head>

<body>
<nav class="navbar navbar-expand-md navbar-dark fixed-top bg-dark">
	<div class="collapse navbar-collapse" id="navbarCollapse">
        <a class="btn btn-sm btn-primary" href="<?php echo 'http://localhost/loja/index.php'; ?>">Loja</a>
        <?php
        if(isset($_SESSION['admin'])){ //se tiver logado
        	echo '<a class="btn btn-sm btn-inverse" href="/loja/admin/logout.php">Logout</a>'; //mostra botão pra deslogar
        }
        ?>
	</div>
</nav>
<main role="main" class="container">