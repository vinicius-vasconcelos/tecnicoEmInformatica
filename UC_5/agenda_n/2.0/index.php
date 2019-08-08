<?php
	require_once('include/connectaBD.php');

	$result = $banco->query("SELECT * FROM contatos ORDER BY nome ");

	if(isset($_GET['btLetra'])) 
		$result = $banco->query("SELECT * FROM contatos WHERE nome LIKE '" . $_GET['btLetra'] . "%' OR nome LIKE upper('" . $_GET['btLetra'] . "%')");

	
	if(isset($_GET['btSearch'])) 
		if($_GET['txtBusca'] == '') 
			$result = $banco->query("SELECT * FROM contatos ORDER BY nome");
		else 
			$result = $banco->query("SELECT * FROM contatos WHERE nome LIKE '%" . $_GET['txtBusca'] . "%' OR nome LIKE upper('%" . $_GET['txtBusca'] . "%')");

	if(isset($_GET['btFavoritos']))
		$result = $banco->query("SELECT * FROM contatos WHERE favoritos = '1'");


	if(isset($_GET['sucesso']) || isset($_GET['error']))
		header("refresh:2; index.php");
?>

<!doctype html>
<html lang="pt-br">
	<head>
		<meta charset="utf-8">
		<title>PokeAgenda2.0 - AnDaNilo</title>
		<link rel="stylesheet" href="css/folha.css" type="text/css">
		<link rel="shortcut icon" type="image/x-icon" href="image/favicon.ico">
		<meta name="keywords" content="PokeAgenda">
		<meta name="autor" content="seu nome aqui">
		<meta name="description" content="Agenda de contatos e possíveis clientes">

		<link 
			rel="stylesheet" href="https://use.fontawesome.com/releases/v5.8.2/css/all.css"
    		integrity="sha384-oS3vJWv+0UjzBfQzYUhtDYW+Pj2yciDJxpsK1OYPAYjqT085Qq/1cq5FLXAZQ7Ay" 
			crossorigin="anonymous">
	</head>
	<body>
		<?php include('include/inc_topo.php');?>
		<?php include('include/inc_menu.php');?>

		<main>
			<article>
				<section id="menuAlfabeto">
					<div id="alfabeto">
						<ul>
							<li><a href="index.php?btLetra=a">A</a></li>
							<li><a href="index.php?btLetra=b">B</a></li>
							<li><a href="index.php?btLetra=c">C</a></li>
							<li><a href="index.php?btLetra=d">D</a></li>
							<li><a href="index.php?btLetra=e">E</a></li>
							<li><a href="index.php?btLetra=f">F</a></li>
							<li><a href="index.php?btLetra=g">G</a></li>
							<li><a href="index.php?btLetra=h">H</a></li>
							<li><a href="index.php?btLetra=i">I</a></li>
							<li><a href="index.php?btLetra=j">J</a></li>
							<li><a href="index.php?btLetra=k">K</a></li>
							<li><a href="index.php?btLetra=l">L</a></li>
							<li><a href="index.php?btLetra=m">M</a></li>
							<li><a href="index.php?btLetra=n">N</a></li>
							<li><a href="index.php?btLetra=o">O</a></li>
							<li><a href="index.php?btLetra=p">P</a></li>
							<li><a href="index.php?btLetra=q">Q</a></li>
							<li><a href="index.php?btLetra=r">R</a></li>
							<li><a href="index.php?btLetra=s">S</a></li>
							<li><a href="index.php?btLetra=t">T</a></li>
							<li><a href="index.php?btLetra=u">U</a></li>
							<li><a href="index.php?btLetra=v">V</a></li>
							<li><a href="index.php?btLetra=w">W</a></li>
							<li><a href="index.php?btLetra=x">X</a></li>
							<li><a href="index.php?btLetra=y">Y</a></li>
							<li><a href="index.php?btLetra=z">Z</a></li>
							<li><a href="index.php?btFavoritos=true"><i class="far fa-star"></i></a></li>
						</ul>
					</div>
				</section>
				
				<h3><a href="contatoAdd.php">Cadastrar Contato</a></h3>
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
						<?php while($row = mysqli_fetch_array($result)) {?>
							<div class="list-item">
								<div class="listNome"><?= $row['nome']?></div>
								<div class="listTel"><?= $row['tel']?></div>
								<div class="listEmail"><?= $row['email']?></div>
								
								<div class="buttons">

									<?php if((int)$row['favoritos']) {?>
										<div class="star"><a href="favoritar.php?star=<?= $row['idcontatos']?>&op=0"><i class="far fa-thumbs-up"></i></a></div>
									<?php } else { ?>
										<div class="no-star"><a href="favoritar.php?star=<?= $row['idcontatos']?>&op=1"><i class="far fa-thumbs-down"></i></a></div>
									<?php }?>

									<div class="up">
										<a href="contatoUp.php?id=<?= $row['idcontatos']?>&nome=<?= $row['nome']?>&tel=<?= $row['tel']?>&email=<?= $row['email']?>&user=<?= $row['users_idusers']?>">
										<i class="fas fa-user-edit"></i>
									</a>
									</div>
									<div class="del">
										<a href="contatoDel.php?id=<?= $row['idcontatos']?>">
										<i class="fas fa-user-times"></i>
										</a>
									</div>
								</div>
							</div>
						<?php }?>
						<?php if(isset($_GET['btLetra']) && mysqli_num_rows($result) == 0) {?>
							<h2>Não há pessoas que iniciam com a letra '<?= $_GET['btLetra']?>'</h2>
						<?php }?>
					</div>

				</section>
			</article>
		</main>

		<?php include('include/inc_rodape.php');?>
	</body>
</html>