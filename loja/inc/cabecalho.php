<?php
	require_once('inc/conexao.php');
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
        <a class="btn btn-sm btn-primary" href="<?php echo 'http://localhost/loja/admin/index.php'; ?>">Admin</a>
        <?php
      if(isset($_SESSION['admin'])){  // O QUE ESSE IF FAZ?
        	echo '<a class="btn btn-sm btn-inverse" href="'.$base_url.'logout.php">Logout</a>';
        }
        ?>
	</div>
</nav>
<main role="main" class="container">