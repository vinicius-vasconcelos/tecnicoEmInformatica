<?php
	require_once('../include/connectaBD.php');

	if($_SESSION['liberado'] == false)
		header("location: index.php?error=Você não está autorizado, logue-se !!!");


	if(isset($_GET['sucesso']) || isset($_GET['error']))
		header("refresh:3; admin.php");

	if(isset($_POST['btCad'])) {
		$data = date('d-m-YH:i:s');
		$sup = $_FILES['upFt']['size'];
		
		if($sup != 0) {
			$nomeFoto = $_FILES['upFt']['name'];
			$completo = $nomeFoto . "_" . $data;
			$path_parts = pathinfo($nomeFoto);
			$targetPath = 0;
			$nome_foto_md5 = md5($completo);
			$nome_final = $nome_foto_md5 . "." . $path_parts['extension'];

			$targetFile = str_replace('//', '/', $targetPath).$nome_final;
			$temporario = $_FILES['upFt']['tmp_name'];
			$diretorio = "../image/" . $targetFile;
			
			move_uploaded_file($temporario, $diretorio);
			$foto = $targetFile;
		
		} 
		else {
			$foto = "ftDefault.png";
		}

		$nome = $_POST['txtNome'];
		$telefone = $_POST['txtTelefone'];
		$email = $_POST['txtEmail'];
		$userId = "1";

		$sql = "INSERT INTO contatos VALUES(null, '$nome', '$telefone', '$email', '$foto', '$userId')";

		if(mysqli_query($banco, $sql))
			header("location: contatos.php?sucesso=Contato cadastrado com sucesso !!!");
		else
		header("location: contatos.php?error=Contato cadastrado com sucesso !!!");


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
				<section id="listar">
					<h2>Novo cadastro</h2>
					<div id="newCad">
						<form action="#" method="post" name="formCad" id="formCad" enctype="multipart/form-data">
							<input type="text" name="txtNome" id="txtNome" placeholder="Nome">
							<input type="text" name="txtTelefone" id="txtTelefone" placeholder="Telefone">
							<input type="text" name="txtEmail" id="txtEmail" placeholder="E-Mail">
							<input type="file" name="upFt" id="upFt" placeholder="Foto">
							<input type="submit" name="btCad" id="btCad" value="Cadastrar">
						</form>
					</div>
				</section>
			</article>
		</main>
		<footer>Desenvolvido por seres supremos &reg; &copy;</footer>
	</body>
</html>