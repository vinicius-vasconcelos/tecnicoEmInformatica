<?php
	require_once('include/connectaBD.php');
	$result = $banco->query("SELECT * FROM users");
	$userSel = $_GET['user'];

	if(isset($_POST['btCad'])) {
		$id = $_POST['codigo'];
		$nome = $_POST['txtNome'];
		$telefone = $_POST['txtTelefone'];
		$email = $_POST['txtEmail'];
		$idUser = $_POST['selUser'];
		$star = $_GET['star'];

		$execute = "UPDATE contatos SET nome = '$nome', tel = '$telefone', email = '$email', favoritos = '$star', users_idusers = $idUser WHERE idcontatos = $id";

		if(mysqli_query($banco, $execute)) {
			$msg = "Contato alterado com sucesso !!!";
			header("location: index.php?sucesso=" . $msg);
		}
		else {
			$msg = "Problemas ao alterar funcinário, tente mais tarde !";
			header("location: index.php?error=" . $msg);
		}
	}
?>

<!doctype html>
<html lang="pt-br">
	<head>
	<meta charset="utf-8">
	<title>PokeAgenda2.0 - AnDaNilo - Cadastrar</title>
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
			<article>
				<h1>Agenda de clientes/contato</h1>
				<section id="listar">
					<h2>Alterando cadastro</h2>
					<div id="newCad">
						<form action="#" method="post" name="formCad" id="formCad">
							<input type="hidden" name="codigo" id="codigo" value="<?= $_GET['id']?>" readonly>
							<input type="text" name="txtNome" id="txtNome" placeholder="Nome" value="<?= $_GET['nome']?>">
							<input type="text" name="txtTelefone" id="txtTelefone" placeholder="Telefone" value="<?= $_GET['tel']?>">
							<input type="text" name="txtEmail" id="txtEmail" placeholder="E-Mail" value="<?= $_GET['email']?>">
							<select name="selUser" id="selUser">
								<?php while($row = mysqli_fetch_array($result)) {?>
									<?php if($userSel == $row['idusers']) {?>
										<option selected value="<?= $row['idusers']?>"><?= $row['nome']?></option>
									<?php } else {?>
										<option value="<?= $row['idusers']?>"><?= $row['nome']?></option>
									<?php }?>
								<?php }?>
							</select>
							<input type="hidden" name="keyContato" id="keyContato">
							<input type="submit" name="btCad" id="btCad" value="Alterar">
						</form>
					</div>
				</section>
			</article>
		</main>
		<footer>Desenvolvido por seres supremos &reg; &copy;</footer>
	</body>
</html>