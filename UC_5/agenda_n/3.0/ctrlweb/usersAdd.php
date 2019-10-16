<?php
	require_once('../include/connectaBD.php');
	require_once('../include/validar.php');

	if (isset($_GET['sucesso']) || isset($_GET['error']))
		header("refresh:3; event.php");
	if (isset($_GET['op']))
		header("refresh:1; event.php");

	if(isset($_POST['btCad'])) {

		$nome = $_POST['txtNome'];
		$telefone = $_POST['txtLogin'];
		$email = $_POST['txtSenha'];
		$nivel = $_POST['selNivel'];

		$sql = "INSERT INTO users VALUES(null, '$nome', '$login', '$senha', '$nivel')";

		if(mysqli_query($banco, $sql))
			header("location: users.php?sucesso=Contato cadastrado com sucesso !!!");
		else
			header("location: users.php?error=Erro ao cadastrar contato");
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
				<h2>Cadastrando Usuarios</h2>
				<form action="#" method="post" id="formUser" name="formUser">
					<input type="text" name="txtNome" id="txtNome" placeholder="Nome User">
					<input type="text" name="txtLogin" id="txtLogin" placeholder="Login">
					<input type="password" name="txtSenha" id="txtSenha" placeholder="Senha">
					<select name="selNivel" id="selNivel">
						<option value="0">Comum</option>
						<option value="1">Adm</option>
					</select>
					<input type="submit" name="btCad" id="btCad" value="Cadastrar">
				</form>
			</section>
		</article>
	</main>
	<footer>Desenvolvido por seres supremos &reg; &copy;</footer>
</body>

</html>