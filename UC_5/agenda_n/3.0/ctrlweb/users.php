<?php
	require_once('../include/connectaBD.php');
	require_once('../include/validar.php');

	if(isset($_GET['sucesso']) || isset($_GET['error']))
			header("refresh:3; users.php");

	$sql = "SELECT * FROM users";
	$result = mysqli_query($banco, $sql);
	
?>
<!doctype html>
<html lang="pt-br">

	<head>
		<meta charset="utf-8">
		<title>PokeAgenda3.0 - AnDaNilo - Controle</title>
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

				<h2>Listando Usuarios</h2>
				<h3><a href="usersAdd.php">Cadastrar novos Usuários</a></h3>

				<section id="listar">
					<?php while($row = mysqli_fetch_array($result)) {?>
						<div class="list-item">
							<div class="listNome"><?= $row['nome']?></div>
							<div class="listLogin"><?= $row['login']?></div>
							<div class="up btn"><a href="usersUp.php?id=<?= $row['idusers'] ?>">Editar</a></div>
							<div class="del btn"><a href="usersDel.php?id=<?= $row['idusers'] ?>">Excluir</a></div>
						</div>
					<?php }?>
				</section>
			</article>
		</main>
		<footer>Desenvolvido por seres supremos &reg; &copy;</footer>
	</body>

</html>