<?php 
	require_once('include/connectaBD.php');

	$result = $banco->query("SELECT * FROM users ORDER BY nome ");
?>

<!doctype html>
	<html lang="pt-br">
		<head>
		<meta charset="utf-8">
		<title>PokeAgenda2.0 - AnDaNilo</title>
		<link rel="stylesheet" href="css/folha.css" type="text/css">
		<link rel="shortcut icon" type="image/x-icon" href="image/favicon.ico">
		<meta name="keywords" content="PokeAgenda">
		<meta name="autor" content="seu nome aqui">
		<meta name="description" content="Agenda de contatos e possíveis clientes">
	</head>
	<body>
		<header>
			<div id="logo"><img src="image/logoTwo.png" alt="Logo PokeAgenda"></div>
			<div id="search">
				<form action="#" method="get" name="formBusca" id="formBusca">
				<input type="text" name="txtBusca" id="txtBusca" placeholder="Digite parte de um nome">
				<input type="submit" name="btSerach" id="btSearch" value="Buscar">
				</form>
			</div>
		</header>
		<nav>
			<ul>
				<li><a href="index.php">Contatos</a></li>
				<li><a href="usersList.php">Usuários</a></li>
				<li><a href="javascript:history.back();">Voltar</a></li>
			</ul>
		</nav>
		<main>

			<?php if(isset($_GET['error'])) {?>
				<div class="error">
					<h2><?= $_GET['error']?></h2>
				</div>
			<?php }?>

			<?php if(isset($_GET['sucesso'])) {?>
				<div class="sucesso">
					<h2><?= $_GET['sucesso']?></h2>
				</div>
			<?php }?>

			<article>
				<h1>Agenda de clientes/contato</h1>
				<h2>Listando Usuarios</h2>
				<h3><a href="usersAdd.php">Cadastrar novos Usuários</a></h3>
				<div class="list">

					<?php while($row = mysqli_fetch_array($result)) {?>
						<div class="list-item">
							<div class="listNome"><?= $row['nome']?></div>
							<div class="listCargo"><?= $row['cargo']?></div>
							
							<div class="buttons">
								<div class="up"><a href="usersUp.php?nome=<?= $row['nome']?>&tel=<?= $row['cargo']?>">Editar</a></div>
								<div class="del"><a href="usersDel.php?id=<?= $row['idusers']?>">Excluir</a></div>
							</div>
						</div>
					<?php }?>
				</div>
			</article>
		</main>
		<footer>Desenvolvido por seres supremos &reg; &copy;</footer>
	</body>
</html>