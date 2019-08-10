<?php
	if(isset($_GET['error']) || isset($_GET['sucesso'])) {
		header("refresh:2;url=index.php");
	}
?>

<!doctype html>
<html lang="pt-br">
<head>
	<meta charset="utf-8">
	<title>PokeAgenda - AnDaNilo</title>
	<link rel="stylesheet" href="css/folha.css" type="text/css">
	<link rel="shortcut icon" type="image/x-icon" href="image/favicon.ico">
	<meta name="keywords" content="PokeAgenda">
	<meta name="autor" content="seu nome aqui">
	<meta name="description" content="Agenda de contatos e possíveis clientes">
	<link 
		rel="stylesheet"
		href="https://use.fontawesome.com/releases/v5.8.2/css/all.css"
    	integrity="sha384-oS3vJWv+0UjzBfQzYUhtDYW+Pj2yciDJxpsK1OYPAYjqT085Qq/1cq5FLXAZQ7Ay" 
		crossorigin="anonymous">
</head>
<body>
	<header>
		<div id="logo"><img src="image/logoTwo.png" alt="Logo PokeAgenda"></div>
		<div id="search">
			<form action="#" method="get" name="formBusca" id="formBusca">
				<input type="text" name="txtBusca" id="txtBusca" placeholder="Digite parte de um nome">
				<input type="button" name="btSearch" id="btSearch" value="Buscar">
			</form>
		</div>
	</header>
	<nav>
		<a href="index.php">Home</a> | <a href="cadastrar.php">Cadastrar</a>
	</nav>
	<main>
		<article>
			<h1>Agenda de clientes/contato</h1>
			<section id="menuAlfabeto">
				<div id="alfabeto">
					<ul>
						<li><a href="#">A</a></li>
						<li><a href="#">B</a></li>
						<li><a href="#">C</a></li>
						<li><a href="#">D</a></li>
						<li><a href="#">E</a></li>
						<li><a href="#">F</a></li>
						<li><a href="#">G</a></li>
						<li><a href="#">H</a></li>
						<li><a href="#">I</a></li>
						<li><a href="#">J</a></li>
						<li><a href="#">K</a></li>
						<li><a href="#">L</a></li>
						<li><a href="#">M</a></li>
						<li><a href="#">N</a></li>
						<li><a href="#">O</a></li>
						<li><a href="#">P</a></li>
						<li><a href="#">Q</a></li>
						<li><a href="#">R</a></li>
						<li><a href="#">S</a></li>
						<li><a href="#">T</a></li>
						<li><a href="#">U</a></li>
						<li><a href="#">V</a></li>
						<li><a href="#">W</a></li>
						<li><a href="#">X</a></li>
						<li><a href="#">Y</a></li>
						<li><a href="#">Z</a></li>
					
					</ul>
				</div>
			</section>
			<section id="listar">
				<h2>Listando todos os Contatos</h2>

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
				
				<div class="list">
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
	<script>
		$(document).ready(() => {
			$.ajax({
				type: "GET",
				url: "classes/ctrContato.php?op=gets",
				success: respText => {
					$('div.list').html('');
					$('div.list').append(respText);
				} 
			});

			$('#btSearch').click((e) => { 
				e.preventDefault();
				$.ajax({
					type: "GET",
					url: `classes/ctrContato.php?op=buscarNome&str=${$('#txtBusca').val()}`,
					success: respText => {
						$('div.list').html('');
						$('div.list').append(respText);
					} 
				});
			});
		});
	</script>
</body>
</html>