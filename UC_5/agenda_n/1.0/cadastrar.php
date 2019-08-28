<?php
	require_once('include/connectaBD.php');

	if(isset($_POST['btCad'])) {
		$nome = $_POST['txtNome'];
		$telefone = $_POST['txtTelefone'];
		$email = $_POST['txtEmail'];

		$sql = "INSERT INTO contatos VALUES (NULL, '$nome', '$telefone', '$email')";

		if(mysqli_query($banco, $sql))
			header("location: index.php");
		else
			echo "Deu ruiz cuzão, arruma essa porra ae !!! [ERROR: " . mysqli_error . "]";
	}
?>

<!doctype html>
<html lang="pt-br">
	<head>
		<meta charset="utf-8">
		<title>PokeAgenda - AnDaNilo - Cadastrar</title>
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
				<form action="#" method="get" name="formBusca" id="formBusca"><input type="text" name="txtBusca" id="txtBusca" placeholder="Digite parte de um nome"><input type="submit" name="btSerach" id="btSearch" value="Buscar">
				</form>
			</div>
		</header>
		<nav>
			<a href="index.php">Home</a> <a href="cadastrar.php">Cadastrar</a>
		</nav>
		<main>
			<article>
				<h1 style="color:#fff; text-align: center; margin: 30px 0;">Agenda de clientes/contato</h1>
				
				<section id="listar">
					<div id="newCad">
					<form action="#" method="post" name="formCad" id="formCad">
						<h2 style="color: #fff">Novo cadastro</h2>
						<input type="text" name="txtNome" id="txtNome" placeholder="Nome*" required autofocus>
						<input type="text" name="txtTelefone" id="txtTelefone" placeholder="Celular*" required>
						<input type="email" name="txtEmail" id="txtEmail" placeholder="E-Mail*" required>
						<input type="submit" name="btCad" id="btCad" value="Cadastrar">
						</form>
					</div>
					
				</section>
			</article>
		</main>
		<footer>Desenvolvido por seres supremos &reg; &copy;</footer>
	</body>

	<script 
		src="https://code.jquery.com/jquery-3.3.1.min.js" 
		integrity="sha256-FgpCb/KJQlLNfOu91ta32o/NMZxltwRo8QtmkMRdAu8="
		crossorigin="anonymous">
	</script>

	<script 
		src="https://cdnjs.cloudflare.com/ajax/libs/jquery.mask/1.14.15/jquery.mask.min.js">
	</script>

	<script>
		$(document).ready(() => $('#txtTelefone').mask('(00)00000-0000'));
	</script>
</html>