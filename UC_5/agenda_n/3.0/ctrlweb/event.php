<?php 
	require_once('../include/connectaBD.php');
	require_once('../include/validar.php');

	if(isset($_GET['sucesso']) || isset($_GET['error']))
		header("refresh:3; event.php");
	if(isset($_GET['op']))
		header("refresh:1; event.php");

	$sql = "SELECT * FROM agendamentos ORDER BY data DESC";

	$result = $banco->query($sql);


	if(isset($_GET['op'])) {
		$sql = "UPDATE agendamentos SET concluido = '" . $_GET['concluido'] . "' WHERE idagendamentos = " . $_GET['id'];
		$banco->query($sql);
	}
?>

<!doctype html>
<html lang="pt-br">

<head>
	<meta charset="utf-8">
	<title>PokeAgenda3.0 - AnDaNilo - Controle</title>
	<link rel="stylesheet" href="../css/folha.css" type="text/css">
	<link rel="shortcut icon" type="image/x-icon" href="../image/favicon.ico">

	<link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.8.2/css/all.css"
    integrity="sha384-oS3vJWv+0UjzBfQzYUhtDYW+Pj2yciDJxpsK1OYPAYjqT085Qq/1cq5FLXAZQ7Ay" crossorigin="anonymous">
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

			<h2>Listando Eventos</h2>
			<h3><a href="eventAdd.php">Cadastrar Evento</a></h3>

			<div id="listar">
				<?php while($row = mysqli_fetch_array($result)) {?>
					<div class="list-item">
						<div class="listEvent"> <p class="text-bold">Título:</p> <?= $row['titulo'] ?></div>
						<div class="listEvent"> <p class="text-bold">Local:</p> <?= $row['local'] ?></div>
						<div class="listEvent"> <p class="text-bold">Obs:</p> <?= $row['obs'] ?></div>
						<?php if($row['concluido'] == 0) {?>
							<div class="listEvent inacabado"><a href="event.php?op=con&id=<?= $row['idagendamentos'] ?>&concluido=1"><i class="far fa-check-square"></i></a></div>
						<?php } else { ?>
							<div class="listEvent concluido"><a href="event.php?op=con&id=<?= $row['idagendamentos'] ?>&concluido=0"><i class="fas fa-check-double"></i></a></div>
						<?php } ?>
						<div class="up btn" style="font-size:14px;"><a href="eventUp.php">Editar</a></div>
						<div class="del btn" style="font-size:14px;"><a href="eventDel.php?id=<?= $row['idagendamentos'] ?>">Excluir</a></div>
					</div>
				<?php } ?>
			</div>
		</article>
	</main>
	<footer>Desenvolvido por seres supremos &reg; &copy;</footer>
</body>

</html>