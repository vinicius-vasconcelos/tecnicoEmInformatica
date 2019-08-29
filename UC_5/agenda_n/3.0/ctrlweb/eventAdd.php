<?php
	require_once('../include/connectaBD.php');
	require_once('../include/validar.php');


	if(isset($_GET['sucesso']) || isset($_GET['error']))
		header("refresh:3; admin.php");

	if(isset($_POST['btCad'])) {

		$titulo = $_POST['txtTitulo'];
		$data = $_POST['txtData'];
		$hora = $_POST['txtHora'];
		$local = $_POST['txtLocal'];
		$end = $_POST['txtEnd'];
		$obs = $_POST['obs'];
		$con = $_POST['selConcluido'];
		$logado = $_SESSION['idLogado'];
		
		$sql = "INSERT INTO agendamentos VALUES (null, '$titulo', '$data', '$hora', '$local', '$end', '$obs', '$con', $logado)";

		if(mysqli_query($banco, $sql))
			header("location: event.php?sucesso=Evento cadastrado com sucesso !!!");
		else
			header("location: event.php?error=Erro ao cadastrar Evento");
	}
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

			<section id="acesso">
				<h2>Cadastrar Eventos</h2>
				<form action="#" method="post"name="formCad" id="formCad">
					<input type="text" name="txtTitulo" id="txtTitulo" placeholder="Titulo">
					<input type="date" name="txtData" id="txtData" placeholder="Data">
					<input type="text" name="txtHora" id="txtHora" placeholder="Hora">
					<input type="text" name="txtLocal" id="txtLocal" placeholder="Local">
					<input type="text" name="txtEnd" id="txtEnd" placeholder="Endereço">
					<textarea name="obs" id="obs" cols="30" rows="10" placeholder="Observações"></textarea>
					<select name="selConcluido" id="selConcluido">
						<option value="0">Não</option>
						<option value="1">Sim</option>
					</select>
					<input type="submit" name="btCad" id="btCad" value="Cadastrar">
				</form>
			</section>
		</article>
	</main>
	<footer>Desenvolvido por seres supremos &reg; &copy;</footer>
</body>

</html>