<?php
	if(isset($_GET['sucesso']) || isset($_GET['error']))
		header("refresh:2; index.php");
?>

<!doctype html>
<html lang="pt-br">
	<head>
		<meta charset="utf-8">
		<title>PokeAgenda3.0 - AnDaNilo</title>
	
		<link rel="shortcut icon" type="image/x-icon" href="../image/favicon.ico">
		<meta name="keywords" content="PokeAgenda">
		<meta name="autor" content="seu nome aqui">
		<meta name="description" content="Agenda de contatos e possíveis clientes">

		<link href="https://fonts.googleapis.com/css?family=Roboto+Condensed:300,400i,700&display=swap" rel="stylesheet">
		<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/animate.css/3.7.2/animate.min.css">
		<link rel="stylesheet" href="../css/folha.css" type="text/css">

	</head>
	<body>
		<header>
			<div id="logo"><img src="../image/top_key.png" alt="Logo PokeAgenda"> Paínel de controle</div>
		</header>

		<main>
			<article>
				<section id="login">

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

					<div id="acesso">
						<form action="../include/verificaBD.php" method="post" name="formAdmin" id="formAdmin">
							<h1>Login de acesso</h1> 
							<input type="text" name="txtLogin" id="txtLogin" placeholder="Login">  
							<input type="password" name="txtSenha" id="txtSenha" placeholder="Senha">
							<input type="submit" name="btEntrar" id="btEntrar" value="Entrar">
						</form>
					</div>
				</section>
			</article>
		</main>
		<footer>Desenvolvido por seres supremos &reg; &copy;</footer>

		<script
  			src="https://code.jquery.com/jquery-3.4.1.min.js"
  			integrity="sha256-CSXorXvZcTkaix6Yvo6HppcZGetbYMGWSFlBw8HfCJo="
  			crossorigin="anonymous">
		</script>

		<script src="../js/efeitos.js"></script>
	</body>
</html>