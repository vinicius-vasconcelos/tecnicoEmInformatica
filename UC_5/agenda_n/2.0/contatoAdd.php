<?php
	require_once('include/connectaBD.php');

	$result = $banco->query("SELECT * FROM users");

	if(isset($_POST['btCad'])) {
		$nome = $_POST['txtNome'];
		$telefone = $_POST['txtTelefone'];
		$email = $_POST['txtEmail'];
		$idUser = $_POST['selUser'];

		$execute = "INSERT INTO contatos VALUES (NULL, '$nome', '$telefone', '$email', '0', $idUser)";

		if(mysqli_query($banco, $execute))
			header("location: index.php");
		else
			echo 'ERROR: ' . mysqli_error($banco);
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
		<?php include('include/inc_topo.php');?>
		<?php include('include/inc_menu.php');?>

		<main>
			<article>
				<h1>Agenda de clientes/contato</h1>
				<section id="listar">
					<h2>Novo cadastro</h2>
					<div id="newCad">
							<form action="#" method="post" name="formCad" id="formCad">
								<input type="text" name="txtNome" id="txtNome" placeholder="Nome">
								<input type="text" name="txtTelefone" id="txtTelefone" placeholder="Telefone">
								<input type="text" name="txtEmail" id="txtEmail" placeholder="E-Mail">
								<select name="selUser" id="selUser">
									<?php while($row = mysqli_fetch_array($result)) {?>
										<option value="<?= $row['idusers']?>"><?= $row['nome']?></option>
									<?php }?>
								</select>
								<input type="submit" name="btCad" id="btCad" value="Cadastrar">
							</form>
					</div>
				</section>
			</article>
		</main>

		<?php include('include/inc_rodape.php');?>
	</body>	
</html>