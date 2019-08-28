<?php
	require_once('../include/connectaBD.php');
	require_once('../include/validar.php');

	if(isset($_GET['sucesso']) || isset($_GET['error']))
		header("refresh:3; admin.php");
?>
<!doctype html>
	<html lang="pt-br">

	<head>
		<meta charset="utf-8">
		<title>PokeAgenda3.0 - AnDaNilo - Controle</title>

		
		<link href="https://fonts.googleapis.com/css?family=Roboto+Condensed:300,400i,700&display=swap" rel="stylesheet">
		<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/animate.css/3.7.2/animate.min.css">
		<link rel="stylesheet" href="../css/folha.css" type="text/css">
		<link rel="shortcut icon" type="image/x-icon" href="../image/favicon.ico">
	</head>

	<body>
		<header>
			<div id="logo"><img src="../image/top_key.png" alt="Logo PokeAgenda"> Paínel de controle</div>
			<div id="search">
				<form action="#" method="get" name="formBusca" id="formBusca">
					<input type="text" name="txtBusca" id="txtBusca" placeholder="Busca">
					<input type="submit" name="btSerach" id="btSearch" value="Buscar">
				</form>
			</div>
		</header>
		<nav>
			<ul>
				<li><a href="admin.php">Inicio</a></li>
				<li><a href="contatos.php">Contatos</a></li>
				<li><a href="users.php">Usuários</a></li>
				<li><a href="event.php">Eventos</a></li>
				<li><a href="sair.php">Sair</a></li>
			</ul>
		</nav>
		<main>
			<article>
				<?php if(isset($_GET['error'])) {?>
					<div class="error">
						<p><?= $_GET['error']?></p>
					</div>
				<?php }?>

				<?php if(isset($_GET['sucesso'])) {?>
					<div class="sucesso">
						<p><?= $_GET['sucesso']?></p>
					</div>
				<?php }?>

				<h1>DASHBOARD</h1>
				<section id="dashboard">
					<div class="cxDash"><a href="users.php">Usuários</a></div>
					<div class="cxDash"><a href="contatos.php">Contatos</a></div>
					<div class="cxDash"><a href="event.php">Eventos</a></div>
				</section>
			</article>
		</main>
		<footer>Desenvolvido por seres supremos &reg; &copy;</footer>
	</body>

</html>