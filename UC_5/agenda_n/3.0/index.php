<?php 
	require_once("./include/connectaBD.php");

	$sql = "SELECT * FROM agendamentos WHERE data = CURDATE()  ORDER BY data DESC";
	$sql2 = "SELECT * FROM contatos ORDER BY nome ASC";

	$result = $banco->query($sql);
	$result2 = $banco->query($sql2);
?>

<!doctype html>
<html lang="pt-br">
	<head>
		<meta charset="utf-8">
		<title>PokeAgenda3.0 - AnDaNilo</title>
		<link rel="stylesheet" href="css/folha.css" type="text/css">
		<link rel="shortcut icon" type="image/x-icon" href="image/favicon.ico">
		<meta name="keywords" content="PokeAgenda">
		<meta name="autor" content="seu nome aqui">
		<meta name="description" content="Agenda de contatos e possíveis clientes">
	</head>
	<body>
		<header>
			<div id="logo"><img src="image/logoTwo.png" alt="Logo PokeAgenda"></div>
		</header>

		<nav>
			<ul>
				<li><a href="index.php">Inicio</a></li>
				<li><a href="ctrlweb/index.php">Administração</a></li>
				<li><a href="javascript:history.back();">Voltar</a></li>
			</ul>
		</nav>

		<main>
			<h1>Agenda de clientes/contato e eventos</h1>
			<article id="index"> 
				<section class="listAll">
					<h2>Listando todos os Contatos</h2>

					<div id="search">
						<form action="#" method="get" name="formBusca" id="formBusca">
							<input type="text" name="txtBusca" id="txtBusca" placeholder="Que nome deseja ver">
							<input type="submit" name="btSerach" id="btSearch" value="Buscar">
						</form>
					</div>

					<?php while($row = mysqli_fetch_array($result2)) {?>
						<div class="list-item-foto">
							<div class="foto">
								<img src="./image/<?= $row['foto']?>" alt="">
							</div>
							<div>
								<div class="listNome">Nome:<?= $row['nome'] ?></div>
								<div class="listTel">Telefone: <?= $row['tel']; ?></div>
								<div class="listEmail"><?= $row['email']; ?></div>
							</div>
						</div>
							
					<?php } ?>
				</section>

				<section class="listAll">
					<h2>Listando todos os Eventos de hoje</h2>
					<div id="search">
						<form action="#" method="get" name="formBusca2" id="formBusca2">
							<input type="text" name="txtBusca2" id="txtBusca2" placeholder="Dia desejado">
							<input type="submit" name="btSerach2" id="btSearch2" value="Buscar">
						</form>
					</div>
					
					<div class="list">
						<?php while($row = mysqli_fetch_array($result)) {?>
							<div class="list-item2">
								<div class="listEvent">Título: <?= $row['titulo'] ?></div>
								<div class="listEvent">Local: <?= $row['local'] ?></div>
								<div class="listEvent">Obs: <?= $row['obs'] ?></div>
								<?php if($row['concluido'] == 0) {?>
									<div class="listEvent">Inacabado</div>
								<?php } else { ?>
									<div class="listEvent">Concluído</div>
								<?php } ?>
							</div>
						<?php } ?>
					</div>
				</section>
			</article>
		</main>
		<footer>Desenvolvido por seres supremos &reg; &copy;</footer>
	</body>
</html>