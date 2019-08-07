<?php
	require_once('include/connectaBD.php');

	$result = $banco->query("SELECT * FROM contatos ORDER BY nome ");

	if(isset($_GET['btLetra'])) 
		$result = $banco->query("SELECT * FROM contatos WHERE nome LIKE '" . $_GET['btLetra'] . "%' OR nome LIKE upper('" . $_GET['btLetra'] . "%') order by idcontatos desc");

	
	if(isset($_GET['btSearch'])) 
		if($_GET['txtBusca'] == '') 
			$result = $banco->query("SELECT * FROM contatos ORDER BY nome");
		else 
			$result = $banco->query("SELECT * FROM contatos WHERE nome LIKE '%" . $_GET['txtBusca'] . "%' OR nome LIKE upper('%" . $_GET['txtBusca'] . "%')");

	//if(isset($_GET['star']))
		//fazer o star
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
	</head>
	<body>
		<?php include('include/inc_topo.php');?>
		<?php include('include/inc_menu.php');?>

		<main>
			<article>
				<h1>Agenda de clientes/contato</h1>
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
							<li><a href="">Favoritos</a></li>
						</ul>
					</div>
				</section>
				
				<section id="listar">
					<h2>Listando todos os Contatos</h2>
					<h3><a href="contatoAdd.php">Cadastrar Contato</a></h3>

					<div class="list">
						<?php while($row = mysqli_fetch_array($result)) {?>
							<div class="list-item">
								<div class="listNome"><?= $row['nome']?></div>
								<div class="listTel"><?= $row['tel']?></div>
								<div class="listEmail"><?= $row['email']?></div>
								
								<div class="buttons">
									<div class="star"><a href="favoritar.php?star<?= $row['idcontatos']?>">Favoritar</a></div>
									<div class="up"><a href="contatoUp.php?nome=<?= $row['nome']?>&tel=<?= $row['tel']?>&email=<?= $row['email']?>">Editar</a></div>
									<div class="del"><a href="contatoDel.php?id=<?= $row['idcontatos']?>">Excluir</a></div>
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