<?php
	require_once('../include/connectaBD.php');
	require_once('../include/validar.php');

	if(isset($_GET['id'])) {
		$sql = "SELECT * FROM agendamentos WHERE idagendamentos = " . $_GET['id'];

		$result = $banco->query($sql);
	}

	if(isset($_POST['btCad'])) {

		$id = $_POST['keyEvent'];
		$titulo = $_POST['txtTitulo'];
		$data = $_POST['txtData'];
		$hora = $_POST['txtHora'];
		$local = $_POST['txtLocal'];
		$end = $_POST['txtEnd'];
		$obs = $_POST['obs'];
		$con = $_POST['selConcluido'];
		$logado = $_SESSION['idLogado'];
		
		$sql = "UPDATE agendamentos SET titulo = '$titulo', data = '$data', hora = '$hora', local = '$local', endereco = '$end', obs = '$obs', concluido = '$con', users_idusers = $logado WHERE idagendamentos = $id";

		if(mysqli_query($banco, $sql))
			header("location: event.php?sucesso=Evento alterado com sucesso !!!");
		else
			header("location: event.php?error=Erro ao alterado Evento");
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
			<section id="acesso">
				<h2>Alterar Eventos</h2>
				<form action="#" method="post"name="formCad" id="formCad">
					<?php if($row = mysqli_fetch_assoc($result)) {?>
						<input type="hidden" name="keyEvent" id="keyEvent" value="<?= $row['idagendamentos']?>">
						<input type="text" name="txtTitulo" id="txtTitulo" placeholder="Titulo" value="<?= $row['titulo']?>">
						<input type="date" name="txtData" id="txtData" placeholder="Data" value="<?= $row['data']?>">
						<input type="text" name="txtHora" id="txtHora" placeholder="Hora" value="<?= $row['hora']?>">
						<input type="text" name="txtLocal" id="txtLocal" placeholder="Local" value="<?= $row['local']?>">
						<input type="text" name="txtEnd" id="txtEnd" placeholder="Endereço" value="<?= $row['endereco']?>">
						<textarea name="obs" id="obs" cols="30" rows="10" placeholder="Observações"><?= $row['obs']?></textarea>
						<select name="selConcluido" id="selConcluido">
							<?php if($row['concluido'] == 0) { ?>
								<option value="0" selected>Não</option>
								<option value="1">Sim</option>
							<?php } else { ?>
								<option value="0">Não</option>
								<option value="1" selected>Sim</option>
							<?php } ?>
						</select>
					<?php } ?>
					<input type="submit" name="btCad" id="btCad" value="Alterar">
				</form>
			</section>

		</article>
	</main>
	<footer>Desenvolvido por seres supremos &reg; &copy;</footer>
</body>

</html>